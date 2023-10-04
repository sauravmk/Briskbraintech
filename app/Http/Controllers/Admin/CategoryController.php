<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class CategoryController extends Controller
{
    /* public function index()
    {
        $categories = Category::all(); // Fetch all categories from your database

        return view('admin.category.index', ['categories' => $categories]);
    } */
    public function index(Request $request)
{
    try {
        // Initialize the query builder
        $query = Category::query();

        // Apply search filter
        if ($request->search_term) {
            $query->where(function ($subquery) use ($request) {
                $subquery->where('name', 'like', '%' . $request->search_term . '%')
                    ->orWhere('slug', 'like', '%' . $request->search_term . '%')
                    ->orWhere('description', 'like', '%' . $request->search_term . '%');
            });
        }

        // Apply status filter
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        // Paginate the results
        $categories = $query->paginate(3);

        if ($request->ajax()) {
            // Return the table view for AJAX requests
            return view('admin.category.category_table', compact('categories'))->render();
        }

        // Return the main index view for non-AJAX requests
        return view('admin.category.index', compact('categories'));
    } catch (\Exception $e) {
        // Log the error for debugging
        Log::error('Error in CategoryController@index: ' . $e->getMessage());

        // Return an error response, you can customize this as needed
        return response()->json(['error' => 'An error occurred'], 500);
    }
}

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validationRules = $this->getValidationRules();

        $this->validate($request, $validationRules);

        $categoryData = $request->only([
            'name', 'slug', 'description', 'meta_title', 'meta_description', 'meta_keywords',
        ]);

        $categoryData['navbar_status'] = $request->input('navbar_status', 0);
        $categoryData['status'] = $request->input('status', 0);

        // Use the handleFileUpload method to get the image path
        $imagePath = $this->handleFileUpload($request);

        if ($imagePath !== null) {
            $categoryData['image'] = $imagePath;
        }

        Category::create($categoryData);

        return redirect('admin/add-category')->with('success', 'Category Added Successfully');
    }



    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->all();

        // Use the handleFileUpload method to get the image path
        $imagePath = $this->handleFileUpload($request);

        if ($imagePath !== null) {
            // Delete the old image file (if it exists)
            $oldImage = $category->image;
            if ($oldImage) {
                $oldImagePath = public_path('images/category/' . $oldImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $data['image'] = $imagePath;
        }

        $category->update($data);

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }



    private function handleFileUpload($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/category');
            $image->move($destinationPath, $name);
            return '/images/category/' . $name;
        }
        return null; 
    }

    public function destroy($id)
    {
       
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()
            ->route('admin.category.index')
            ->with('success', 'Category deleted!');
    }
    private function getValidationRules($forCreate = true)
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ];

        if ($forCreate) {
            $rules['image'] = 'image|mimes:jpg,png,jpeg|max:2048';
        }

        return $rules;
    }
}

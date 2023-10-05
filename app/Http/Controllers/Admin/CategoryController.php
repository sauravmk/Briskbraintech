<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Fetch all categories from your database

        return view('admin.category.index', ['categories' => $categories]);
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
            'name', 'description', 'meta_title', 'meta_description', 'meta_keywords',
        ]);

        // Check if 'navbar_status' checkbox is checked and set the value accordingly
        $categoryData['navbar_status'] = $request->has('navbar_status') ? 1 : 0;

        $categoryData['status'] = $request->has('status') ? 1 : 0;
        $categoryData['slug'] = Str::slug($request->input('slug'));
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
        $data['slug'] = Str::slug($request->input('slug'));
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
            $rules['image'] = 'image|mimes:jpg,png,jpeg|max:4096';
        }

        return $rules;
    }
}

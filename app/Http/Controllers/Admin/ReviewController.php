<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
      
        return view('admin.review.index', compact('reviews'));
    }
    public function create()
    {
        return view('admin.review.create');
    }

    public function store(Request $request)
    {
        $validationRules = $this->getValidationRules();

        $this->validate($request, $validationRules);

        $reviewData = $request->only([
            'client_name', 'designation', 'review_text',
        ]);

        // Use the handleFileUpload method to get the image path
        $imagePath = $this->handleFileUpload($request);

        if ($imagePath !== null) {
            $reviewData['image'] = $imagePath;
        }

        // Create a new review record
        Review::create($reviewData);

        // Redirect to the create page or a different page as needed
        return redirect()->route('reviews.create')->with('success', 'Review Added Successfully');
    }




    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.review.create', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $data = $request->all();

        // Use the handleFileUpload method to get the image path
        $imagePath = $this->handleFileUpload($request);

        if ($imagePath !== null) {
            // Delete the old image file (if it exists)
            $oldImage = $review->image;
            if ($oldImage) {
                $oldImagePath = public_path('images/review/' . $oldImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $data['image'] = $imagePath;
        }

        $review->update($data);

        $reviews = Review::all();
        return view('admin.review.index', compact('reviews'));
    }



    private function handleFileUpload($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/review');
            $image->move($destinationPath, $name);
            return '/images/review/' . $name;
        }
        return null;
    }

    public function destroy($id)
    {

        $review = Review::findOrFail($id);

        $review->delete();

        $reviews = Review::all();
        return view('admin.review.index', compact('reviews'));
    }
    private function getValidationRules($forCreate = true)
    {
        $rules = [
            'client_name' => 'required',
            'designation' => 'required',
            'review_text' => 'required', // Ensure 'review_text' is required
        ];

        if ($forCreate) {
            $rules['image'] = 'image|mimes:jpg,png,jpeg|max:4096';
        }

        return $rules;
    }
}

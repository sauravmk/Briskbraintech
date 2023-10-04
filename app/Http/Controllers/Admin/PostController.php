<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Post::query();

            if ($request->search_term) {
                $query->where(function ($subquery) use ($request) {
                    $subquery->where('name', 'like', '%' . $request->search_term . '%')
                        ->orWhere('slug', 'like', '%' . $request->search_term . '%')
                        ->orWhere('description', 'like', '%' . $request->search_term . '%');
                });
            }

            if ($request->has('status')) {
                $query->where('status', $request->status);
            }

            $data = $query->paginate(3);
            if ($request->ajax()) {

                return view('admin.posts.posts_table', compact('data'))->render();
            }

            return view('admin.posts.index', compact('data'));
        } catch (\Exception $e) {
            Log::error('Error in PostController@index: ' . $e->getMessage());

            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

    public function create()
    {
        // Get all tags
       // $tags = Tag::all();

        $categories = Category::where('status', 0)->get();

        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validationRules = $this->getPostValidationRules();

        $this->validate($request, $validationRules);

        $post = $request->only([
            'category_id', 'name','tags', 'slug', 'description', 'yt_iframe', 'meta_title', 'meta_description', 'meta_keywords',
        ]);

        $post['status'] = $request->input('status', 0);

        // Use the handleFileUpload method to get the image path
        $imagePath = $this->handleFileUploadPost($request);

        if ($imagePath !== null) {
            $post['image'] = $imagePath;
        }

        $tags = explode(",", $request->tags);
        $post  = Post::create($post);
        $post->tag($tags);
        return redirect('admin/add-post')->with('success', 'Category Added Successfully');
    }



    public function edit(Post $post)
    {
        $categories = Category::where('status', 0)->get();

        return view('admin.posts.create', compact('post', 'categories'));
    }


    public function update(Request $request, Post $post)
    {
        $validationRules = $this->getPostValidationRules();

        $this->validate($request, $validationRules);

        $updatedPostData = $request->only([
            'category_id', 'name', 'slug', 'description', 'yt_iframe', 'meta_title', 'meta_description', 'meta_keywords',
        ]);

        $updatedPostData['status'] = $request->input('status', 0);

        $imagePath = $this->handleFileUploadPost($request);

        if ($imagePath !== null) {
            $updatedPostData['image'] = $imagePath;
        }
        if ($post->exists) {
            $post->update($updatedPostData);
        } else {
            $post = Post::create($updatedPostData);
        }
        return redirect()->route('edit-post', $post)->with('success', 'Post Updated Successfully');
    }

    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id);

        // Delete the post
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post Deleted Successfully');
    }

    private function getPostValidationRules($forCreate = true)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'category_id' => 'required|integer',
            'yt_iframe' => 'required|string',
            'tags' => 'required',

        ];
        if ($forCreate) {
            $rules['image'] = 'image|mimes:jpg,png,jpeg|max:2048';
        }
        return $rules;
    }

    private function handleFileUploadPost($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/post');
            $image->move($destinationPath, $name);
            return '/images/post/' . $name;
        }
        return null;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $data = Post::all();
        $categories = Category::all();
        return view('admin.posts.index', compact('data','categories'));
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
            'category_id', 'name', 'description', 'yt_iframe', 'meta_title', 'meta_description', 'meta_keywords',
        ]);

        $post['status'] = $request->has('status') ? 1 : 0;

        // Generate a slug from the 'name' field and set it in the 'slug' field
        $post['slug'] = Str::slug($request->input('slug'));

        // Use the handleFileUpload method to get the image path
        $imagePath = $this->handleFileUploadPost($request);

        if ($imagePath !== null) {
            $post['image'] = $imagePath;
        }        
        Post::create($post);        
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
            'category_id', 'name', 'description', 'yt_iframe', 'meta_title', 'meta_description', 'meta_keywords',
        ]);

        $updatedPostData['status'] = $request->input('status', 0);

        // Generate or update the slug based on the 'slug' input in the request
        $updatedPostData['slug'] = Str::slug($request->input('slug'));

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


    public function destroy($id)
    {
        $post = Post::findOrFail($id);

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


        ];
        if ($forCreate) {
            $rules['image'] = 'image|mimes:jpg,png,jpeg,webp|max:4096';
        }
        return $rules;
    }

    private function handleFileUploadPost($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = base_path('/images/post');
            $image->move($destinationPath, $name);
            return '/images/post/' . $name;
        }
        return null;
    }
}

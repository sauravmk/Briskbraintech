@extends('layouts.master')

@section('title', 'Posts')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Posts</h1>
        <div class="button-container">
            <a href="{{ url('admin/add-post') }}" class="btn btn-primary custom-button"  >Add Posts</a>
            <a href="{{ url('/blog') }}" class="btn btn-warning custom-button" target="_blank">View Posts</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <table id="myDataTable" class="table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Image</th>
                               {{--  <th>Tag</th> --}} <!-- Include the "tag" column -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $post)
                                <tr>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td>{!! Illuminate\Support\Str::limit(strip_tags($post->description), 100) !!}</td>
                                    <td>{{ $post->status }}</td>
                                    <td>
                                        @if ($post->image)
                                            <img src="{{ $post->image }}" alt="post Image"
                                                style="max-width: 100px; max-height: 100px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    {{-- <td>
                                        @foreach ($post->tags as $tag)
                                            <label class="label label-info">{{ $tag->name }}</label>
                                        @endforeach
                                    </td> --}}
                                    <td>
                                        <a href="{{ route('blogsingle', ['slug' => $post->slug]) }}" class="btn btn-sm btn-info" target="_blank">
                                            <i class="fas fa-eye"></i> View
                                        </a>                                        
                                        <a href="{{ route('edit-post', $post->id) }}" class="btn btn-success">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>                                      
                                        <form action="{{ route('delete-post', $post->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this post?')">
                                                <i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>  
                </div>
            </div>
        </div>
    </div>
    
    @endsection

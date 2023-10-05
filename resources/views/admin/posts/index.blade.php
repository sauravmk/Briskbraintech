@extends('layouts.master')

@section('title', 'Posts')

@section('content')

    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mt-4">Posts</h1>
            <a href="{{ url('admin/add-post') }}" class="btn btn-primary">Add Posts</a>
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
                                        <a href="{{ route('edit-post', $post->post_id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('delete-post', $post->post_id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
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

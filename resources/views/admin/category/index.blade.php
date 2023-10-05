@extends('layouts.master')

@section('title', 'Category')

@section('content')

    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mt-4">Category</h1>
            <a href="{{ url('admin/add-category') }}" class="btn btn-primary">Add Category</a>
        </div>
        
        <div class="container">           
            <div class="row">
                <div class="col-md-12">
                    <table id="myDataTable" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th> 
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    @if ($category->image)
                                        <img src="{{ $category->image }}" alt="category Image" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
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

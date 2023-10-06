@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Page Metadata</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Page Name</th>
                    <th>Title</th>
                    <th>Meta Title</th>
                    <th>Meta Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pageMetadata as $metadata)
                    <tr>
                        <td>{{ $pageNames[$metadata->page_name] }}</td>
                        <td>{{ $metadata->title }}</td>
                        <td>{{ $metadata->meta_title }}</td>
                        <td>{{ $metadata->meta_description }}</td>
                        <td>
                            <a href="{{ route('admin.page-metadata.edit', $metadata->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.page-metadata.destroy', $metadata->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this page metadata?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.page-metadata.create') }}" class="btn btn-success">Create Page Metadata</a>
    </div>
@endsection

@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Page Metadata</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.page-metadata.update', $pageMetadata->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="page_name">Page Name:</label>
            <input type="text" id="page_name" name="page_name" class="form-control" value="{{ $pageNames[$pageMetadata->page_name] }}" readonly>
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $pageMetadata->title }}">
        </div>

        <div class="form-group">
            <label for="meta_title">Meta Title:</label>
            <input type="text" id="meta_title" name="meta_title" class="form-control" value="{{ $pageMetadata->meta_title }}">
        </div>

        <div class="form-group">
            <label for="meta_description">Meta Description:</label>
            <textarea id="meta_description" name="meta_description" class="form-control">{{ $pageMetadata->meta_description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Create Page Metadata</h1>
    <form method="POST" action="{{ route('admin.page-metadata.store') }}">
        @csrf

        <div class="form-group">
            <label for="page_name">Page Name</label>
            <select name="page_name" id="page_name" class="form-control">
                @foreach ($pageNames as $routeName => $page)
                    <option value="{{ $routeName }}">{{ $page }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-control">
        </div>

        <div class="form-group">
            <label for="meta_description">Meta Description</label>
            <textarea name="meta_description" id="meta_description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection


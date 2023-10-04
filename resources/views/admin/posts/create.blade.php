@extends('layouts.master')

@section('title', isset($post) ? 'Edit Post' : 'Add Post')

@section('content')

    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mt-4">{{ isset($post) ? 'Edit Post' : 'Add Post' }}</h1>
            <a href="{{ url('admin/posts') }}" class="btn btn-primary">View Posts</a>
        </div>
        <div class="card-body">
            <form action="{{ isset($post) ? route('update-post', $post) : url('admin/add-post') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @if(isset($post))
                    @method('PUT')
                @endif
                <div class="mb-3">
                    <label for="category" class="mb-2">Category</label>
                    <select name="category_id" class="form-control" id="category">
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ isset($post) && $post->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" value="{{ isset($post) ? $post->name : old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
                        id="slug" value="{{ isset($post) ? $post->slug : old('slug') }}">
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror"
                        id="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <img id="image-preview" src="{{ isset($post) ? asset($post->image) : '#' }}"
                        alt="Image Preview" style="max-width: 100%;" />
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description"
                        class="form-control @error('description') is-invalid @enderror"
                        id="description">{{ isset($post) ? $post->description : old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="yt_iframe">YouTube Iframe</label>
                    <input type="text" name="yt_iframe"
                        class="form-control @error('yt_iframe') is-invalid @enderror"
                        id="yt_iframe" value="{{ isset($post) ? $post->yt_iframe : old('yt_iframe') }}">
                    @error('yt_iframe')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
               {{--  <div class="mb-3">
                    <label for="tags">multiple Tag</label>
                    <select name="tags[]" multiple>
                        @foreach($tags as $tag)
                           <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                      </select>
                </div> --}} 
                <div class="form-group">
                    <label>Tags : <span class="text-danger">*</span></label>
                    <br>
                    <input type="text" data-role="tagsinput" name="tags" class="form-control tags">
                    <br>
                    @if ($errors->has('tags'))
                        <span class="text-danger">{{ $errors->first('tags') }}</span>
                    @endif
                </div>
                <h1>SEO</h1>

                <div class="mb-3">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" name="meta_title"
                        class="form-control @error('meta_title') is-invalid @enderror"
                        id="meta_title" value="{{ isset($post) ? $post->meta_title : old('meta_title') }}">
                    @error('meta_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="meta_description">Meta Description</label>
                    <textarea name="meta_description"
                        class="form-control @error('meta_description') is-invalid @enderror"
                        id="meta_description">{{ isset($post) ? $post->meta_description : old('meta_description') }}</textarea>
                    @error('meta_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="meta_keywords">Meta Keywords</label>
                    <textarea name="meta_keywords"
                        class="form-control @error('meta_keywords') is-invalid @enderror"
                        id="meta_keywords">{{ isset($post) ? $post->meta_keywords : old('meta_keywords') }}</textarea>
                    @error('meta_keywords')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <h3>Status</h3>
                <div class="mb-3">
                    <label for="status">Status</label>
                    <input type="checkbox" name="status" id="status" value="1" {{ isset($post) && $post->status == 1 ? 'checked' : '' }}>
                </div>

                <div class="mb-3">
                    <label for="created_by">Created By</label>
                    <input type="text" name="created_by" class="form-control" id="created_by"
                        value="{{ isset($post) ? $post->created_by : old('created_by') }}">
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($post) ? 'Update' : 'Submit' }}</button>
            </form>
        </div>
    </div>

    <!-- Your existing JavaScript code for image preview -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script>
        $(document).ready(function () {
            $('#image').on('change', function (e) {
                var file = e.target.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#image-preview').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(file);
                } else {
                    $('#image-preview').attr('src', '#');
                }
            });
        });
    </script>
@endsection

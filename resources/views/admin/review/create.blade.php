@extends('layouts.master')

@section('title', isset($review) ? 'Edit Review' : 'Add Review')

@section('content')

    <div class="container-fluid px-4">
                <div class="d-flex justify-content-between align-items-center">
            <h1 class="mt-4">{{ isset($review) ? 'Edit Review' : 'Add Review' }}</h1>
            <a href="{{ route('reviews.index') }}" class="btn btn-outline-primary">View Reviews</a>
        </div>
        <div class="card-body">
            <form action="{{ isset($review) ? route('reviews.update', $review) : route('reviews.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @if (isset($review))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="client_name" class="form-label">Client Name</label>
                    <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror"
                        id="client_name" value="{{ isset($review) ? $review->client_name : old('client_name') }}">
                    @error('client_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror"
                        id="designation" value="{{ isset($review) ? $review->designation : old('designation') }}">
                    @error('designation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="review_text" class="form-label">Review Text</label>
                    <textarea name="review_text" class="form-control @error('review_text') is-invalid @enderror" id="review_text"
                        rows="4">{{ isset($review) ? $review->review_text : old('review_text') }}</textarea>
                    @error('review_text')
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
                    <img id="image-preview" src="{{ isset($review) ? asset($review->image) : '#' }}" alt="Image Preview"
                        style="max-width: 100%;" />
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($review) ? 'Update' : 'Submit' }}</button>
            </form>
        </div>
    </div>

    <!-- Your existing JavaScript code for image preview and any other custom scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script>
        $(document).ready(function() {
            $('#image').on('change', function(e) {
                var file = e.target.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(file);
                } else {
                    $('#image-preview').attr('src', '#');
                }
            });
            // Additional custom JavaScript code if needed
        });
    </script>

@endsection

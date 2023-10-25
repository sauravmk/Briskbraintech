@extends('layouts.master')

@section('title', 'Reviews')

@section('content')

    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mt-4">Reviews</h1>
            <a href="{{ url('/#dev') }}" class="btn btn-outline-primary page-primary">View Page</a>
            <a href="{{ url('admin/reviews/create') }}" class="btn btn-outline-warning">Add Reviews</a>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table id="myDataTable" class="table">
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Designation</th>
                                <th>Review</th>
                                <th>Image</th>
                                <th>Actions</th>

                                {{--  <th>Tag</th> --}} <!-- Include the "tag" column -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                    <td>{{ $review->client_name }}</td>
                                    <td>{{ $review->designation }}</td>
                                    <td>{{ $review->review_text }}</td>
                                    <td>
                                        @if ($review->image)
                                            <img src="{{ $review->image }}" alt="post Image"
                                                style="max-width: 100px; max-height: 100px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('reviews.edit', $review->id) }}"
                                            class="btn btn-outline-success">Edit</a>
                                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"
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

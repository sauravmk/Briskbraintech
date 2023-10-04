@extends('layouts.master')

@section('title', 'Category')

@section('content')

    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mt-4">Category</h1>
            <a href="{{ url('admin/add-category') }}" class="btn btn-primary">Add Category</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Category</li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="status" id="status" class="form-control status custom-select">                            
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" name="serach" id="serach" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th> <!-- New column for image preview -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('admin.category.category_table')
                            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        </tbody>
                    </table>
                    <!-- Display pagination links -->
                   {{--  {!! $categories->links('pagination.custom') !!} --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript">
        $(document).ready(function() {
            function fetch_data(page, status, search_term) {
                console.log("Fetching data for page: " + page);
                if (status === undefined) {
                    status = "";
                }

                if (search_term === undefined) {
                    search_term = "";
                }

                $.ajax({
                    url: "{{ route('admin.category.index') }}?page=" + page + "&status=" + status +
                        "&search_term=" + search_term,
                    success: function(data) {
                        $('tbody').html(data);
                    }
                });
            }

            $(document).ready(function() {
                $('body').on('keyup', '#serach', function() {
                    var status = $('#status').val();
                    var search_term = $('#serach').val();
                    var page = $('#hidden_page').val();
                    fetch_data(page, status, search_term);
                });

                $('body').on('change', '#status', function() {
                    var status = $('#status').val();
                    var search_term = $('#serach').val();
                    var page = $('#hidden_page').val();
                    console.log('Status changed to: ' + status); // Display a console message
                    fetch_data(page, status,
                    search_term); // Fetch data based on the selected status
                });

                // Correct the selector to target pagination links with class 'page-link'
                $('body').on('click', '.pager a', function(event){
                    event.preventDefault();
                    var page = $(this).attr('href').split('page=')[1];
                    $('#hidden_page').val(page);
                    var serach = $('#serach').val();
                    var seach_term = $('#status').val();
                    fetch_data(page,status, seach_term);
                });
            });

        });
    </script>
@endsection

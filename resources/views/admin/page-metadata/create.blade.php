@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Create/Update Page Metadata</h1>
    <form method="POST" action="{{ route('admin.page-metadata.store') }}">
        @csrf

        <!-- Add a hidden input field for the ID -->
        <input type="hidden" name="id" id="id" value="">
        
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
            <label for = "meta_description">Meta Description</label>
            <textarea name="meta_description" id="meta_description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script>
   $(document).ready(function () {
    $('#page_name').on('change', function () {
        var selectedPageName = $(this).val();

        // Make an Ajax request to fetch metadata
        $.get('/admin/page-metadata/get-metadata', { page_name: selectedPageName }, function (data) {
            if (data.metadata) {
                // Populate the form fields with the fetched data
                $('#id').val(data.metadata.id);
                $('#title').val(data.metadata.title);
                $('#meta_title').val(data.metadata.meta_title);
                $('#meta_description').val(data.metadata.meta_description);
            } else {
                // If no data is found, clear the form fields
                $('#id').val(''); // Reset the ID field
                $('#title').val('');
                $('#meta_title').val('');
                $('#meta_description').val('');
            }
        });
    });
});
</script>
@endsection

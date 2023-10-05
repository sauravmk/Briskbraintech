@extends('layouts.master')
@section('title', 'Blog Dashboard')
@section('content')

<div class="container-fluid px-4">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Website Settings</h1>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/settings') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Website Name</label>
                            <input type="text" name="website_name" @if($setting) value="{{$setting->website_name}}"@endif class="form-control">
                            @error('website_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Website Email</label>
                            <input type="email" name="email" @if($setting) value="{{$setting->email}}"@endif class="form-control">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Website Address</label>
                            <input type="text" name="address" @if($setting) value="{{$setting->address}}"@endif class="form-control">
                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Website Mobile</label>
                            <input type="text" name="mobile" @if($setting) value="{{$setting->mobile}}"@endif class="form-control">
                            @error('mobile')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control">
                            @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-7">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary float-end">Save Settings</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

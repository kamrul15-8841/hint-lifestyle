@extends('layout.main')
@section('title', 'Add Product')
@section('header')
    <!-- Add your existing styles here -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add New Product</h4>
                <a href="{{ route('products.index') }}" class="btn btn-success">Back to List</a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="style_number" class="form-label">Style Number</label>
                            <input type="text" name="style_number" class="form-control" id="style_number" placeholder="Enter Style Number">
                        </div>
                        <div class="mb-3">
                            <label for="size_id" class="form-label">Size</label>
                            <select name="size_id" id="size_id" class="form-select">
                                <option value="">Select Size</option>
                                @foreach ($sizes as $size)
                                    <option value="{{ $size->id }}">{{ $size->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="color_id" class="form-label">Color</label>
                            <select name="color_id" id="color_id" class="form-select">
                                <option value="">Select Color</option>
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="short_details" class="form-label">Short Details</label>
                            <textarea name="short_details" class="form-control" id="short_details" placeholder="Enter Short Details"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="long_details" class="form-label">Long Details</label>
                            <textarea name="long_details" class="form-control" id="long_details" placeholder="Enter Long Details"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="lot_number" class="form-label">Lot Number</label>
                            <input type="text" name="lot_number" class="form-control" id="lot_number" placeholder="Enter Lot Number">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

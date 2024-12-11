@extends('layout.main')
@section('title', 'Product Details')
@section('header')
    <!-- Add your existing styles here -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Product Details</h4>
                <a href="{{ route('products.index') }}" class="btn btn-success">Back to List</a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th>Style Number</th>
                            <td>{{ $product->style_number }}</td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td>{{ $product->size->title ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>{{ $product->color->title ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Short Details</th>
                            <td>{{ $product->short_details }}</td>
                        </tr>
                        <tr>
                            <th>Long Details</th>
                            <td>{{ $product->long_details }}</td>
                        </tr>
                        <tr>
                            <th>Lot Number</th>
                            <td>{{ $product->lot_number }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $product->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $product->updated_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

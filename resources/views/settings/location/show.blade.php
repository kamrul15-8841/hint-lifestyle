@extends('layout.main')
@section('title', 'View Location')
@section('header')
    <!-- Add your existing styles here -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-location-18">View Location</h4>
                <div class="page-title-right">
                    <a href="{{ route('locations.index') }}">
                        <button type="button" class="btn btn-success waves-effect waves-light">List</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Location Details</h4>
                    <table class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <td>{{ $location->title }}</td>
                        </tr>
                        <tr>
                            <th>Row</th>
                            <td>{{ $location->row->title ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Rack</th>
                            <td>{{ $location->rack->title ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Bin</th>
                            <td>{{ $location->bin->title ?? 'N/A' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

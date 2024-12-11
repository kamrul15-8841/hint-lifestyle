@extends('layout.main')
@section('title', 'Add Location')
@section('header')
    <!-- Add your existing styles here -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-location-18">Add New Location</h4>
                <div class="page-title-right">
                    <a href="{{ route('locations.index')  }}">
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
                    <!-- <h4 class="card-title mb-4">If need</h4> -->
                    <form action="{{ route('locations.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title Name" required>
                                    @error('title') <span class="text-danger">{{ $errors->first('title') }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="row_id" class="form-label">Row</label>
                                    <select name="row_id" id="row_id" class="form-select">
                                        <option value="" selected>Select Row</option>
                                        @foreach ($rows as $row)
                                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="rack_id" class="form-label">Rack</label>
                                    <select name="rack_id" id="rack_id" class="form-select">
                                        <option value="" selected>Select Rack</option>
                                        @foreach ($racks as $rack)
                                            <option value="{{ $rack->id }}">{{ $rack->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="bin_id" class="form-label">Bin</label>
                                    <select name="bin_id" id="bin_id" class="form-select">
                                        <option value="" selected>Select Bin</option>
                                        @foreach ($bins as $bin)
                                            <option value="{{ $bin->id }}">{{ $bin->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

    </div>
@endsection


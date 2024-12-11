@extends('layout.main')
@section('title','Row')
@section('header')
    <!-- Add your existing styles here -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <h5 class="card-header bg-transparent border-bottom text-uppercase">Row Details</h5>
                <div class="card-body">
                    <h4 class="card-title">{{ $row->title }}</h4>
                    <p class="card-text">{{ $row->title }}</p>
                    <a href="{{ route('rows.index') }}" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection

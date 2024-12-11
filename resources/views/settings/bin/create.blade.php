@extends('layout.main')
@section('title', 'Add Bin')
@section('header')
    <!-- Add your existing styles here -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Add New Bin</h4>
                <div class="page-title-right">
                    <a href="{{ route('bins.index')  }}">
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
                    <form action="{{ route('bins.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title Name" >
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

{{--@section('jsLink')--}}
{{--    <!-- JAVASCRIPT -->--}}
{{--    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>--}}
{{--    --}}{{-- <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script> --}}

{{--    <!-- apexcharts -->--}}
{{--    --}}{{-- <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}


{{--    @stack('body-scripts')--}}

{{--    <!-- Required datatable js -->--}}
{{--    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--    <!-- Buttons examples -->--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>--}}

{{--    <!-- Responsive examples -->--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>--}}


{{--    <!-- Datatable init js -->--}}
{{--    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>--}}

{{--    <script src="{{ asset('assets/js/app.js') }}"></script>--}}
{{--@endsection--}}

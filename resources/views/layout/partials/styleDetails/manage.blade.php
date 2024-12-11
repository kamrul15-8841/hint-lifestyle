@extends('layout.main')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Style Details</h4>

                <div class="page-title-right">
                    <a href="{{ URL('/style-details-create') }}">
                        <button type="button" class="btn btn-success waves-effect waves-light">Add New</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>

                            <tr>
                                <th>Style No</th>
                                <th>Division</th>
                                <th>Season</th>
                                <th>Product Category</th>
                                <th>Age Range</th>
                                <th>Order Quantity</th>
                                <th>SMV</th>
                                <th>CM Per Pcs</th>
                            </tr>

                        </thead>


                        <tbody>
                            <tr>
                                <td>Boys/Spring2025/Tops/H0001/2024</td>
                                <td>Boys</td>
                                <td>Spring 2025</td>
                                <td>Tops</td>
                                <td>Adults</td>
                                <td>29,800 pcs</td>
                                <td>10</td>
                                <td>45.5</td>
                            </tr>
                            <tr>
                                <td>Men/Winter2025/Shirt/H0003/2024</td>
                                <td>Men</td>
                                <td>Winter 2025</td>
                                <td>Shirt</td>
                                <td>Adults</td>
                                <td>29,800 pcs</td>
                                <td>10</td>
                                <td>45.5</td>
                            </tr>
                            <tr>
                                <td>Boys/Spring2025/Tops/H0002/2024</td>
                                <td>Boys</td>
                                <td>Spring 2025</td>
                                <td>Tops</td>
                                <td>Adults</td>
                                <td>29,800 pcs</td>
                                <td>10</td>
                                <td>45.5</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>

    {{-- @push('body-scripts')
        @once
            <!-- Required datatable js -->
            <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
            <!-- Buttons examples -->
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
            <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
            <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

            <!-- Responsive examples -->
            <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        @endonce
    @endpush --}}
@endsection

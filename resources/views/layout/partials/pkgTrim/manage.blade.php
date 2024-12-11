@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pkg Trim Cost</h4>

                <div class="page-title-right">
                    <a href="{{ URL('/pkg-trim-cost-create') }}">
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
                            <th>Total Yds</th>
                            <th>Total Price</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>637735372</td>
                            <td>35423</td>
                            <td>3200</td>
                        </tr>
                        <tr>
                            <td>637735382</td>
                            <td>25987</td>
                            <td>320</td>
                        </tr>
                        <tr>
                            <td>637735392</td>
                            <td>36587</td>
                            <td>3200</td>
                        </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

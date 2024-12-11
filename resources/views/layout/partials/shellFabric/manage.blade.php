@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Shell Fabric</h4>

            <div class="page-title-right">
                <a href="{{ URL('/shell-fabric-create') }}">
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
                        <td>61776</td>
                        <td>320,100</td>
                    </tr>
                    <tr>
                        <td>637735382</td>
                        <td>61483</td>
                        <td>320,200</td>
                    </tr>
                    <tr>
                        <td>637735392</td>
                        <td>61780</td>
                        <td>320,500</td>
                    </tr>


                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection

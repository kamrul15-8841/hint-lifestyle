@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Other Fabric</h4>

            <div class="page-title-right">
                <a href="{{ URL('/other-fabric-create') }}">
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
                        <td>55524</td>
                        <td>3200</td>
                    </tr>
                    <tr>
                        <td>637735382</td>
                        <td>36542</td>
                        <td>3200</td>
                    </tr>
                    <tr>
                        <td>637735392</td>
                        <td>32254</td>
                        <td>500</td>
                    </tr>


                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection

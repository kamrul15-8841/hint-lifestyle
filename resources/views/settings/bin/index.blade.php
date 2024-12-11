@extends('layout.main')
@section('title','Bin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Bin</h4>

                <div class="page-title-right">
                    <a href="{{ route('bins.create')  }}">
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
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr>
                            <th>SI No</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($bins as $bin)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $bin->title }}</td>
                            <td>
                                <a href="{{ route('bins.show', $bin->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Show">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('bins.edit', $bin->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('bins.destroy', $bin->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-secondary btn-sm edit" title="Delete"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@section('jsLink')
    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
@endsection

@extends('layout.main')
@section('title','Size')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Size</h4>

                <div class="page-title-right">
                    <a href="{{ route('sizes.create')  }}">
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
                        @foreach ($sizes as $size)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $size->title }}</td>
                            <td>
                                <a href="{{ route('sizes.show', $size->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Show">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('sizes.edit', $size->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('sizes.destroy', $size->id) }}" method="POST" style="display: inline;">
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

@extends('backend.master')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <!-- end col -->
                <div class="col-md-10 offset-1">
                    <div class="card-box">
                        <h4 style="float:left" class="header-title mb-4">Trash Category</h4>
                        <a href="{{ url('view-category')}}" style="float:right"><i class="fa fa-list"></i>View</a>
                        {{-- Success message --}}
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($service as $key => $ser)
                                <tr>
                                    <th scope="row">{{ $service->firstItem() + $key }}</th>
                                    <td>{{ $ser->title }}</td>
                                    <td>{{ $ser->created_at ?? "N/A" }}</td>
                                    <td>
                                        <a class="btn btn-outline-success" href="#">Resotore</a>
                                        <a class="btn btn-outline-danger" href="#">Permanet Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                         </table>
                        {{ $categoris->links() }}
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div>
@endsection

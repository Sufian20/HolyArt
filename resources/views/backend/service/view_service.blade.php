@extends('backend.master')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <!-- end col -->
                <div class="col-md-10 offset-1">
                    <div class="card-box">
                        <h4 style="float:left" class="header-title mb-4">View Services</h4>
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
                                <th scope="col">Titel</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $key => $ser)
                                <tr>
                                     <th scope="row">{{ $services->firstItem() + $key }}</th>
                                    <td>{{ $ser->title }}</td>
                                    <td>{{ $ser->des }}</td>
                                    
                                    <td>
                                        <a class="btn btn-outline-success" href="#">View</a>
                                        <a class="btn btn-outline-primary" href="{{ url('edit-service') }}/{{ $ser->id }}">Edit</a>
                                       <a class="btn btn-outline-danger" href="{{ url('delete-service') }}/{{ $ser->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                         </table>
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div>
@endsection

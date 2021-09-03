@extends('backend.master')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <!-- end col -->
                <div class="col-md-10 offset-1">
                    <div class="card-box">
                        <h4 style="float:left" class="header-title mb-4">View About</h4>
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
                                <th scope="col">Icon</th>
                                <th scope="col">Titel</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $key => $abo)
                                <tr>
                                     <th scope="row">{{ $abouts->firstItem() + $key }}</th>
                                    <td>{{ $abo->about_icon }}</td>
                                    <td>{{ $abo->about_title }}</td>
                                    <td>{{ $abo->about_des }}</td>
                                    
                                    <td>
                                        <a class="btn btn-outline-success" href="#">View</a>
                                        <a class="btn btn-outline-primary" href="{{ url('edit-about') }}/{{ $abo->id }}">Edit</a>
                                       <a class="btn btn-outline-danger" href="{{ url('delete-about') }}/{{ $abo->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                         </table>
                        {{ $abouts->links() }}
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div>
@endsection

@extends('backend.master')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <!-- end col -->
                <div class="col-md-10 offset-1">
                    <div class="card-box">
                        <h4 style="float:left" class="header-title mb-4">View Coursess <span class="coursess" style="padding-left: 539px"><a href="{{route('AddCoursess')}}" class="btn btn-sm btn-primary">Add Coursess</a></span> </h4>
                         @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        @endif

                        @php
                            $sl = 1;
                        @endphp

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Instractor Name</th>
                                <th scope="col">Coursess Name</th>
                                <th scope="col">Coursess image</th>
                                <th scope="col">Instractor image</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($populler_coursess as $key => $cour)
                                <tr>
                                     <td scope="row">{{ $sl++ }}</td>
                                    <td>{{ $cour->instractor_name }}</td>
                                    <td>{{ $cour->coursess_name }}</td>
                                    <td><img src="{{ asset('coursess/'.$cour->coursess_img) }}" alt="{{ $cour->coursess_name }}" width="150" height="100"></td>
                                     <td><img src="{{ asset('coursess/'.$cour->instractor_img) }}" alt="{{ $cour->coursess_name }}" width="100" height="100"></td>
                                    
                                    <td>
                        
                                        <a class="btn btn-sm btn-info" href="{{ url('edit-coursess') }}/{{ $cour->id }}">Edit</a>
                                       <a class="btn btn-sm btn-danger" href="{{ url('delete-coursess') }}/{{ $cour->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                         </table>
                     
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div>
@endsection

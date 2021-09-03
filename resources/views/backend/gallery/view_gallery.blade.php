@extends('backend.master')

@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">

            <!-- Right Sidebar -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="content">
                        <h4 class="header-title mb-4">View Gallery <span class="link-btn" style="padding-left: 663px;"><a href="{{route('PostPhoto')}}" class="btn btn-sm btn-info ">ADD Protfolio</a></span></h4>
                            <!-- Start Content-->

                            <div class="row">
                                <!-- end col -->
                                <div class="col-md-10 offset-1">
                                  

                                    {{-- Success message --}}
                                    @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Hey!</strong> {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="card-box">
                                    
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                        
                                                    <th scope="col"> #</th>
                                                    <th scope="col">Category Name</th>
                                                    <th scope="col">Image</th>

                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $sl = 1;
                                            @endphp

                                             <tbody>
                            @foreach($photos as $key => $cour)
                                <tr>
                                     <td scope="row">{{ $sl++ }}</td>
                                    <td>{{ $cour->category->category_name}}</td>
                                    
                                    <td><img src="{{ asset('gallery/'.$cour->images) }}" alt="#" width="150" height="100"></td>
                    
                                    
                                    <td>
                        
                                        <a class="btn btn-sm btn-info" href="{{ url('edit-photo') }}/{{ $cour->id }}">Edit</a>
                                       <a class="btn btn-sm btn-danger" href="{{ url('delete-photo') }}/{{ $cour->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                        </div>


                    </div>
                </div> <!-- card body -->
            </div> <!-- card -->

        </div>
    </div>
</div>

@endsection

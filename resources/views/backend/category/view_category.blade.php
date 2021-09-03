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
                        <h4 class="header-title mb-4">View Category <span class="btn-r" style="margin-left: 826px;"><a href="{{ route('AddCategory') }}" class="btn btn-sm btn-primary">Add Category</a></span></h4>
                            <!-- Start Content-->

                            <div class="row">
                                <!-- end col -->
                                <div class="col-md-10 offset-1">
                                    @if (session('message'))
                                    <div class="alert alert-primary">
                                        <span>{{ session('message') }}</span>
                                    </div>
                                    @endif

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

                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $sl = 1;
                                            @endphp
                                            <tbody>
                                                @foreach($categoris as $key => $cat)
                                                <tr>
                                                    
                                                    <td>{{$sl++ }}</td>
                                                    <td>{{ $cat->category_name }}</td>
                                
                                                    <td>
                                                        <a class="btn btn-sm btn-info" href="{{ url('edit-category') }}/{{ $cat->id }}">Edit</a>
                                                        <a class="btn btn-sm btn-danger" href="{{ url('delete-category') }}/{{ $cat->id }}">Delete</a>
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

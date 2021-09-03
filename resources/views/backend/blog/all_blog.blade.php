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
                            <!-- Start Content-->

                            <div class="row">
                                <!-- end col -->
                                <div class="col-md-10 offset-1">
                                    <div class="card-box">
                                        <h4 class="header-title mb-4">View Blog </h4>

                                        {{-- Success message --}}
                                        @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Hey!</strong> {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif


                                        <img src="{{ asset('blog/'.$blogs->blog_image) }}" alt="Image" width="260" height="260">
                                            <div class="form-group row">
                                                <label for="blog_title" class="col-3 col-form-label">Blog Title</label>
                                                <div class="col-9">
                                                    <p>{{ $blogs->blog_title }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="slug" class="col-3 col-form-label">Slug</label>
                                                <div class="col-9">
                                                    <p>{{$blogs->slug}}</p>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="user_id" class="col-3 col-form-label">User Name</label>
                                                <div class="col-9">
                                                    <p>{{$blogs->user_id}}</p>

                                                </div>

                                                </select>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="category_id" class="col-3 col-form-label">Category Name</label>
                                                <div class="col-9">
                                                    
                                               <p> {{$blogs->category}}</p>
                                                
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="blog_des" class="col-3 col-form-label">Details</label>
                                        <div class="col-9">
                                            <p>{{$blogs->blog_des}}</p>
                                        </div>
                                    </div>
                                    

                                    
                                   
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



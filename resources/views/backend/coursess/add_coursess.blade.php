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
                                        <h4 class="header-title mb-4">Add Coursess </h4>

                                        {{-- Success message --}}
                                        @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Hey!</strong> {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif


                                        <form class="form-horizontal" role="form" action="{{route('PostCoursess')}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="coursess_img" class="col-3 col-form-label">Coursess Picture</label>
                                                <div class="col-9">
                                                    <input type="file" class="form-control @error('coursess_img	') is-invalid @enderror" value="{{ old('coursess_img') }}" name="coursess_img" id="coursess_img" accept="image/*">
                                                    @error('coursess_img')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                              <div class="form-group row">
                                                <label for="instractor_img" class="col-3 col-form-label">Instractor Picture</label>
                                                <div class="col-9">
                                                    <input type="file" class="form-control @error('instractor_img	') is-invalid @enderror" value="{{ old('instractor_img') }}" name="instractor_img" id="instractor_img" accept="image/*">
                                                    @error('instractor_img')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="coursess_name" class="col-3 col-form-label">Coursess Name</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control @error('coursess_name') is-invalid @enderror" value="{{ old('coursess_name') }}" name="coursess_name" id="coursess_name" placeholder="Ex: Computer Application .">
                                                    @error('coursess_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="instractor_name" class="col-3 col-form-label">Instractor Name</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control @error('instractor_name') is-invalid @enderror" value="{{ old('instractor_name') }}" name="instractor_name" id="instractor_name" placeholder="Ex: A. Korim .">
                                                    @error('instractor_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end row text-center">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
                                        </form>
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

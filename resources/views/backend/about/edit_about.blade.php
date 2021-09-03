@extends('backend.master')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <!-- end col -->
                <div class="col-md-10 offset-1">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Edit About</h4>
                        
                        {{-- Success message --}}
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        @endif

                       
                        <form class="form-horizontal" role="form" action="{{url('/update-about')}}" method="post">
                        @csrf
                            <div class="form-group row">
                                <label for="about_icon" class="col-3 col-form-label">About Icon</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('about_icon') is-invalid @enderror" value="{{ $abouts->about_icon ??  old('about_icon') }}"    name="about_icon" id="about_icon" placeholder="Enter about icon">
                                    @error('about_icon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="about_title" class="col-3 col-form-label">About Title</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('about_title') is-invalid @enderror" value="{{ $abouts->about_title ?? old('about_title') }}"    name="about_title" id="about_title" placeholder="About Title">
                                    @error('about_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="about_des" class="col-3 col-form-label">About Description</label>
                                 <div class="col-9">
                                    <textarea name="about_des"  class="form-control  @error('about_des') is-invalid @enderror"> 
                                         {{ $abouts->about_des ?? old('about_des') }}
                                    </textarea>

                                       
                                     @error('about_des')
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
        </div> <!-- end container-fluid -->
    </div>
@endsection

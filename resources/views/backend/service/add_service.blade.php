@extends('backend.master')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <!-- end col -->
                <div class="col-md-10 offset-1">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Add Service</h4>
                        
                        {{-- Success message --}}
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        @endif

                       
                        <form class="form-horizontal" role="form" action="{{url('post-service')}}" method="post">
                        @csrf
                            <div class="form-group row">
                                <label for="title" class="col-3 col-form-label">Service Title</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"    name="title" id="title" placeholder="Service Title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="des" class="col-3 col-form-label">Service Description</label>
                                 <div class="col-9">
                                    <textarea name="des" id="my-editor" class="form-control  @error('des') is-invalid @enderror" value="{{ old('des') }}"> 
                                    
                                    </textarea>
                                     @error('des')
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

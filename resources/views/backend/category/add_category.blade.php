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
                                        <h4 class="header-title mb-4">Add Category <span class="btn-r" style="margin-left: 700px;"><a href="{{ route('ViewCategory') }}" class="btn btn-sm btn-primary">View Category</a></span></h4>

                                        {{-- Success message --}}
                                        @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Hey!</strong> {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                                      

                                        <form class="form-horizontal" role="form" action="{{route('PostCategory')}}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="category_name" class="col-3 col-form-label">Category Name</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" value="{{ old('category_name') }}" name="category_name" id="category_name" placeholder="Ex: Dental">
                                                    @error('category_name')
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


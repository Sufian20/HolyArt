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
                                        <h4 class="header-title mb-4">Edit Gallery <span class="link-btn" style="padding-left: 726px;"><a href="{{route('ViewPhoto')}}" class="btn btn-sm btn-info ">View Gallery</a></span></h4>

                                        {{-- Success message --}}
                                        @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Hey!</strong> {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif


                                        <form class="form-horizontal" role="form" action="{{route('UpdatePhoto')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$photos->id}}">
                                            <div class="form-group row">
                                                <label for="category_id" class="col-3 col-form-label">Name</label>
                                                <div class="col-9">
                                                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">

                                                        @foreach($categoris as $cat)
                                                        <option <?php if($photos->category_id == $cat->id ) {{ echo "selected"; }} ?> value="{{$cat->id}}"> {{ $cat->category_name }} </option>
                                                        @endforeach
                                                        @error('category_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                </div>

                                                </select>
                                            </div>
                                            
                                    </div>
                                     <div class="form-group row">
                                    <label for="prot_image" class="col-3 col-form-label">Photo</label>
                                    <div class="col-9">
                                        <img src="{{ asset('gallery/'.$photos->images) }}" alt="Image" width="160" height="160">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="images" class="col-3 col-form-label">Change Photo</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control @error('images') is-invalid @enderror" value="{{ old('images') }}" name="images" id="images" accept="image/*">
                                        @error('images')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                </div>
                               

                                <div class="form-group mb-0 justify-content-end row text-center">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
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

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
                                        <h4 class="header-title mb-4">Eidt Blog </h4>

                                        {{-- Success message --}}
                                        @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Hey!</strong> {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif


                                        <form class="form-horizontal" role="form" action="{{route('UpdateBlog')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$blogs->id}}">
                                            <div class="form-group row">
                                                <label for="blog_title" class="col-3 col-form-label">Blog Title</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control @error('blog_title') is-invalid @enderror" value="{{ $blogs->blog_title ?? old('blog_title') }}" name="blog_title" id="blog_title" placeholder="Ex: Tips for a Healthy Smile .">
                                                    @error('blog_title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="slug" class="col-3 col-form-label">Slug</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{$blogs->slug ?? old('slug') }}" name="slug" id="slug">
                                                    @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="user_id" class="col-3 col-form-label">User Name</label>
                                                <div class="col-9">
                                                    <select name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror">

                                                        @foreach($users as $cat)
                                                        <option <?php if($blogs->user_id == $cat->id) {{ echo "selected";}}   ?>value="{{$cat->id}}"> {{ $cat->name }} </option>
                                                        @endforeach
                                                        @error('user_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                </div>

                                                </select>
                                            </div>
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label for="blog_des" class="col-3 col-form-label">Details</label>
                                    <div class="col-9">
                                        <textarea name="blog_des" id="blog_des" class="form-control @error('blog_des') is-invalid @enderror">
                                        {{$blogs->blog_des}}
                                        </textarea>

                                        @error('blog_des')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="blog_image" class="col-3 col-form-label">Feture Image</label>
                                    <div class="col-9">
                                        <td><img src="{{ asset('blog/'.$blogs->blog_image) }}" alt="Image" width="160" height="160"></td>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="blog_image" class="col-3 col-form-label">Change Feture Image</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control @error('blog_image') is-invalid @enderror" value="{{ old('blog_image') }}" name="blog_image" id="blog_image" accept="image/*">
                                        @error('blog_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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

@section('footer_js')


<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

<script>
    $('#blog_title').keyup(function() {
        $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g, "-"));
    });

    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images'
        , filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token='
        , filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
        , filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

    CKEDITOR.replace('my-editor', options);

</script>

@endsection

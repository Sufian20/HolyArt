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
                                        <h4 class="header-title mb-4">Add Blog </h4>

                                        {{-- Success message --}}
                                        @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Hey!</strong> {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif


                                        <form class="form-horizontal" role="form" action="{{route('PostBlog')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="blog_title" class="col-3 col-form-label">Blog Title</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control @error('blog_title') is-invalid @enderror" value="{{ old('blog_title') }}" name="blog_title" id="blog_title" placeholder="Ex: Tips for a Healthy Smile .">
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
                                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" name="slug" id="slug">
                                                    @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="user_id" class="col-3 col-form-label">User Name</label>
                                        <div class="col-9">
                                            <select name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                                <option>Select Oncec</option>
                                                @foreach($users as $us)
                                                <option value="{{$us->id}}"> {{ $us->name }} </option>
                                                @endforeach
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                        </div>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="blog_des" class="col-3 col-form-label">Details</label>
                                    <div class="col-9">

                                        <textarea name="blog_des" class="form-control my-editor">{!! old('blog_des') !!}</textarea>

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

@section('footer_js')


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
    $('#blog_title').keyup(function() {
        $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g, "-"));
    });


  // Ck editor....

 var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);

</script>

@endsection

@extends('frontend.master')

@section('title')
Red More | Holy Art
@endsection

@section('blog') active @endsection

@section('content')

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">LATEST NEWS</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ulockd-icd-layer">
                    <ul class="list-inline ulockd-icd-sub-menu">
                        <li><a href="{{ route('ForntPage') }}"> HOME </a></li>
                        <li><a href="#"> > </a></li>
                        <li> <a href="#"> LATEST NEWS </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inner Pages Main Section -->
<section class="ulockd-service-details" style="background:#fff;">
    <div class="container">
        <div class="col-md-8 col-lg-12">
            <div class="row">
                <div class="col-md-12 ulockd-mrgn1210">
                    <div class="ulockd-project-sm-thumb">
                        <img class="img-responsive img-whp" src="{{ asset('blog/'.$blogs->blog_image) }}" alt="{{$blogs->blog_title}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ulockd-mrgn1210">
                    <div class="ulockd-pd-content">
                        <div class="ulockd-bp-date">
                            <ul class="list-inline">
                                <li class="ulockd-bp-date-innner">On <a href="#"><span class="text-thm2">{{ $blogs->created_at->format('d')}}</span> / {{ $blogs->created_at->format('M y')}}</a></li>
                                <li class="ulockd-bp-comment"><a href="#"><span class="flaticon-nurse-head text-thm1"></span> {{$blogs->name}}</a></li>
                                <li class="ulockd-bp-comment"><a href="#"><span class="flaticon-chat text-thm1"></span> {{ App\Models\Comment::where('blog_id', $blogs->id)->count() }} Comment</a></li>
                                <li class="ulockd-bp-comment"><a href="#"><span class="flaticon-black-check-box text-thm1"></span> Service</a></li>
                            </ul>
                        </div>
                        <h3>{{$blogs->blog_title}}</h3>
                        <p class="project-dp-one">
                            {{ $blogs->blog_des  }}
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ulockd-bp-single">
                        <h2 class="ulockd-bps-title">Comment</h2>
                        @foreach($comments as $key => $com)
							<div class="ulockd-bps-first">
                            <div class="media">
                                <div class="media-left pull-left">
                                    <a href="#">
                                        <img class="media-object thumbnail" src="images/testimonial/1.jpg" alt="1.jpg">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$com->name}} <span class="ulockd-bps-date pull-right"> Posted on {{$com->created_at->format('M d, Y')}}</span> </h4>
                                    <p>{{ $com->comment }}</p>
                                    <a class="text-thm1" href="#"> Reply </a>
                                </div>
                            </div>
                        </div>
						@endforeach
                        <div class="ulockd-bps-second">
                            <div class="media">
                                <div class="media-left pull-left">
                                    <a href="#">
                                        <img class="media-object thumbnail" src="images/testimonial/2.jpg" alt="2.jpg">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Steven Porter <span class="ulockd-bps-date pull-right"> Posted on Jun 12, 2015</span> </h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but he majority have uform, by injected</p>
                                    <a class="text-thm1" href="#"> Reply </a>
                                </div>
                            </div>
                        </div>
                        
                        <form name="contact_form" class="ulockd-bps-contact-form" action="{{route('PostComment')}}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="ulockd-bps-contact-form">
                                <h2>Leave a comment</h2>
                            </div>
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" name="name" class="form-control ulockd-form-bps required" placeholder="Name" @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" name="email" class="form-control ulockd-form-bps required email" placeholder="Email" @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="comment" class="form-control ulockd-bps-textarea required" rows="5" placeholder="Massage" @error('comment') is-invalid @enderror" value="{{ old('comment') }}"></textarea>
                                        @error('comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                       <input name="blog_id" value="{{$blogs->id}}" id="comment_post_ID" type="hidden">
                                        <button type="submit" class="btn btn-default btn-lg ulockd-btn-thm2" data-loading-text="Getting Few Sec...">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

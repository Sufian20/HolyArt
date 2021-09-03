@extends('frontend.master')

@section('title')
   Lates News | Holy Art
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

	<section class="ulockd-ip-latest-news">
		<div class="container">
			<div class="row">
				@foreach($blogs as $key => $blog)
                    <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<article class="ulockd-blog-post ulockd-mrgn630">
						<div class="post-thumb">
							<div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
							<img class="img-responsive img-whp" src="{{ asset('blog/'.$blog->blog_image) }}"  alt="{{$blog->blog_title}}">
							<ul class="list-inline posted-date">
								
								<li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> {{ App\Models\Comment::where('blog_id', $blog->id)->count() }} Comment</a></li>
							</ul>
						</div>
						<div class="bp-details one text-left">
							<h3 class="post-title">{{ $blog->blog_title}}</h3>
							<p>{{ Illuminate\Support\Str::limit($blog->blog_des,200) }}</p>
							<a href="{{route('BlogDetails', $blog->slug )}}"><button class="btn btn-default ulockd-btn-thm2">Read More</button></a>
						</div>
					</article>
				</div>
				
                @endforeach
			</div>
		</div>
	</section>

@endsection
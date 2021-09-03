@extends('frontend.master')

@section('title')
Gallery | Holy Art
@endsection

@section('gallery') active @endsection

@section('content')

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">Our Photo Gallery</h1>
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
                        <li> <a href="#"> Gallery </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inner Pages Main Section -->

<!-- Our Gallery -->
	<section class="service-two">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-uppercase">Our Photo <span class="text-thm2">Gallery</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit necessitatibus maiores fugiat eaque.</p>
					</div>
				</div>
			</div>
            <div class="row">
	            <div class="col-md-12">
	                <!-- Masonry Filter -->
	                <ul class="list-inline masonry-filter text-center">
	                    <li><a href="#" class="active" data-filter="*">All</a></li>
	                   @foreach($categoris as $key => $cat)
                            <li><a href="#" data-filter=".gphoto{{ $cat->id }}" class="">{{ $cat->category_name }}</a></li> 
                       @endforeach
	                   
	                </ul>
	                <!-- End Masonry Filter -->
	            
	                <!-- Masonry Grid -->
	                <div id="grid" class="masonry-gallery grid-4 clearfix">

		                <!-- Masonry Item -->
                         @foreach($photos as $key => $photo)
		                <div class="isotope-item creative corporate gphoto{{ $photo->category_id }}">
		                   
                                <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{ asset('gallery/'.$photo->images) }}" alt="project">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
										
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="gallery/{{$photo->images}}" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
                          
		                </div>

		                 @endforeach

		               
		                <!-- Masonry = Masonry Item -->
	                </div>
	                <!-- Masonry Gallery Grid Item -->
	            </div>
            </div>
		</div>
	</section>




@endsection

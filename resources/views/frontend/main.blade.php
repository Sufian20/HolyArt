@extends('frontend.master')

@section('home-active') active @endsection

@section( 'content')

<!-- Home Design -->
<div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="pogoSlider" id="js-main-slider">
                <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url({{ asset('/')}}assets/images/home/holy2.jpg);">
                    <div class="lbox-caption">
                        <div class="lbox-details">
                            <h1 class="fz60"><span class="text-thm2 bgc-white">iQRA</span> Education</h1>
                            <h3 class="fz40 ulockd-mrgn120 ff-robotoslab">Study With Our Expert.</h3>
                            <button class="btn ulockd-btn-thm2">View More <span class="fa fa-angle-double-right"></span> </button>
                            <button class="btn btn-default ulockd-btn-styledark">About Us <span class="fa fa-angle-double-right"></span></button>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500" style="background-image:url({{ asset('/')}}assets/images/home/holy1.jpg);">
                    <div class="lbox-caption">
                        <div class="lbox-details">
                            <h2 class="fz45">Education For Everyone.</h2>
                            <h3 class="ff-robotoslab">Education Can Change A Nation.</h3>
                            <button class="btn btn-default ulockd-btn-thm2">More Info </button>
                            <button class="btn btn-default ulockd-btn-styledark">Contact Us </button>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000" style="background-image:url({{ asset('/')}}assets/images/home/holy3.jpg);">
                    <div class="lbox-caption">
                        <div class="lbox-details">
                            <h2 class="fz48">Only Good Education</h2>
                            <h1 class="ff-robotoslab">Is The Backbone Of A Nation.</h1>
                            <button class="btn btn-default ulockd-btn-thm2">Get Quote </button>
                            <button class="btn btn-default ulockd-btn-styledark">Join <span class="fa fa-angle-double-right"></span></button>
                        </div>
                    </div>
                </div>
            </div><!-- .pogoSlider -->
        </div>
    </div>
</div>

<!-- Course Search Box -->
<section class="course-search-box">
    <div class="container">
        <div class="row search-box">
            <div class="col-md-12">
                <form class="course-search" method="get">
                    <div class="row">
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="form-group">
                                <div class="select-style">
                                    <select id="study_level" class="study_level form-control ulockd-bgthm" name="study_level">
                                        <option value="select-option">Study Level</option>
                                        <option value="primarylevel">Primary Level</option>
                                        <option value="olevel">O Level</option>
                                        <option value="alevel">A Level</option>
                                        <option value="hlevel">Higher Level</option>
                                        <option value="discuss">Other Courses</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="form-group">
                                <div class="select-style">
                                    <select id="course_length" class="course_length form-control ulockd-bgthm" name="course_length">
                                        <option value="select-option">Course Length</option>
                                        <option value="primarylevel">Primary Level</option>
                                        <option value="threemonth">3 Month</option>
                                        <option value="sixmonth">6 Month</option>
                                        <option value="oneyear">1 Year</option>
                                        <option value="twoyear">2 Years</option>
                                        <option value="threeyeart">3 Years</option>
                                        <option value="otherlevel">Other Level</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="form-group">
                                <input id="keywrd" class="form-control" placeholder="KeyWords" type="text">
                            </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                            <button type="button" class="btn btn-block btn-lg ulockd-btn-thm2">Cource Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section id="service" class="our-service">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-lg-offset-1">
                <div class="service-box">
                    <img class="education img-responsive img-whp" src="{{ asset('/')}}assets/images/service/1a.png" alt="1a.png">
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-sm-5">
                        <h2 class="ulockd-mrgn120"><span class="text-thm2">Our</span> Services</h2>
                        <p>Lorem ipsum dolor sit amet, elit. Aliquid, aut animi mollitia, laborum dolor nihil quae possimus ab rem, quidem incidunt debitis. Mollitia, vitae</p>
                    </div>
                </div>
                <div class="row">
                    @php
                    $sl = 1;
                    @endphp
                    @foreach($services as $value)
                    <div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
                        <div class="icon_box tac-smd">
                            <div class="counter text-thm2">{{ $sl++ }}</div>
                            <div class="ib_details two">
                                <h3>{{ $value->title}}</h3>
                                <p>{{ $value->des}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>


            </div>
        </div>
    </div>
    </div>
</section>

<!-- Our Divider -->
<section class="divider-triangle half-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-6">
                <h2 class="ulockd-mrgn120 tac-smd">Why Choose Us?</h2>
                @foreach($abouts as $abo)
                <div class="icon_box text-left tac-smd">
                    <div class="icon pull-left fn-smd"><span class="{{ $abo->about_icon }}"></span></div>
                    <div class="ib_details">
                        <h4>{{ $abo->about_title  }}</h4>
                        <p>{{ $abo->about_des }}</p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</section>

<!-- Our Feature Service -->
<section id="" class="ulockd-fservice">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="ulockd-main-title">
                    <h2>Most Popular Courses</h2>
                    <div class="mt-separator"><img src="{{ asset('/')}}assets/images/resource/graduation.png" alt="graduation.png"></div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($coursess as $key => $cour)
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
                <div class="course-box">
                    <div class="cb-thumb">

                        <img class="img-responsive img-whp" src="{{ asset('coursess/'.$cour->coursess_img) }}" alt="{{ $cour->coursess_name }}">
                    </div>
                    <div class="cb-details">
                        <img class="lectureer" src="{{ asset('coursess/'.$cour->instractor_img) }}" alt="{{ $cour->coursess_name }}">
                        <h3 style="padding-top: 12px;">{{$cour->coursess_name}}</h3>
                        <p>With - {{$cour->instractor_name}}.</p>
                        <ul class="list-inline course-feature">


                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- Our Coming Event -->
<section class="our-event ulockd-bgthm">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                {{-- Success message --}}
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{ session('success') }}

                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form class="signup_form" id="login-form" method="post" action="{{ route('PostConfirmRegistration')}}">

                    @csrf
                    <h4>Confirm Your Admiton</h4>
                    <div class="form-group">
                        <input id="name" spellcheck=false class="form-control" name="name" type="text" size="18" @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="user_name" class="float-label">Name</label>
                    </div>
                    <div class="form-group">
                        <input id="email" spellcheck=false class="form-control" name="email" type="email" size="18" @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="email" class="float-label">Email</label>
                    </div>
                    <div class="form-group">
                        <input id="phone" class="form-control" spellcheck=false name="phone" type="text" size="18" @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="phone" class="float-label">Phone Numebr</label>
                    </div>
                    <div class="form-group">
                        <input id="subject" spellcheck=false class="form-control" name="subject" type="text" size="18" @error('subject') is-invalid @enderror" value="{{ old('subject') }}">
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="susubjectb" class="float-label">Subject</label>
                    </div>
                    <div class="form-group btn-sub" style="padding: 10px 120px 33px 120px;">


                        <button class="btn btn-md" id="submit" type="submit" ripple>Send</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8 text-center">
                <h1 class="color-white">Regisger Now And Get Our Online Courses & Buildup Yourself.</h1>
                <p class="lead color-white">50+ Online Courses Wait For You.</p>
                <div class="upcoming-event ulockd-flip-clock ulockd-mrgn1250">
                    <div class="clock"></div>
                    <div class="message"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Gallery -->
	<section class="service-two" style="background:#fff;">
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





<!-- Our Blog -->
<section class="ulockd-blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="ulockd-main-title">
                    <h2 class="text-center ulockd-mrgn120">Student Compliment</h2>
                    <div class="mt-separator"><img src="{{ asset('/')}}assets/images/resource/graduation.png" alt="graduation.png"></div>
                </div>
                <div class="one-grid-slider">
                    <div class="item">
                        <div class="testimonial-grid text-center">
                            <div class="t_thumb">
                                <img class="img-responsive" src="{{ asset('/')}}assets/images/testimonial/1.jpg" alt="1.jpg">
                                <span class="icon icon_quotations_alt text-thm2"></span>
                            </div>
                            <div class="t_details">
                                <h4>Alanna Smi</h4>
                                <p>Msc Mathematics</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
                            </div>
                        </div>
                        <div class="testimonial-grid text-center ulockd-mrgn1225">
                            <div class="t_thumb">
                                <img class="img-responsive" src="{{ asset('/')}}assets/images/testimonial/2.jpg" alt="2.jpg">
                                <span class="icon icon_quotations_alt text-thm2"></span>
                            </div>
                            <div class="t_details">
                                <h4>Liam Edge</h4>
                                <p>Graduate 2014</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-grid text-center">
                            <div class="t_thumb">
                                <img class="img-responsive" src="{{ asset('/')}}assets/images/testimonial/3.jpg" alt="3.jpg">
                                <span class="icon icon_quotations_alt text-thm2"></span>
                            </div>
                            <div class="t_details">
                                <h4>Anastasia El</h4>
                                <p>Graduate 2012</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
                            </div>
                        </div>
                        <div class="testimonial-grid text-center ulockd-mrgn1225">
                            <div class="t_thumb">
                                <img class="img-responsive" src="{{ asset('/')}}assets/images/testimonial/4.jpg" alt="4.jpg">
                                <span class="icon icon_quotations_alt text-thm2"></span>
                            </div>
                            <div class="t_details">
                                <h4>Ethan Scott</h4>
                                <p>Graduate 2012</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="ulockd-main-title">
                    <h2 class="text-center ulockd-mrgn120">Our Popular Post</h2>
                    <div class="mt-separator"><img src="{{ asset('/')}}assets/images/resource/graduation.png" alt="graduation.png"></div>
                </div>
                <div class="two-grid-slider">
                  @foreach($blogs as $key => $blog)
                    <div class="item">
                        <article class="blog_post text-left">
                            <div class="post_thumb">
                             
                                    <img class="img-responsive img-whp" src="{{ asset('blog/'.$blog->blog_image) }}"  alt="{{$blog->blog_title}}">
                        
                                <ul class="list-inline post_meta">
                                    <li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Ulockd</a></li>
                                    <li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> {{ App\Models\Comment::where('blog_id', $blog->id)->count() }} Comment</a></li>
                                </ul>
                            </div>
                        
                                <div class="post_details">
                                <h4>{{$blog->blog_title}}</h4>
                                <div class="post_date ulockd-bgthm"><strong>{{ $blog->created_at->format('d')}}</strong> <br>{{ $blog->created_at->format('M y')}} </div>
                                <p>{{ Illuminate\Support\Str::limit($blog->blog_des,200) }}</p>
                                <a class="tdu-hvr" href="{{route('BlogDetails', $blog->slug )}}">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                            </div>
                         
                        </article>
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Partner -->
<section class="ulockd-divider">
    <div class="container">
        <div class="row search-box">
            <div class="col-md-12">
                <form class="course-search" method="get">
                    <div class="row">
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 text-center">
                            <h3 class="ulockd-mrgn120">Subscribe Our Newsletter</h3>
                            <p>Get Out latest new and tay informed on our latest news.</p>
                        </div>
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6">
                            <div class="ulockd-footer-newsletter">
                                <form class="ulockd-mailchimp">
                                    <div class="input-group">
                                        <input type="email" class="form-control input-md" placeholder="Your email" name="EMAIL" value="">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-md ulockd-btn-thm2 color-white">Subscribe</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     
    </div>
</section>


@endsection

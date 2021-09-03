
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/corporate/education/iqra/demo/index-multipage-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 20:08:47 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('/')}}assets/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('/')}}assets/css/style.css">
<link rel="stylesheet" href="{{ asset('/')}}assets/css/boxed.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('/')}}assets/css/responsive.css">
<!-- Title -->
<title> @yield('title', 'Holy Art')</title>


<!-- Favicon -->
<link href="{{ asset('/')}}assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('/')}}assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="box-bg4">
<div class="wrapper">
	<div id="preloader" class="preloader">
		<div id="pre" class="preloader_container"><div class="preloader_disabler btn btn-default">Disable Preloader</div></div>
	</div>
  	<div class="header-top ulockd-pad1225 ulockd-pad645 ulockd-bgthm">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-3">
  					<div class="welcm-ht">
	  					<p class="ulockd-welcntxt color-white"><strong>Call:</strong> +98-9875-5968-54</p>
  					</div>
  				</div>
  				<div class="col-md-3">
  					<div class="welcm-ht">
	  					<p class="ulockd-welcntxt color-white"><strong>Email:</strong> iQRA@yourmail.com</p>
  					</div>
  				</div>
  				<div class="col-md-2">
  					<div class="welcm-ht">
	  					<p class="ulockd-welcntxt color-white"><strong class="fa fa-clock-o"></strong> 08:00AM -05:00PM</p>
  					</div>
  				</div>
  				<div class="col-md-4">
  					<div class="welcm-ht text-right">
						<ul class="list-inline">
							<li>
								<div class="dropdown lang-button text-center">
									<button class="dropbtn color-white"><i class="fa fa-globe"></i> Lang</button>
									<div class="dropdown-content">
									    <a href="#"> <span><img src="{{ asset('/')}}assets/images/resource/english.jpg" alt=""></span> Engl</a>
									    <a href="#"> <span><img src="{{ asset('/')}}assets/images/resource/franch.jpg" alt=""></span> Fren</a>
									    <a href="#"> <span><img src="{{ asset('/')}}assets/images/resource/spanish.jpg" alt=""></span> Span</a>
									</div>
								</div>
							</li>
							<li>
								<a class="color-white" href="#" data-toggle="modal" data-target=".bs-example-modal-md" data-whatever="@mdo"><i class="fa fa-user"></i> Sign In</a>
		        				<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog">
		        				    <div class="modal-dialog modal-md" role="document">
			        				    <div class="modal-content">
			        				        <div class="modal-header">
				        				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        				        <h4 class="modal-title text-center" id="exampleModalLabel">Login</h4>
				        				        <p class="text-center">Sign in and choose your service to have access to all our service.</p>
			        				        </div>
			        				        <div class="modal-body">
				        				      	<div class="row">
				        				      		<div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
				        						        <form class="ulockd-login-form">
				        						        	<h3><span class="flaticon-lock"></span> Login</h3>
				        						        	<p>Enter username and password to login:</p>
				        						            <div class="form-group">
				            								    <x-jet-input type="email" class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
				            								</div>
				            								<div class="form-group">
				            								    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
				            								</div>
				        						            <button type="submit" class="btn btn-default ulockd-btn-thm2">Login to account</button>
				        						        </form>
				        				      		</div>
				        				      	</div>	
			        				        </div>
			        				        <!-- modal footer start here-->
			        				    </div>
		        				    </div>
		        				</div>
							</li>
							<li>
								<a class="color-white" href="#"> | </a>
							</li>
							<li>
								<a class="color-white" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo"><i class="fa fa-edit"></i> Sign Up</a>
		        				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
		        				    <div class="modal-dialog modal-lg" role="document">
			        				    <div class="modal-content">
			        				        <div class="modal-header">
				        				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        				        <h4 class="modal-title text-center" id="exampleModalLabel2">Register</h4>
				        				        <p class="text-center">Sign in and choose your service to have access to all our service.</p>
			        				        </div>
			        				        <div class="modal-body">
				        				      	<div class="row">
				        				      		<div class="col-sm-12 col-md-8 col-md-offset-2">
				        						        <form class="ulockd-reg-form text-center row">
				        						        	<h3> <span class="flaticon-house-key"></span> Register</h3>
				        						        	<p>Join our community today:</p>
													        <div class="col-md-12">
					        						            <div class="form-group">
					            								    <input type="text" class="form-control" id="exampleInputNamexa" placeholder="First Name">
					            								</div>
													        </div>
													        <div class="col-md-12">
					        						            <div class="form-group">
					            								    <input type="text" class="form-control" id="exampleInputNamexb" placeholder="Last Name">
					            								</div>
													        </div>
													        <div class="col-md-12">
					        						            <div class="form-group">
					            								    <input type="email" class="form-control" id="exampleInputEmailx" placeholder="Email">
					            								</div>
													        </div>
													        <div class="col-md-12">
					            								<div class="form-group">
					            								    <input type="password" class="form-control" placeholder="Password">
					            								</div>
													        </div>
													        <div class="col-md-12">
					            								<div class="form-group">
					            								    <input type="password" class="form-control" placeholder="Repeat password">
					            								</div>
													        </div>
													        <div class="col-md-12">
					            								<div class="form-group text-center">
					            						        	<button type="submit" class="btn btn-default ulockd-btn-thm2">Sign Me Up</button>
					            								</div>
													        </div>
													        <div class="col-xxs-12 col-xs-5 col-sm-5 col-md-5">
													        	<a href="#" class="btn btn-lg btn-primary btn-block color-white">Facebook</a>
													        </div>
													        <div class="col-xxs-12 col-xs-2 col-sm-2 col-md-2">
													        	<a href="#">OR</a>
													        </div>
													        <div class="col-xxs-12 col-xs-5 col-sm-5 col-md-5">
													        	<a href="#" class="btn btn-lg btn-info btn-block color-white">Google</a>
													        </div>
				        						        </form>
				        				      		</div>
				        				      	</div>	
			        				        </div>
			        				        <!-- modal footer start here-->
			        				    </div>
		        				    </div>
		        				</div>
							</li>
						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
	
	<!-- Header Styles -->
	<header class="header-nav fixedup">
		<div class="menu-fixed-center navbar-scrolltofixed">
			<div class="container ulockd-pdng0">
			    <nav class="navbar navbar-default bootsnav">
			        <!-- Start Top Search -->
			        <div class="top-search">
			            <div class="container">
			                <div class="input-group">
			                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
			                    <input type="text" class="form-control" placeholder="Search">
			                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
			                </div>
			            </div>
			        </div>
			        <!-- End Top Search -->

			        <div class="container">
			            <!-- Start Atribute Navigation -->
			            <div class="attr-nav">
			                <ul>
			                    <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
			                </ul>
			            </div>
			            <!-- End Atribute Navigation -->

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand ulockd-main-logo2" href="#brand">
			                    <img src="{{ asset('/')}}assets/images/main-logo.png" class="logo logo-scrolled ulockd-mrgn910" alt="header-logo2.png">
			                </a>
			            </div>
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-center ulockd-pad9100" data-in="flipInY">
			                    <li class="dropdown">
			                        <a href="{{ route('ForntPage') }}" class=" @yield('home-active')" >Home</a>
			                        
			                    </li> 
			                    
			                    

								 <li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="@yield('about')"" >About us</a>
			                        <ul class="dropdown-menu">
										 <li><a href="{{ route('CourssesPage') }}">Courses</a></li> 
										<li><a href="{{route("TeamPage")}}">Our Team</a></li>
										
					                   
			                        </ul>
			                    </li>

								<li class="dropdown">
                                    <a href="{{ route('GalleryPage')}} " class=" @yield('gallery')">Gallery</a>
                                    
								</li>
                                <li class="dropdown">
                                    <a href="{{ route('BlogPage')}} " class=" @yield('blog')">Blog</a>
                                    
								</li>
								 
								<li class="dropdown">
                                    <a href="{{route('Contact')}}" class=" @yield('contact')">Contact</a>
                                    
                                </li>
			                   
			                    
			                </ul>
			            </div><!-- /.navbar-collapse -->
			        </div>   

			        <!-- Start Side Menu -->
			        <div class="side">
			            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
			            <div class="widget">
			                <h4 class="title">Custom Pages</h4>
			                <ul class="link">
			                    <li><a href="#">About</a></li>
			                    <li><a href="#">Services</a></li>
			                    <li><a href="#">Blog</a></li>
			                    <li><a href="#">Portfolio</a></li>
			                    <li><a href="#">Contact</a></li>
			                </ul>
			            </div>
			            <div class="widget">
			                <h4 class="title">Additional Links</h4>
			                <ul class="link">
			                    <li><a href="#">Retina Homepage</a></li>
			                    <li><a href="#">New Page Examples</a></li>
			                    <li><a href="#">Parallax Sections</a></li>
			                    <li><a href="#">Shortcode Central</a></li>
			                    <li><a href="#">Ultimate Font Collection</a></li>
			                </ul>
			            </div>
			        </div>
			        <!-- End Side Menu -->
			    </nav>
			</div>
		</div>		
	</header>

    @yield('content');

	<!-- Our Footer -->
	<section class="ulockd-footer ulockd-pdng0">
		<div class="container footer-padding">
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="font-icon-social">
						<ul class="list-inline footer-font-icon tac-xxsd">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-feed"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="logo-widget tac-xxsd text-center">
						<img src="{{ asset('/')}}assets/images/footer-logo.png" alt="footer-logo.png">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="payment-card tac-xsd">
						<img class="pull-right fn-xsd" src="{{ asset('/')}}assets/images/resource/payment.png" alt="payment.png">
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="widget-about">
						<h3>About Us</h3>
						<p>Regardless of whether you need to stay in your own house, are searching for help with a more established relative, looking for exhortation on paying for development, we can help you.</p>
						<p>Doloribus, placeat, minima. Harum voluptatibus quae tempora est, cupiditate culpa, molestiae, illo beatae reiciendis, nisi sit dolores.</p>					
					</div>
    				<div class="ulockd-footer-newsletter">
    					<h3 class="title">News Letter</h3>
		                <form class="ulockd-mailchimp">
		                    <div class="input-group">
			                    <input type="email" class="form-control input-md" placeholder="Your email" name="EMAIL" value="">
			                    <span class="input-group-btn">
			                        <button type="submit" class="btn btn-md"><i class="icon flaticon-right-arrow"></i></button>
			                    </span>
		                    </div>
		                </form>
    				</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="twitter-widget">
						<h3>Twitter Feed</h3>
						<div class="twitter"></div>
					</div>
				</div>
				

				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="news-widget">
						<h3>Latest News</h3>
						<div class="ulockd-media-box">
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="{{ asset('/')}}assets/images/blog/s1.jpg" alt="s1.jpg">
								    </a>
							    </div>
							    <div class="media-body">
							    	<h4 class="media-heading">Let's Move With Blog </h4>
									<a href="#" class="post-date">21 January, 2018</a>
							    	<p>Lorem ipsum dolor sit amet, consectetur...</p>
							    </div>
							</div>
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="{{ asset('/')}}assets/images/blog/s2.jpg" alt="s2.jpg">
								    </a>
							    </div>
							  	<div class="media-body">
							    	<h4 class="media-heading">Let's Move With Blog </h4>
									<a href="#" class="post-date">21 January, 2018</a>
							    	<p>Lorem ipsum dolor sit amet, consectetur...</p>
							  	</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="link-widget">						
						<h3>Important Link</h3>
						<ul class="list-style-square">
							<li><a href="#"> About Licences</a></li>
							<li><a href="#"> Carrers</a></li>
							<li><a href="#"> Community & Forum</a></li>
							<li><a href="#"> Help & Conditions</a></li>
							<li><a href="#"> Privacy Policy</a></li>
							<li><a href="#"> Terms & Conditions</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		<div class="ulockd-copy-right">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="color-white">Copyright© 2021. <a href="https://goo.gl/8HdP67" target="_blank">Develop By</a>Sufian Jalali.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{ asset('/')}}assets/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/bootsnav.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/parallax.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/scrollto.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/gallery.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/wow.min.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/slider.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/video-player.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/jquery.barfiller.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/timepicker.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/tweetie.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{ asset('/')}}assets/js/color-switcher.js"></script>
<script type="text/javascript" src="{{ asset('/')}}assets/js/script.js"></script>
</body>

<!-- Mirrored from unlockdesizn.com/html/corporate/education/iqra/demo/index-multipage-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 20:14:53 GMT -->
</html>
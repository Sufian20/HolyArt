@extends('frontend.master')

@section('title')

Contact | HolyArt

@endsection

@section('contact') active @endsection

@section('content')

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">CONTACT US</h1>
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
                        <li><a href="#"> HOME </a></li>
                        <li><a href="#"> > </a></li>
                        <li> <a href="#"> CONTACT US </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inner Pages Main Section -->
<section class="ulockd-contact-page" style="background:#fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <div class="ulockd-cp-title">
                    <h2 class="text-uppercase">CONTACT DETAILS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                <div class="ulockd-ohour-info style2 text-center">
                    <div class="ulockd-icon text-thm2"><span class="fa fa-envelope"></span></div>
                    <div class="ulockd-info">
                        <h3>Mail Us</h3>
                        <p class="ulockd-addrss"><strong>Email:</strong> iQRA@yourmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                <div class="ulockd-ohour-info style2 text-center">
                    <div class="ulockd-icon text-thm2"><span class="fa fa-phone"></span></div>
                    <div class="ulockd-info">
                        <h3>Call Us</h3>
                        <p class="ulockd-addrss">+98-9875-5968-54</p>
                    </div>
                </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                <div class="ulockd-ohour-info style2 text-center">
                    <div class="ulockd-icon text-thm2"><span class="fa fa-map-signs"></span></div>
                    <div class="ulockd-info">
                        <h3>Address</h3>
                        <p>Four infity loop Av. 45635</p>
                    </div>
                </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                <div class="ulockd-ohour-info style2 text-center">
                    <div class="ulockd-icon text-thm2"><span class="fa fa-edit"></span></div>
                    <div class="ulockd-info">
                        <h3>Mail Us</h3>
                        <p class="ulockd-addrss"><strong>Email:</strong> Left Some Word</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ulockd-mrgn1250">
            <div class="col-md-12">
			  {{-- Success message --}}
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{ session('success') }}

                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="ulockd-contact-form">
                    <form class="contact-form" action="{{ route('PostContact' )}}" method="post" novalidate="novalidate">
					@csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="name" name="name" class="form-control ulockd-form-fg required" placeholder="Your name" @error('name') is-invalid @enderror" value="{{ old('name') }}"" type=" text">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="email" name="email" class="form-control ulockd-form-fg required email" placeholder="Your email" @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="phone" name="phone" class="form-control ulockd-form-fg required" placeholder="Phone" @error('phone') is-invalid @enderror" value="{{ old('phone') }}" type="text">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="subject" name="subject" class="form-control ulockd-form-fg required" placeholder="Subject" @error('subject') is-invalid @enderror" value="{{ old('subject') }}" type="text">
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control ulockd-form-tb required" rows="12" placeholder="Your massage" @error('message') is-invalid @enderror" value="{{ old('message') }}"></textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group ulockd-contact-btn">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
                                    <button type="submit" class="btn btn-default ulockd-btn-thm2" data-loading-text="Getting Few Sec...">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@extends('frontend.master')

@section('title')
Gallery | Holy Art
@endsection

@section('about') active @endsection

@section('content')

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">Our Courses</h1>
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




@endsection

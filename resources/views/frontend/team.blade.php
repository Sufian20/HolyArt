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
                    <h1 class="text-uppercase">Our Team</h1>
                </div>
            </div>
        </div>
    </div>
</div>


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

            @foreach($teams as $key => $team)
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
                <div class="course-box">
                    <div class="cb-thumb">

                        <img class="img-responsive img-whp" src="{{ asset('team/'.$team->images) }}" alt="{{ $team->name }}">
                    </div>
                    <div class="cb-details">
                       
                        <h3 style="padding-top: 12px;">{{$team->name}}</h3>
                        <p>{{$team->title}}.</p>
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
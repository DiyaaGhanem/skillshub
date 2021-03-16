@extends('web.layout')

@section('title')
    {{ __('web.Home Page')}}
@endsection

@section('main')
    <!-- Home -->
    <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ asset('web/img/home-background.jpg') }} )"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text"> {{ __('web.title') }} </h1>
                        <p class="lead white-text"> {{ __('web.body') }} </p>
                        <a class="main-button icon-button" href="#">{{ __('web.sectionbtn') }}</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home -->

    <!-- Courses -->
    <div id="courses" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>{{ __('web.popular_exams') }}</h2>
                    <p class="lead">{{ __('web.pe_body') }}</p>
                </div>
            </div>
            <!-- /row -->

            <!-- courses -->
            <div id="courses-wrapper">

                <!-- row -->
                <div class="row">
                    @foreach ($exams as $exam)
                        <!-- single course -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="course">
                                <a href="{{ url("exams/show/$exam->id") }}" class="course-img">
                                    <img src="{{ asset ("uploads/$exam->img") }}" alt="">
                                    <i class="course-link-icon fa fa-link"></i>
                                </a>
                                <a class="course-title" href="{{ url("exams/show/$exam->id") }}">{{ Str::limit($exam->desc(), 50) }}</a>
                                <div class="course-details">
                                    <span class="course-category">{{ $exam->skill->name() }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- /single course --> 
                    @endforeach

                </div>
                <!-- /row -->

            </div>
            <!-- /courses -->

            <div class="row">
                <div class="center-btn">
                    <a class="main-button icon-button" href="#"> {{ __('web.pe_btn') }} </a>
                </div>
            </div>

        </div>
        <!-- container -->

    </div>
    <!-- /Courses -->



    <!-- Contact CTA -->
    <div id="contact-cta" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ asset('web/img/cta.jpg)') }}"></div>
        <!-- Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="white-text">{{ __('web.contact_us') }}</h2>
                    <p class="lead white-text">{{ __('web.con_title') }}</p>
                    <a class="main-button icon-button" href="{{ url('contact') }}">{{ __('web.con_btn') }}</a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Contact CTA -->


    
@endsection
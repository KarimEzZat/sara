<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx" class="no-js">
<!--<![endif]-->

<head>
    <!--- Basic Page Needs  -->

    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Page Title -->
    <title>@if(isset($getSetting) && $getSetting->site_name != Null) {{ $getSetting->site_name }} @else {{ 'Sara Template' }} @endif</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if($getSetting)
        <link rel="icon" href="{{ asset('uploads/image/'. $getSetting->favicon)}}">
    @endif
<!-- Seo Meta Tags -->
    @if($getSeos)
        @foreach($getSeos as $tag)
            <meta name="{{ $tag->name }}" content="{{ $tag->content }}">
        @endforeach
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">

    <!--
    CSS
    ============================================= -->
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/sara/assets/css/bootstrap.css') }}">
    <!-- iconmonstr iconic font -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/sara/assets/css/iconmonstr-iconic-font.min.css') }}">
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/sara/assets/css/font-awesome.min.css') }}">
    <!-- Animated Headline (Text-Effect) -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/sara/assets/css/animated-headline.css.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/sara/assets/css/magnific-popup.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/sara/assets/css/style.css') }}">
    <!-- media-queries (Responsive File) -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/sara/assets/css/responsive.css') }}">
</head>

<body id="body" data-spy="scroll" data-target=".nav-menu" data-offset="300">

<!-- Start Preloader Area -->
<div class="preloader-area">
    <div class="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Preloader Area -->

<!-- Start Right Side Navbar (Large Screen main Navigation) -->
<nav id="navbar" class="navbar float-right d-none d-lg-block">
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="#body" class="nav-link active">
                <span class="transition">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#about" class="nav-link">
                <span class="transition">About</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#resume" class="nav-link">
                <span class="transition">Resume</span>
            </a>
        </li>
        <li>
            <a href="#works" class="nav-link">
                <span class="transition">Works</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#blog" class="nav-link">
                <span class="transition">Blog</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#contact" class="nav-link">
                <span class="transition">Contact</span>
            </a>
        </li>
    </ul>
</nav>
<!-- End Side Navbar -->

<!-- template wrapper -->
<div class="template-wrapper">

    <!-- Start Header Area -->
    <header class="header-area">
        <div class="container-fluid h-100">
            <div class="d-flex align-items-center justify-content-between h-100">
                <div>
                    <a href="{{ route('home') }}" class="logo">
                        {{-- convert Logo String To Array --}}
                        @if($getSetting)
                            @foreach(explode(',', $getSetting->logo) as $part)
                                <span>{{$part}}</span>
                            @endforeach
                        @endif
                    </a>
                    <div class="openNav d-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- Hidden Sidebar Mobile Navigation Menu (reveals when clicked on menu icon)-->
                    <nav class="mobile-nav navbar-animate">
                        <ul class="mobile-menu text-center">
                            <li>
                                <a href="#body" class="d-flex justify-content-center">
                                    <i class="im im-home"></i>
                                    <span class="transition">home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#about" class="d-flex justify-content-center">
                                    <i class="im im-info"></i>
                                    <span class="transition">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="#resume" class="d-flex justify-content-center">
                                    <i class="im im-file"></i>
                                    <span class="transition">Resume</span>
                                </a>
                            </li>
                            <li>
                                <a href="#works" class="d-flex justify-content-center">
                                    <i class="im im-photo-camera"></i>
                                    <span class="transition">Works</span>
                                </a>
                            </li>
                            <li>
                                <a href="#blog" class="d-flex justify-content-center">
                                    <i class="im im-blogger"></i>
                                    <span class="transition">Blog</span>
                                </a>
                            </li>
                            <li>
                                <a href="#contact" class="d-flex justify-content-center">
                                    <i class="im im-support"></i>
                                    <span class="transition">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="cv-link">
                    <!-- Download CV Button -->
                    @if($getHeader)
                        <a href="{{asset('uploads/cv/'. $getHeader->cv)}}"
                           Download
                           class="d-flex align-items-center justify-content-center"
                           data-toggle="tooltip" data-placement="left" title="Download CV">
                            <i class="im im-import ml-2"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- start Hero Area -->
    <section class="hero-area d-flex align-items-center" id="home">
        <div class="container">
            <div class="row js-fullheight align-items-center justify-content-between">
                <!-- hero area content -->
                <div class="hero-content text-center col-lg-12">
                    <div data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                        <div class="avatar">
                            <!-- avatar hero area image -->
                            @if($getHeader)
                                <img
                                    src="{{asset('uploads/image/header/'. $getHeader->image)}}"
                                    alt="{{$getHeader->image}}">
                        @endif
                        <!-- social media links -->
                            <ul class="social-links">
                                @if($getSocials)
                                    @foreach($getSocials as $link)
                                        <li>
                                            <a href="{{ $link->link }}" class="{{ $link->icon }}"></a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <h1 class="text-white">Hi, I'm {{ isset($getHeader) ? $getHeader->hero_title : 'Jane Doe' }}</h1>
                    <!-- animated hero area text -->
                    <div class="profession text-white cd-headline loading-bar">
                        <span>Senior Creative</span>
                        <span class="cd-words-wrapper">
                           @if(isset($getHeader))
                                @foreach(explode(',', $getHeader->animated_text) as $text)
                                    <b class="{{ $loop->first ? 'is-visible' : '' }}">{{ $text }}</b>
                                @endforeach
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mouse arrow effect -->
        <div class="mouse">
            <a href="#about" class="mouse-icon">
                <div class="mouse-wheel"><span class="im im-arrow-down"></span></div>
            </a>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start About Area -->
    <div class="about-area section-padding" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="about-pic">
                        <div class="about-img">
                            <!-- about area image -->
                            @if($getAbout)
                                <img src="{{asset('uploads/image/about/'. $getAbout->image)}}"
                                     alt="{{ $getAbout->image }}"
                                     class="img-fluid">
                            @endif
                        </div>
                        <!-- about image caption -->
                        <div class="img-caption transition"
                             data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <span>@if($getAbout){{$getAbout->experience_year}}@endif</span>
                            <p>Years of experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-details">
                        <span class="subheading">About Me</span>
                        <h2 class="mb-3">@if($getAbout){!! $getAbout->title  !!}@endif</h2>
                        <div class="info-list">
                            <!-- about details -->
                            <ul>
                                @if($getAbout)
                                    <li><strong>Name:</strong><span>{{ $getAbout->name }}</span></li>
                                    <li><strong>Residence:</strong><span>{{ $getAbout->city }}</span></li>
                                    <li><strong>Freelance:</strong><span>{{ $getAbout->freelance }}</span></li>
                                    <li><strong>Address:</strong><span>{{ $getAbout->address }}</span></li>
                                    <li><strong>Site:</strong><span>{{ $getSetting->web_site }}</span></li>
                                @endif
                            </ul>
                        </div>
                        <p>@if($getAbout){{ $getAbout->description }}@endif</p>
                        <a href="#resume" data-text="Resume" class="btn transition mt-5">
                            <span>R</span>
                            <span>e</span>
                            <span>s</span>
                            <span>u</span>
                            <span>m</span>
                            <span>e</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Skill Area -->
    <section class="skills-area section-padding" id="skills">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 mb-lg-0 mb-4">
                    <div class="skill-title">
                        <h2 class="mb-3">@if($getSetting){{ $getSetting->skill_title }}@endif</h2>
                        <p>@if($getSetting){{ $getSetting->skill_description }}@endif</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="skills-chart d-flex justify-content-between"
                         data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    @if($getSkills)
                        @foreach($getSkills as $skill)
                            <!-- Skill Item -->
                                <div class="skill-item d-flex justify-content-center">
                                    <h4>{{ $skill->skill }}</h4>
                                    <div class="bar">
                                        <div class="item-progress" style="height: {{ $skill->percent }}%;">
                                            <span class="progress-value">{{ $skill->percent }}%</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Area -->

    <!-- Start Services Area -->
    <section class="services-area section-padding" id="services">
        <div class="container">
            <div class="services-title pl-4">
                <span class="text-uppercase text-sm text-white">
                    @if($getSetting) {{ $getSetting->service_up_title }} @endif
                </span>
                <h2 class="text-white">@if($getSetting) {{ $getSetting->service_main_title }} @endif</h2>
            </div>
            <div class="row">
                @if($getServices)
                    @foreach($getServices as $service)
                        <div class="col-lg-4 col-md-6 mt-5"
                             data-scroll-reveal=" @if($loop->first) enter left move 30px over 0.6s after 0.4s @elseif($loop->last) enter bottom move 30px over 0.6s after 0.4s @else enter right move 30px over 0.6s after 0.4s @endif">
                            <!-- Service Item -->
                            <div class="service-item">
                                <div class="content">
                                    <h4 class="mb-2 text-white">{{ $service->title }}</h4>
                                    <p class="text-white">{{ $service->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Resume Area -->
    <section class="resume-area section-padding" id="resume">
        <!-- start section title -->
        <div class="section-title">
            <h2>Resume</h2>
            <span></span>
        </div>
        <!-- end section title -->
        <div class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="resume-title">
                            <div class="icon text-color"><i class="im im-briefcase"></i></div>
                            <h4>Experience</h4>
                        </div>

                        <!-- start experience -->
                        <div class="resume-items experience">
                            @foreach($getExperiences as $experience)
                                <div class="resume-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="date">{{ $experience->date }}</div>
                                    <h5>{{ $experience->title }}</h5>
                                    <div class="company">
                                        <i class="{{ $experience->icon }}"></i>
                                        {{ $experience->organisation }}
                                    </div>
                                    <div class="single-post-text">
                                        <p>{{ $experience->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- end experience -->
                    </div>
                    <div class="col-md-6 border-line-v">
                        <div class="resume-title">
                            <div class="icon text-color"><i class="im im-graduation-hat"></i></div>
                            <h4>Education</h4>
                        </div>

                        <!-- start education -->
                        <div class="resume-items education">
                            @if($getEducations)
                                @foreach($getEducations as $education)
                                    <div class="resume-item ">
                                        <div class="date">{{ $education->date }}</div>
                                        <h5>{{ $education->title }}</h5>
                                        <div class="company">
                                            <i class="{{ $education->icon }}"></i>
                                            Mansoura
                                        </div>
                                        <div class="single-post-text">
                                            <p>{{ $education->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- end education -->
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Resume Area -->

    <!-- Start Works Area -->
    <section class="works-area section-padding" id="works">
        <!-- start section title -->
        <div class="section-title">
            <h2>Portfolio</h2>
            <span></span>
        </div>
        <!-- end section title -->
        <div class="container">
            <div class="filters-content">
                <div class="row grid">
                    @if($getWorks)
                        @foreach($getWorks as $work)
                            <div class="col-lg-6 grid-item col-md-12 all">
                                <!-- start single work -->
                                <div class="single-work">
                                    <div class="relative">
                                        <!-- single work thumb -->
                                        <div class="thumb">
                                            <!-- single work image -->
                                            <img class="image img-fluid"
                                                 src="{{ asset('uploads/image/works/'. $work->image) }}"
                                                 alt="{{ Str::slug($work->title) }}">
                                        </div>
                                        <!-- Magnific Popup -->
                                        <a href="{{ asset('uploads/image/works/'. $work->image) }}"
                                           class="middle portfolio-lightbox">
                                            <div
                                                class="d-flex align-items-center justify-content-center flex-column h-100">
                                                <i class="im im-plus"></i>
                                                <!-- single work header -->
                                                <h4 class="mt-4">{{ $work->title }}</h4>
                                                <!-- single work category -->
                                                <div class="cat">{{ $work->category->name }}</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- end single work -->
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End Works Area -->

    <!-- Start Hire Area -->
    <div class="hire-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Hire Content -->
                    @if($getSetting)
                        <div class="hire-content text-center"
                             data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                            <h2 class="mb-5 text-white">{!! $getSetting->hire_title !!}</h2>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="contact-box">
                                        <h5><i class="im im-mobile"></i>{{ $getSetting->phone }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="contact-box">
                                        <h5><i class="im im-newsletter"></i>{{ $getSetting->email }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="contact-box">
                                        <h5><i class="im im-globe"></i>{{ $getSetting->web_site }}</h5>
                                    </div>
                                </div>
                            </div>
                            <a href="#contact" class="btn mt-5" data-text="Contact Me">
                                <span>C</span>
                                <span>o</span>
                                <span>n</span>
                                <span>t</span>
                                <span>a</span>
                                <span>c</span>
                                <span>t</span>
                                <span> </span>
                                <span>M</span>
                                <span>e</span>
                            </a>
                        </div>
                @endif
                <!-- Hire Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hire Area -->

    <!-- Start Counter Area -->
    <div class="counter-area">
        <div class="container">
            <div class="row">
                @if($getCounters)
                    @foreach($getCounters as $counter)
                        <div class="col-lg-3 col-md-6 mt-4">
                            <!-- Start Single Counter -->
                            <div class="counter-box d-flex align-items-center justify-content-center">
                                <div class="counter-content">
                                    <div
                                        class="icon-bg mb-3 water-wave d-flex justify-content-center align-items-center">
                                        <i class="{{ $counter->icon }}"></i>
                                    </div>
                                    <!-- Counter Number -->
                                    <h2><span class="counter">{{ $counter->number }}</span></h2>
                                    <p class="text-capitalize">{{ $counter->title }}</p>
                                </div>
                            </div>
                            <!-- End Single Counter -->
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- End Counter Area -->

    <!-- Start Testimonial Area -->
    <section class="testimonial-area section-padding">
        <!-- start section title -->
        <div class="section-title">
            <h2>Testimonial</h2>
            <span></span>
        </div>
        <!-- end section title -->
        <div class="container">
            @if($getTestimonials)
                <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <!-- Carousel Indicators Images -->
                            <ol class="carousel-indicators indicators tabs">
                                @foreach($getTestimonials as $testimonial)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index ++ }}"
                                        class="{{ $loop->first ? 'active' : '' }}">
                                        <figure>
                                            <img src="{{ asset('uploads/image/testimonial/'. $testimonial->image) }}"
                                                 class="img-fluid" alt="{{ $testimonial->image }}">
                                        </figure>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="col-lg-6">
                            <div class="quote-icon">
                                <i class="im im-quote-left"></i>
                            </div>
                            <!-- start testimonial slider wrapper -->
                            <div class="carousel-inner">
                            @foreach($getTestimonials as $testimonial)
                                <!-- start testimonial item -->
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <!-- testimonial quote -->
                                        <div class="quote-wrapper">
                                            <p>{{ $testimonial->review }}</p>
                                            <!-- testimonial owner -->
                                            <h4 class="mt-4">{{ $testimonial->name }}</h4>
                                            <span>{{ $testimonial->position }}</span>
                                        </div>
                                    </div>
                                    <!-- end testimonial item -->
                                @endforeach
                            </div>
                            <!-- end testimonial slider wrapper -->

                            <!-- start carousel inicator -->
                            <ol class="carousel-indicators carousel-indicators2 indicators">
                                @foreach($getTestimonials as $testimonial)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index ++ }}"
                                        class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <!-- end carousel indicator -->
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- End Testimonial Area -->

    <!-- Start Blog Area -->
    <section class="blog-area section-padding" id="blog">
        <!-- start section title -->
        <div class="section-title">
            <h2>Latest News</h2>
            <span></span>
        </div>
        <!-- end section title -->
        <div class="container">
            <div class="row">
                @if($getBlogs)
                    @foreach($getBlogs as $blog)
                        <div class="col-lg-4 col-md-6 mt-5">
                            <!-- Start Single Blog -->
                            <div class="single-blog text-center">
                                <a href="javascript:;" data-toggle="modal"
                                   data-target="#blog{{ ++ $loop->index }}Modal">
                                    <!-- blog image -->
                                    <img src="{{ asset('uploads/image/blog/'. $blog->image)  }}" class="img-fluid"
                                         alt="{{ Str::slug($blog->title) }}">
                                </a>
                                <!-- blog info date & writter -->
                                <div class="blog-info" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                                    <span class="text-white"><i class="im im-date-o"></i> {{ $blog->created_at->diffForhumans() }}</span>
                                    <span class="text-white"><i
                                            class="im im-user-male"></i> by {{ $blog->user->name }}</span>
                                </div>
                                <!-- blog header -->
                                <h4>
                                    <a href="javascript:;" data-toggle="modal"
                                       data-target="#blog{{ $loop->index }}Modal">
                                        {{ $blog->title }}
                                    </a>
                                </h4>
                                <p>{{ Str::limit($blog->description, 50) }}</p>
                            </div>
                            <!-- End Single Blog -->
                            <!-- Modal -->
                            <div class="modal fade" id="blog{{ $loop->index }}Modal" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="modal-body">
                                            <div class="content">
                                                <div class="modal-img mb-3">
                                                    <img src="{{ asset('uploads/image/blog/'. $blog->image)  }}"
                                                         class="img-fluid"
                                                         alt="{{ Str::slug($blog->title) }}">
                                                </div>
                                                <span class="author">By . {{  $blog->user->name  }}</span>
                                                <h2 class="mb-4">{{ $blog->title }}</h2>
                                                <p>{{ $blog->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Contact Area -->
    <div class="contact-area section-padding" id="contact">
        <!-- start section title -->
        <div class="section-title">
            <h2>Contact</h2>
            <span></span>
        </div>
        <!-- end esction title -->
        <div class="container">
            <div class="row justify-content-center">
                <!-- contact form -->
                <div class="col-lg-10 col-md-12 offset-lg-2">
                    <div class="contact-form">
                        <div class="row align-items-center">
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="img-holder"
                                     data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                                    @if($getSetting)
                                        <img src="{{ asset('uploads/image/contact/'. $getSetting->contact_image) }}"
                                             alt="{{ Str::slug($getSetting->site_name) }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div id="success" class="alert alert-success mb-4" style="display: none">
                                    <span>Thank you for contact us</span>
                                </div>
                                <h3>@if($getSetting){!! $getSetting->contact_title !!}@endif</h3>
                                <form method="get" action="{{ route('send.mail') }}" id="contact-form"
                                      novalidate="novalidate">
                                    @csrf
                                    <div class="form-group d-flex justify-content-between name-email">
                                        <div class="input-field">
                                            <input type="text" name="name" id="name" placeholder="Name"
                                                   class="form-control"
                                                   value="{{ old('name') }}">
                                        </div>
                                        <div class="input-field">
                                            <input type="email" name="email" id="email" placeholder="Email"
                                                   class="form-control" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" placeholder="Subject"
                                               class="form-control"
                                               value="{{ old('subject') }}">
                                    </div>
                                    <div class="form-group">
											<textarea name="message" id="message" placeholder="Message"
                                                      class="form-control">{{ old('message') }}</textarea>
                                    </div>
                                    <div class="input-group">
                                        <button type="submit" id="form-submit" class="btn" data-text="Send Message">
                                            <span>S</span>
                                            <span>e</span>
                                            <span>n</span>
                                            <span>d</span>
                                            <span> </span>
                                            <span>M</span>
                                            <span>e</span>
                                            <span>s</span>
                                            <span>s</span>
                                            <span>a</span>
                                            <span>g</span>
                                            <span>e</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end contact form -->
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                @if($getFooter)
                    <p class="col-lg-12 text-center">
                        {{ $getFooter->copyright }} {{ date('Y') }} by
                        <a href="{{ $getFooter->url }}" target="_blank">{{ $getFooter->owner }}</a>
                    </p>
                @endif
            </div>
        </div>

    </footer>
    <!-- End Footer -->
</div>
<!-- end template wrapper -->

<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
<script src="{{ asset('templates/frontend/sara/assets/js/jquery-3.2.0.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('templates/frontend/sara/assets/js/popper.min.js') }}"></script>
<!-- Twitter Bootstrap -->
<script src="{{ asset('templates/frontend/sara/assets/js/bootstrap.min.js') }}"></script>
<!-- JQuery Appear -->
<script src="{{ asset('templates/frontend/sara/assets/js/jquery.appear.js') }}"></script>
<!-- animated headline text effect -->
<script src="{{ asset('templates/frontend/sara/assets/js/animated-headline.js') }}"></script>
<!-- scroll reveal animation -->
<script src="{{ asset('templates/frontend/sara/assets/js/scrollreveal.min.js') }}"></script>
{{-- Contact form validation --}}
<script src="{{ asset('templates/frontend/sara/assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('templates/frontend/sara/assets/js/jquery.validate.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('templates/frontend/sara/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Isotop js filter -->
<script src="{{ asset('templates/frontend/sara/assets/js/isotope.pkgd.min.js') }}"></script>
<!-- glassyWorms Js -->
<script src="{{ asset('templates/frontend/sara/assets/js/glassyWorms.js') }}"></script>
<script src="{{ asset('templates/frontend/sara/assets/js/sketch.js') }}"></script>
<!-- Custom Function js -->
<script src="{{ asset('templates/frontend/sara/assets/js/main.js') }}"></script>
<script>
    /* ============================================== */
    /*	Contact Form
    /* =============================================== */

    $("#contact-form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
            },
            email: {
                required: true,
                email: true,
            },
            subject: {
                required: true,
                minlength: 5,
            }
            ,
            message: {
                required: true,
                minlength:
                    30,
            }
            ,
        },
        messages: {
            name: {
                required: "Name field is required.",
                minlength:
                    "your name must consist of at least 2 characters.",
            }
            ,
            email: {
                required: "Email field is required.",
            },
            subject: {
                required: "Subject field is required",
                minlength:
                    "Subject must consist of at least 5 characters.",
            }
            ,
            message: {
                required: "Message field is required.",
                minlength:
                    "Message must consist of at least 30 characters.",
            }
            ,
        }
        ,
        submitHandler: function (form) {
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "{{ route('contact.us.store') }}",
                success: function () {
                    $("#contact-form :input").attr("disabled", "disabled");
                    $("#contact-form").fadeTo("slow", 0.15, function () {
                        $(this).find(":input").attr("disabled", "disabled");
                        $(this).find("label").css("cursor", "default");
                        $("#success").fadeIn();
                    });
                },
                error: function () {
                    $("#contact-form").fadeTo("slow", 0.15, function () {
                        $("#error").fadeIn();
                    });
                },
            });
        }
        ,
    });
</script>
</body>

</html>

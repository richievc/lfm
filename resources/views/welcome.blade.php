<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Liquefire Media</title>

        <!-- Fonts -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
        <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('assets/node_modules/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- This is for the animation CSS -->
        <link href="{{ asset('assets/node_modules/aos/dist/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/node_modules/owl.carousel/dist/assets/owl.theme.green.css') }}" rel="stylesheet">
        <link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css'>

        <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <style>
        .feature24 {
            background-position: center top;
            background-size: cover;
            background-attachment: fixed;
            -webkit-box-shadow: inset 2px 1px 7px 2px rgba(0,0,0,0.71);
            box-shadow: inset 2px 1px 7px 2px rgba(0,0,0,0.71);
        }
        .feature2 {
            background-position: center top;
            background-size: cover;
        }
        .contact3 {
            background-position: center top;
            background-size: cover;
            background-attachment: fixed;
            -webkit-box-shadow: inset 2px 1px 7px 2px rgba(0,0,0,0.71);
            box-shadow: inset 2px 1px 7px 2px rgba(0,0,0,0.71);
        }
/*******************
Testimonial 1
*******************/
        .testimonial1 .testi1 .card-body {
            padding: 35px;
        }

        .testimonial1 .testi1 .thumb {
            position: relative;
            padding: 10px 20px 10px;
            padding-left: 90px;
            margin-left: -35px;
            display: inline-block;
            color: #ffffff;
            margin-bottom: 30px; }
        .testimonial1 .testi1 .thumb .thumb-img {
            width: 60px;
            position: absolute;
            left: 20px;
            top: -10px; }

        .testimonial1 .testi1 h5 {
            line-height: 30px; }

        .testimonial1 .testi1 .devider {
            height: 1px;
            background: rgba(0, 0, 0, 0.9);
            margin: 20px 0;
            display: inline-block;
            width: 100px; }
    </style>
    </head>
    <body>

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">LiquefireMedia</p>
        </div>
    </div>
    <?php

        /**
         * Header Data
         */
        $company_logo = asset('assets/images/logo.png');
        $company_name = "Liquefire Media LLC";
        $sales_phone = '727-404-4515';
        $facebook_username = '';
        $twitter_username = '';
        $google_username = '';

        $image_box_1    = asset('assets/images/437732.jpg');
        $title_box_1    = 'Website Solutions Built on today\'s technology';
        $desc_box_1     = 'To accomplish great things, we must not only dream and plan but also act.';

        $image_box_2            = asset('assets/images/images.jpg');
        $title_box_2            = __('Professional Web Development and Online Media Creation Company');
        $desc_box_2             = 'We are a dedicated and collaborative team of professionals that work with our Clients to Create and Implement IdealInnovative Solutions in Web Design,';
        $box_2_panel_1_image    = asset('assets/images/features/design.png');
        $box_2_panel_1_title    = 'Website Design';
        $box_2_panel_1_desc     = "";

        $box_2_panel_2_image    = asset('assets/images/features/webhosting.jpg');
        $box_2_panel_2_title    = 'Website Hosting';
        $box_2_panel_2_desc     = "";

        $box_2_panel_3_image    = asset('assets/images/features/development.jpg');
        $box_2_panel_3_title    = 'Website Development';
        $box_2_panel_3_desc     = "";

        $feature24_bg           = asset('assets/images/features/call-acti-bg.jpg');
        $feature24_title        = "Core Programming";
        $feature24_desc         = "Building your site from the inside out";
        $feature24_btn          = "Join us now";

        $lists = [
            'PHP' => asset('assets/images/php.png'),
            'Ajax' => asset('assets/images/ajax.png'),
            'React' => asset('assets/images/react.png'),
            'Could Solutions' => asset('assets/images/Cloud-Solution.png'),
            'Micro Services' => asset('assets/images/micro_services.png'),
            'NodeJs' => asset('assets/images/nodejs.png')
        ];
        $logos = '';
        foreach ($lists as $title => $url) {
            $logos.= '<div class="col-lg-2 col-md-4">
                <img src="' . $url . '" alt="' . $title . '" height="100" width="120" />
            </div>';
        }

        $contact3_bg_image      = asset('assets/images/clouds-19.jpg');
        $contact3_icon          = asset('assets/images/contact-us-icon.png');
        $contact3_url           = url('pages/contactus/send');
        $contact3_address       = "";
        $contact3_address2      = "";

        $contact3_sale_phone    = "";
        $contact3_support_phone = "";

        $contact3_sale_email    = "";
        $contact3_support_email = "";

    ?>
    <div id="main-wrapper">

        <div class="topbar">
            <div class="header5" style="background: rgba(0,0,0, .1)">
                <div class="container po-relative">
                    <nav class="navbar navbar-expand-md h5-nav-bar">
                        <a href="#" class="navbar-brand p-3">
                            <img src="{{ $company_logo }}" alt="{{ $company_name }}" style="width: 90px; height: 80px;" />
                        </a>
                        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#h5-info" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse text-uppercase" id="h5-info">
                            <nav></nav>
                            <ul class="navbar-nav ml-auto ">
                                <li class="nav-item"><a class="nav-link" href="tel::{{ $sales_phone }}"><i class="icon-Phone-2 font-20 "></i> {{ $sales_phone }}</a></li>
                                <li class="nav-item"><a class="nav-link" href="https://twitter.com/{{ $twitter_username }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="https://facebook.com/{{ $facebook_username }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="https://google.com/{{ $google_username }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="static-slider10" style="background-image:url('{{ $image_box_1 }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center " data-aos="fade-down" data-aos-duration="1500">
                                <div class="">
                                    <h1 class="text-white font-medium">{{ $title_box_1 }}</h1>
                                    <h5 class="text-white m-t-20 hidden-md-down">T{{ $desc_box_1 }}</h5>
                                    <a href="#" class="btn btn-outline-light btn-rounded m-t-30 m-b-30">More Info</a>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 text-center ml-auto">
                                <div class="card" data-aos="flip-left" data-aos-duration="1200">
                                    <div class="card-body">
                                        <div class="text-box">
                                            <h2 class="title font-light">
                                                <span class="font-stylish">{{ __('Request') }}</span>
                                                <br> {{ __('Appointment') }}
                                            </h2>
                                            <form class="m-t-30 p-30" data-aos="fade-left" data-aos-duration="1200">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="your name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" placeholder="email address">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="phone number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group input-icon">
                                                            <input class="form-control po-relative" type="text" placeholder="choose date" id="dp">
                                                            <i class="fa fa-calendar po-absolute"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 d-flex m-t-20">
                                                        <button type="submit" class="btn btn-md btn-block btn-danger-gradiant btn-arrow"><span> Make Appointment <i class="ti-arrow-right"></i></span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spacer feature2" style="background-image:url('{{ $image_box_2 }}')">
                    <div class="container">

                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title font-medium">
                                    {{ $title_box_2 }}
                                </h2>
                                <h6 class="subtitle">
                                    {{ $desc_box_2 }}
                                </h6>
                            </div>
                        </div>

                        <div class="row m-t-40">

                            <div class="col-md-4 wrap-feature2-box card-shadow">
                                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                    <img class="card-img-top" src="{{ $box_2_panel_1_image }}" alt="Website Design"  height="180"  />
                                    <div class="card-body text-center">
                                        <h5 class="font-medium">{{ $box_2_panel_1_title }}</h5>
                                        <p class="m-t-20">
                                            {{ $box_2_panel_1_desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 wrap-feature2-box card-shadow">
                                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                    <img class="card-img-top" src="{{ $box_2_panel_2_image }}" alt="Website Design"  height="180"  />
                                    <div class="card-body text-center">
                                        <h5 class="font-medium">{{ $box_2_panel_2_title }}</h5>
                                        <p class="m-t-20">
                                            {{ $box_2_panel_2_desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 wrap-feature2-box card-shadow">
                                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                    <img class="card-img-top" src="{{ $box_2_panel_3_image }}" alt="Website Design"  height="180"  />
                                    <div class="card-body text-center">
                                        <h5 class="font-medium">{{ $box_2_panel_3_title }}</h5>
                                        <p class="m-t-20">
                                            {{ $box_2_panel_3_desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="spacer feature22" style="border: 1px solid #CCC; border-collapse: collapse;">
                    <div class="container">
                        <!-- Row -->
                        <div class="row wrap-feature-22">
                            <!-- Column -->
                            <div class="col-lg-6" data-aos="flip-up" data-aos-duration="1200">
                                <img src="{{ asset('assets/images/Ecommerce-Mistakes-to-Avoid.png') }}" class="rounded img-responsive" alt="" />
                            </div>

                            <div class="col-lg-6">
                                <div class="text-box">
                                    <small class="text-info font-medium">E-COMMERCE</small>
                                    <h3 class="font-light">We work to ensure Your Ecommerce Suite </h3>
                                    <p>and it's capabilities are customized for targeting your ideal customers making their shopping experience a smooth and simple one with the tools and resources that you need to track and manage your customers and there buying behavior optimizing both new and return purchasers, with easy to update inventory features and availability .</p>
                                    <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#">
                                        <span>View Other Features <i class="fa fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spacer bg-dark feature24" style="background-image:url('{{ $feature24_bg }}')">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title text-white font-medium m-b-20 m-t-20" style="font-size: 48px; text-shadow: 0 0 5px black;">{{ $feature24_title }}</h2>
                                <p class="font-light text-white op-8" style="font-size: 18ox; font-weight: bold;">{{ $feature24_desc }}</p>
                                <a class="btn btn-danger-gradiant btn-md btn-arrow m-t-20 text-uppercase" href="#"><span> {{ $feature24_btn }}<i class="ti-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="client2 spacer p-t-0">
                    <div class="container">
                        <p class="alert text-dark text-center font-16 font-normal font-bold" style="font-size: 24px; font-weight: bold">We Specialize in the following technologies</p>
                        <div class="row client-box text-center op-7">
                            {!! $logos !!}
                        </div>
                    </div>
                </div>

                <div class="spacer feature23 wrap-feature23-box" style="background-image:url('{{ asset('assets/images/photo-1522327646852-4e28586a40dd.jpg') }}')">
                    <div class="container">
                        <!-- Row -->
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 text-center both-space">
                                <div class="card" data-aos="flip-left" data-aos-duration="1200">
                                    <div class="card-body">
                                        <div class="text-box">
                                            <h3 class="title font-bold">Media Stream and Live Broadcasting</h3>
                                            <h6 class="subtitle">
                                                At Liquefire Media we offer custom media and content solutions for both Web and Mobile with real time
                                                video/audio streaming for both local and online applications and services. Weather its livestreaming
                                                for content creation or for events and conferences, offsite monitoring and Interactive Services
                                                Integrations, or live customer interaction we will find the right solution to fit your needs
                                            </h6>
                                            <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20" href="#"><span>Learn More.<i class="ti-arrow-right"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>

               {{-- <div class="testimonial1 spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title font-medium">Check what our Customers are Saying</h2>
                                <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                            </div>
                        </div>
                        <!-- Row  -->
                        <div class="owl-carousel owl-theme testi1 m-t-40">
                            <!-- item -->
                            <div class="item">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <div class="thumb bg-success-gradiant"><img src="https://liquefiremedia.com/assets/images/testimonial/1.jpg" alt="wrapkit" class="thumb-img circle" /> Michelle Anderson</div>
                                        <h5 class="font-light">You can relay on our amazing features list and also our customer services will be great experience. You can relay on our amazing features.</h5>
                                        <span class="devider"></span>
                                        <h6>Managing Director, Theme Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <!-- item -->
                            <div class="item">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <div class="thumb bg-success-gradiant"><img src="https://liquefiremedia.com/assets/images/testimonial/2.jpg" alt="wrapkit" class="thumb-img circle" /> Michelle Anderson</div>
                                        <h5 class="font-light">You can relay on our amazing features list and also our customer services will be great experience. You can relay on our amazing features.</h5>
                                        <span class="devider"></span>
                                        <h6>CEO, Theme Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <!-- item -->
                            <div class="item">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <div class="thumb bg-success-gradiant"><img src="https://liquefiremedia.com/assets/images/testimonial/3.jpg" alt="wrapkit" class="thumb-img circle" /> Michelle Anderson</div>
                                        <h5 class="font-light">You can relay on our amazing features list and also our customer services will be great experience. You can relay on our amazing features.</h5>
                                        <span class="devider"></span>
                                        <h6>Managing Director, Theme Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <!-- item -->
                            <div class="item">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <div class="thumb bg-success-gradiant"><img src="images/testimonial/1.jpg" alt="wrapkit" class="thumb-img circle" /> Michelle Anderson</div>
                                        <h5 class="font-light">You can relay on our amazing features list and also our customer services will be great experience. You can relay on our amazing features.</h5>
                                        <span class="devider"></span>
                                        <h6>Managing Director, Theme Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                        </div>
                    </div>
                </div>--}}

                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Contact 3  -->
                    <!-- ============================================================== -->
                    <div class="contact3 spacer" style="background-image: url('{{ $contact3_bg_image }}'); background-size: cover;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="row m-0">
                                        <div class="col-lg-7">
                                            <div class="card-shadow" data-aos="flip-left" data-aos-duration="1200"
                                                 style="padding-top: 25%; padding-left: 25%;">
                                                    <img src="{{ $contact3_icon }}" alt="Contact Us" method="post" class=""width="260" >
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="contact-box m-l-30">
                                                <h1 class="title font-light m-t-10">Contact Us</h1>
                                                <form action="{{ $contact3_url }}" class="m-t-30" data-aos="fade-left" data-aos-duration="1200">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group m-t-10">
                                                                <input class="form-control" type="text" placeholder="Name"> </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group m-t-10">
                                                                <input class="form-control" type="email" placeholder="Email address"> </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group m-t-10">
                                                                <input class="form-control" type="text" placeholder="Phone"> </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group m-t-10">
                                                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <button type="submit" class="btn btn-info-gradiant btn-md m-t-20 btn-arrow"><span> SUBMIT <i class="ti-arrow-right"></i></span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card m-t-40">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="card-body d-flex no-block c-detail p-l-0">
                                                            <div class="m-r-20 align-self-center">
                                                                <img src="{{ asset('assets/images/contact/icon1.png') }}" alt="wrapkit"> </div>
                                                            <div class="">
                                                                <h6 class="font-medium">Address</h6>
                                                                <p class="">
                                                                    {{ $contact3_address }} <br> {{ $contact3_address2 }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="card-body d-flex no-block c-detail">
                                                            <div class="m-r-20 align-self-center"> <img src="../assets/images/contact/icon2.png" alt="wrapkit"> </div>
                                                            <div class="">
                                                                <h6 class="font-medium">Phone</h6>
                                                                <p class="">
                                                                    {{ $contact3_sale_phone }} <br> {{ $contact3_support_phone }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="card-body d-flex no-block c-detail">
                                                            <div class="m-r-20 align-self-center"> <img src="../assets/images/contact/icon3.png" alt="wrapkit"> </div>
                                                            <div class="">
                                                                <h6 class="font-medium">Email</h6>
                                                                <p class="">
                                                                    {{ $contact3_sale_email }} <br> {{ $contact3_support_email }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3526.8256346819417!2d-82.74103844901023!3d27.876626124553688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2fad5c7e1f65b%3A0xd3da2ed89dab9e86!2s7207%20114th%20Ave%20c2%2C%20Largo%2C%20FL%2033773%2C%20USA!5e0!3m2!1sen!2sin!4v1640828585454!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="spacer">
                        <div class="container">
                            <div class="row justify-content-center m-b-30">
                                <div class="col-md-7 text-center">
                                    <h2 class="title">SEO</h2>
                                    <h6 class="subtitle">
                                        Today, organic search results drive more than 50 percent of website traffic, which is why more businesses are taking another look at search engine optimization (SEO) and SEO management for growing their revenue and company.
                                    </h6>
                                    <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="#"><span>Learn More <i class="ti-arrow-right"></i></span></a> </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="footer4 spacer bg-dark b-t">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 m-b-30">
                            <h5 class="m-b-20 text-white">Address</h5>
                            <p>7207 114th Ave Suite C2<br>
                                Largo FL 33773</p>
                        </div>
                        <div class="col-lg-3 col-md-6 m-b-30">
                            <h5 class="m-b-20 text-white">Phone</h5>
                            <p>Reception : 727-404-4515</p>
                        </div>
                        <div class="col-lg-3 col-md-6 m-b-30">
                            <h5 class="m-b-20 text-white">Email</h5>
                            <p>Office : <a href="#" class="link text-white">info@LiquefireMedia.com</a>
                                <br/>Site : <a href="#" class="link text-white">sales@LiquefireMediad.com</a></p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="m-b-20 text-white">Social</h5>
                            <div class="round-social light">
                                <a href="#" class="link"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="link"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="link"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="link"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" class="link"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="f4-bottom-bar">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex font-14">
                                    <div class="m-t-10 m-b-10 copyright">All Rights Reserved by Liquefire Media LLC.</div>
                                    <div class="links ml-auto m-t-10 m-b-10">
                                        <a href="#" class="p-10 p-l-0">Terms of Use</a>
                                        <a href="#" class="p-10">Legal Disclaimer</a>
                                        <a href="#" class="p-10">Privacy Policy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script src="{{ asset('assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/popper/dist/popper.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>

    <script src="{{ asset('js/type.js') }}"></script>
    <script src="{{ asset('assets/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">

        $('.video-img').on('click', function() {
            $(this).addClass('hide');
            $('.embed-responsive').show()
                .removeClass('hide');
            $("video").each(function() { this.play() });
        });

        $('.testi8').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                1650: {
                    items: 1
                }
            }
        });

        /*******************************/
        // this is for the testimonial 1
        /*******************************/
        $('.testi1').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            autoplay: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                1170: {
                    items: 2
                }
            }
        });


        $('#dp').datepicker();
    </script>



    </body>
</html>

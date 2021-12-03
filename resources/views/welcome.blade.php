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
    </style>
    </head>
    <body>

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">LiquefireMedia</p>
        </div>
    </div>

    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <div class="topbar">
            <!-- ============================================================== -->
            <!-- Header 5  -->
            <!-- ============================================================== -->
            <div class="header5" style="background: rgba(0,0,0, .1)">
                <div class="container po-relative">
                    <nav class="navbar navbar-expand-md h5-nav-bar">
                        <a href="#" class="navbar-brand p-3">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="LiqueFireMedia" style="width: 90px; height: 80px;" />
                        </a>
                        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#h5-info" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse text-uppercase" id="h5-info">
                            <ul class="navbar-nav ml-auto ">
                                <li class="nav-item"><a class="nav-link" href="#"><i class="icon-Phone-2 font-20 vm"></i> 999-999-9999</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Header 5  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="static-slider10" style="background-image:url('{{ asset('assets/images/banner-bg.jpg') }}')">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row">
                            <div class="col-lg-6 align-self-center " data-aos="fade-down" data-aos-duration="1500">
                                <div class="">
                                    <h1 class="text-white font-medium">Website Solutions Built on today's technology</h1>
                                    <h5 class="text-white m-t-20 hidden-md-down">To accomplish great things, we must not only dream and plan but also act.</h5>
                                    <a href="#" class="btn btn-outline-light btn-rounded m-t-30 m-b-30">More Info</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-center ml-auto">
                                <div class="card" data-aos="flip-left" data-aos-duration="1200">
                                    <div class="card-body">
                                        <div class="text-box">
                                            <h2 class="title font-light"><span class="font-stylish">Request</span> <br> Appointment</h2>
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

                <div class="spacer feature2">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title font-medium">Professional Web Development and Online Media Creation Company</h2>
                                <h6 class="subtitle">>We are a dedicated and collaborative team of professionals that work with our Clients to Create and Implement IdealInnovative Solutions in Web Design,</h6>
                            </div>
                        </div>
                        <!-- Row  -->
                        <div class="row m-t-40">
                            <!-- Column -->
                            <div class="col-md-4 wrap-feature2-box">
                                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                    <img class="card-img-top" src="{{ asset('assets/images/features/design.png') }}" alt="Website Design"  height="180"  />
                                    <div class="card-body text-center">
                                        <h5 class="font-medium">Website Design</h5>
                                        <p class="m-t-20">

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4 wrap-feature2-box">
                                <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                                    <img class="card-img-top" src="{{ asset('assets/images/features/webhosting.jpg') }}" alt="Website Hosting" height="180" />
                                    <div class="card-body text-center">
                                        <h5 class="font-medium">Website Hosting</h5>
                                        <p class="m-t-20">
                                            We Provide Advanced Cloud Hosting Solutions. 2X Faster Speeds, Zero Service Interruption
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4 wrap-feature2-box">
                                <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                                    <img class="card-img-top" src="{{ asset('assets/images/features/development.jpg') }}" alt="Website Programing" height="180"/>
                                    <div class="card-body text-center">
                                        <h5 class="font-medium">Website Programing</h5>
                                        <p class="m-t-20">


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spacer bg-dark feature24" style="background-image:url('{{ asset('assets/images/features/call-acti-bg.jpg') }}')">
                    <div class="container">
                        <!-- Row -->
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title text-white font-medium m-b-20 m-t-20">Become a Customer</h2>
                                <p class="font-light text-white op-8">Say something here</p>
                                <a class="btn btn-danger-gradiant btn-md btn-arrow m-t-20 text-uppercase" href="#"><span>join us now<i class="ti-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                </div>

                <div class="client2 spacer p-t-0">
                    <div class="container">
                        <p class="alert text-dark text-center font-16 font-normal font-bold" style="font-size: 24px; font-weight: bold">We Specialize in the following technologies</p>
                        <div class="row client-box text-center op-7">
                            <div class="col-lg-2 col-md-4">
                                <img src="{{ asset('assets/images/php.png') }}" alt="PHP" height="100" width="120" />
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <img src="{{ asset('assets/images/ajax.png') }}" alt="aajx"  height="100" width="120"/>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <img src="{{ asset('assets/images/react.png') }}" alt="React" height="100" width="120" />
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <img src="{{ asset('assets/images/Cloud-Solution.png') }}" alt=Cloud" height="100" width="120" />
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <img src="{{ asset('assets/images/micro_services.png') }}" alt="Micro Services" height="100" width="120" />
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <img src="{{ asset('assets/images/nodejs.png') }}" alt="NodeJs" height="100" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="bt-top btn btn-circle btn-lg btn-info" href="#top">
                <i class="fa fa-arrow-up"></i>
            </a>
        </div>

        <div class="footer4 spacer bg-dark b-t">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 m-b-30">
                        <h5 class="m-b-20 text-white">Address</h5>
                        <p>Largo FL, 33614</p>
                    </div>
                    <div class="col-lg-3 col-md-6 m-b-30">
                        <h5 class="m-b-20 text-white">Phone</h5>
                        <p>Reception : 999-999-9999</p>
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
                                <div class="m-t-10 m-b-10 copyright">All Rights Reserved by LiquefireMediad.</div>
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
        $('#dp').datepicker();
    </script>



    </body>
</html>

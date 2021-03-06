<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IIC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("images/logo.png")}}" type="image/x-icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Bell
      Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<!-- Page Content
  ================================================== -->
<!-- Hero -->

<section class="hero">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <a class="hero-brand" href="{{ url('/') }}" title="Home"><img alt="Bell Logo"
                                                                              src="{{ asset('images/logo.png')}}"
                                                                              width="200px" height="200px"></a>
            </div>
        </div>

        <div class="col-md-12">
            <h2>
                Nurturing Youth
                to Entrepreneurs
            </h2>

            <p class="tagline">
                Innovation and Incubation Centre (IIC)
                Come to us with an idea and we will provide you with means to execute it
            </p>
            <a class="btn btn-full" href="#about">Get Started Now</a>
        </div>
    </div>

</section>
<!-- /Hero -->

<!-- Header -->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="{{ url('/') }}">
                <img src=" {{ asset('images/logo.png') }}" alt="" title="" width="100px" height="100px"></img></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Bell</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="#about">About Us</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="menu-has-children"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
        <!-- #nav-menu-container -->

        <nav class="nav social-nav pull-right d-none d-lg-inline">
            <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                        class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
        </nav>
    </div>
</header>
<!-- #header -->

<!-- About -->

<section class="about" id="about">
    <div class="container text-center">
        <h2>
            Key statics
        </h2>

        <p>
            PDPU Innovation & Incubation Centre (PDPU IIC) is an incubator established by Pandit Deendayal Petroleum
            University (PDPU). PDPU IIC is registered u/s 8 of Companies Act, 2013.
            It is recognized as Nodal Institute by Govt. of Gujarat and registered as Startup India Incubator
            under DIPP (Department of Industrial Policy and Promotion, Govt. of India).
            Also, PDPU IIC is supported by Student Start-up and Innovation Policy(SSIP)
            by Education Dept. of Govt. of Gujarat,
            Startup Innovation Policy by Industries Commissionerate(IC) and Department of Science and Technology(DST) by
            Government of Gujarat.

            PDPU IIC is born with the aim of converting the brimming potential of budding Engineers, Management Students
            and Technocrats into innovation-driven business ventures leading to technical renaissance.
            We are incubating 50+ Start-ups from the different domains such as waste management,
            energy and environment, IT & IOT, Fintech, Cleantech, etc.
        </p>

        <div class="row stats-row">
            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">50</span> Startups incubated
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">25</span>CR Accumulated funds raised
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">45</span>CR Accumulated sales of startups
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">10</span> IPR filed
                </div>
            </div>
            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">18</span> IPR in process
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">50</span> awards won by incubates
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">100</span> Events organized
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">200</span> Employments generated
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About -->
<!-- Parallax -->

<div class="block bg-primary block-pd-lg block-bg-overlay text-center"
     data-bg-img="{{ asset('images/img/parallax-bg.jpg') }}"
     data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg">
    <h2>
        Welcome to a perfect theme
    </h2>

    <p>
        This is the most powerful theme with thousands of options that you have never seen before.
    </p>
    <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="{{ asset('images/img/gadgets.png') }}">
</div>
<!-- /Parallax -->
<!-- Features -->

<section class="features" id="features">
    <div class="container">
        <h2 class="text-center">
            Features
        </h2>

        <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-rocket"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Custom Design
                        </h3>

                        <p>
                            Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-envelope"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Responsive Layout
                        </h3>

                        <p>
                            Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-bell"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Innovative Ideas
                        </h3>

                        <p>
                            Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-database"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Good Documentation
                        </h3>

                        <p>
                            Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-cutlery"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Excellent Features
                        </h3>

                        <p>
                            Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-dashboard"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Retina Ready
                        </h3>

                        <p>
                            Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Features -->
<!-- Call to Action -->

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-12 text-lg-left text-center">
                <h2>
                    Call to Action Section
                </h2>

                <p>
                    Lorem ipsum dolor sit amet, nec ad nisl mandamus imperdiet, ut corpora cotidieque cum. Et brute
                    iracundia his, est eu idque dictas gubergren
                </p>
            </div>

            <div class="col-lg-3 col-sm-12 text-lg-right text-center">
                <a class="btn btn-ghost" href="#">Buy This Theme</a>
            </div>
        </div>
    </div>
</section>
<!-- /Call to Action -->
<!-- Portfolio -->

<section class="portfolio" id="portfolio">
    <div class="container text-center">
        <h2>
            Portfolio
        </h2>

        <p>
            Voluptua scripserit per ad, laudem viderer sit ex. Ex alia corrumpit voluptatibus usu, sed unum convenire
            id. Ut cum nisl moderatius, Per nihil dicant commodo an.
        </p>
    </div>

    <div class="portfolio-grid">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" src="{{ asset('images/img/porf-1.jpg') }}">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    The Dude Rockin'
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" src=" {{ asset('images/img/porf-2.jpg') }}">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    The Dude Rockin'
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" src="{{ asset('images/img/porf-3.jpg') }}">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    The Dude Rockin'
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" src="{{ asset('images/img/porf-4.jpg') }}">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    The Dude Rockin'
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" src="{{ asset('images/img/porf-5.jpg') }}">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    The Dude Rockin'
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" src="{{ asset('images/img/porf-6.jpg') }}">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    The Dude Rockin'
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" src="{{ asset('images/img/porf-7.jpg') }}">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    The Dude Rockin'
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" src="{{ asset('images/img/porf-8.jpg') }}">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    The Dude Rockin'
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Portfolio -->
<!-- Team -->

<section class="team" id="team">
    <div class="container">
        <h2 class="text-center">
            Meet our team
        </h2>

        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('images/img/team-1.jpg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>
                        </div>

                        <div class="team-over">
                            <h4 class="hidden-md-down">
                                Connect with me
                            </h4>

                            <nav class="social-nav">
                                <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i
                                            class="fa fa-envelope"></i></a>
                            </nav>

                            <p>
                                Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 col-xs-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src=" {{ asset('images/img/team-2.jpg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>
                        </div>

                        <div class="team-over">
                            <h4 class="hidden-md-down">
                                Connect with me
                            </h4>

                            <nav class="social-nav">
                                <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i
                                            class="fa fa-envelope"></i></a>
                            </nav>

                            <p>
                                Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 col-xs-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('images/img/team-3.jpg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>
                        </div>

                        <div class="team-over">
                            <h4 class="hidden-md-down">
                                Connect with me
                            </h4>

                            <nav class="social-nav">
                                <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i
                                            class="fa fa-envelope"></i></a>
                            </nav>

                            <p>
                                Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 col-xs-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('images/img/team-4.jpg') }} ">
                        <div class="card-title-wrap">
                            <span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>
                        </div>

                        <div class="team-over">
                            <h4 class="hidden-md-down">
                                Connect with me
                            </h4>

                            <nav class="social-nav">
                                <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i
                                            class="fa fa-envelope"></i></a>
                            </nav>

                            <p>
                                Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Team -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Contact Us</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p>info@example.com</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                   data-rule="email" data-msg="Please enter a valid email"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="bottom">
        <div class="container">
            <div class="row">


                <div class="col-lg-6 col-xs-12 text-lg-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="index.html">Home</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#about">About Us</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#features">Features</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#portfolio">Portfolio</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#team">Team</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


<!-- Required JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
<script src=" {{ asset('lib/superfish/hoverIntent.js')  }}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{ asset('lib/tether/js/tether.min.js') }}"></script>
<script src=" {{ asset('lib/stellar/stellar.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src=" {{ asset('lib/easing/easing.js') }}"></script>
<script src="{{ asset('lib/stickyjs/sticky.js') }}"></script>
<script src=" {{ asset('lib/parallax/parallax.js') }}"></script>
<script src="{{ asset('lib/lockfixed/lockfixed.min.js') }}"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="{{ asset('js/custom.js') }}"></script>

<script src="{{ asset('contactform/contactform.js') }}"></script>

</body>
</html>

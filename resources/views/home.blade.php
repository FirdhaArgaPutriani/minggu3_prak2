<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Trend HTML Template</title>
    <!--
    DIGITAL TREND
    https://templatemo.com/tm-538-digital-trend
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/owl.theme.default.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('style/css/templatemo-digital-trend.css') }}">
</head>

<body>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="fa fa-line-chart"></i>
                    Ryuunosuke
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">Dasboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimonial" class="nav-link smoothScroll">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- HERO -->
    <section class="hero hero-bg d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="hero-text">
                        <h1 class="text-white" data-aos="fade-up">We are ready to help you understand the lesson </h1>
                        <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">
                            Let's join us!
                        </a>
                        <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200">
                            <i class="fa fa-phone mr-2"></i> +62 838 3158 5841
                        </strong>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('style/images/working-girl.png') }}" class="img-fluid" alt="working girl">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about section-padding pb-0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto col-md-10 col-12">
                    <div class="about-info">
                        <h2 class="mb-4" data-aos="fade-up">
                            the best <strong>Ryuunosuke Tutoring</strong> in Mojokerto
                        </h2>
                        <p class="mb-0" data-aos="fade-up" align="justify">
                            This Ryuunosuke Tutoring is located on Jayanegara Street No 32, Pure, Mojokerto city.
                            We provide experts who accompany you durring the teaching and learning process that is 
                            carried out in a fun way.
                        </p>
                    </div>

                    <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('style/images/office.png') }}" class="img-fluid" alt="office">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section class="testimonial section-padding" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <div class="contact-image" data-aos="fade-up">
                        <img src="{{ asset('style/images/female-avatar.png') }}" class="img-fluid" alt="website">
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 col-12">
                    <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">About Me</h4>
                    <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">
                        Name : Firdha Arga Putriani<br>
                        ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 2031710171<br>
                        Class&nbsp;&nbsp;: MI 2E<br>
                        Hobby: study, drawing, and cooking<br>
                        Born &nbsp;&nbsp;&nbsp;: Mojokerto, 13 March 2002
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Firdha Arga</strong>
                        <span class="mx-1">/</span>
                        <small>Ryuunosuke Tutoring (CEO)</small>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">
                        <strong>Ryuunosuke</strong> Tutoring.
                    </h1>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>
                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                            +62 838 3158 5841
                    </p>

                    <p>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                                2031710171@student.polinema.ac.id
                        </a>
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up"
                    data-aos-delay="400">
                    <p class="copyright-text">Copyright &copy; 2020 Firdha Arga P
                        <br>
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                    <ul class="footer-link">
                        <li><a href="#">Stories</a></li>
                        <li><a href="#">Work with us</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-dribbble"></a></li>
                        <li><a href="#" class="fa fa-behance"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="{{ asset('style/js/jquery.min.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/js/aos.js') }}"></script>
    <script src="{{ asset('style/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('style/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('style/js/custom.js') }}"></script>
</body>
</html>
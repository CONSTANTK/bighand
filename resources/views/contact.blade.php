<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Big Hand Limited - Contact</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('front/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="{{asset('front/https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('front/https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('front/https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap')}}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('front/assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: UpConstruction - v1.0.1
    * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{asset('front/index.html')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Big Hand Limited<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('projects')}}">Projects</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{route('team')}}">Our Team</a></li>
                        <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}" class="active">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('front/assets/img/breadcrumbs-bg.jpg')}}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Contact</h2>
            <ol>
                <li><a href="{{asset('front/index.html')}}">Home</a></li>
                <li>Contact</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3>Our Address</h3>
                        <p>7 Agbesi Close, Ashaiman Middle East, Ghana</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>thebighandent@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+233 243 877 766</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">

                <div class="col-lg-6 ">
                    <iframe src="{{asset('front/https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621')}}" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('contact.store')}}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-lg-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Welcome Big Hand Limited</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>{{asset('front/UpConstruction')}}</h3>
                        <p>
                            7 Agbesi Close <br>
                            Ashaiman Middle East, Ghana<br><br>
                            <strong>Phone:</strong> +233 24 3877 766<br>
                            <strong>Email:</strong>thebighandent@gmail.com<br>
                        </p>
                        <div class="social-links d-flex mt-3">
                            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div><!-- End footer info column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About us</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('services')}}">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="{{route('projects')}}">Building Construction</a></li>
                        <li><a href="{{route('projects')}}">Road Construction</a></li>
                        <li><a href="{{route('projects')}}">Construction  Design</a></li>
                        <li><a href="{{route('projects')}}">Construction Remodeling & Repairs</a></li>
                        <li><a href="{{route('projects')}}">Construction Consultancy</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Hic solutasetp</h4>
                    <ul>
                        <li><a href="#">Molestiae accusamus iure</a></li>
                        <li><a href="#">Excepturi dignissimos</a></li>
                        <li><a href="#">Suscipit distinctio</a></li>
                        <li><a href="#">Dilecta</a></li>
                        <li><a href="#">Sit quas consectetur</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nobis illum</h4>
                    <ul>
                        <li><a href="#">Ipsam</a></li>
                        <li><a href="#">Laudantium dolorum</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexo</a></li>
                    </ul>
                </div><!-- End footer links column-->

            </div>
        </div>
    </div>

    <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Big Hand Limited</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
                Designed by <a href="{{asset('front/https://bootstrapmade.com/')}}">CMM SOLUTIONS</a>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<{{--script src="{{asset('front/assets/vendor/php-email-form/validate.js')}}"></script>--}}

<!-- Template Main JS File -->
<script src="{{asset('front/assets/js/main.js')}}"></script>

</body>

</html>

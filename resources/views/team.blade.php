<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Big Hand Limited - About</title>
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
                <li><a href="{{route('about')}}" class="active">About</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('projects')}}">Projects</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{route('team')}}">Our Team</a></li>
                        <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('front/assets/img/breadcrumbs-bg.jpg')}}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Our Hardworking Team</h2>
            <ol>
                <li><a href="{{asset('front/index.html')}}">Home</a></li>
                <li><a href="{{route('about')}}">Our Team</a></li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Hardworking Team</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
            </div>

            <div class="row gy-5">

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="{{asset('front/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>BEN KUDZO NYAMASEKPOR</h4>
                        <span>Chief Executive Officer (Director)</span>
                        <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="{{asset('front/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>MALWIN SENORFE FUME (MRS)</h4>
                        <span> Marketing Manager</span>
                        <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="" class="img-fluid" alt=""{{asset('front/assets/img/team/team-3.jpg')}}>
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>EBENEZER EBEN</h4>
                        <span>CTO</span>
                        <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="{{asset('front/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>FAFA NYAMASEKPOR</h4>
                        <span>Accountant</span>
                        <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                    <div class="member-img">
                        <img src="{{asset('front/assets/img/team/team-5.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Brian Doe</h4>
                        <span>Marketing</span>
                        <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                    <div class="member-img">
                        <img src="{{asset('front/assets/img/team/team-6.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Josepha Palas</h4>
                        <span>Operation</span>
                        <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
            </div>

            <div class="slides-2 swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{asset('front/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{asset('front/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{asset('front/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{asset('front/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{asset('front/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Big Hand Limited</h3>
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
<script src="{{asset('front/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('front/assets/js/main.js')}}"></script>

</body>

</html>

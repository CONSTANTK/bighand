<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Big Hand Limited - Services</title>
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
                <li><a href="{{route('services')}}" class="active">Services</a></li>
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
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('front/assets/img/breadcrumbs-bg.jpg')}}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Services</h2>
            <ol>
                <li><a href="{{asset('front/index.html')}}">Home</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-mountain-city"></i>
                        </div>
                        <h3>Building Construction</h3>
                        <p>We are noted for doing very excellent job when it comes to building construction. We pay attention to every detail from fountation through roofing to painting and / or tiling.</p>
                        <a href="{{asset('front/service-details.html')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>
                        <h3>Construction Design</h3>
                        <p>We are noted for producing state-of-the-art structural designs for physical projects.</p>
                        <a href="{{asset('front/service-details.html')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <h3>Construction Remodeling</h3>
                        <p>We take your old design and redesign it into a new design of your choice. </p>
                        <a href="{{asset('front/service-details.html')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-trowel-bricks"></i>
                        </div>
                        <h3>Repairs</h3>
                        <p>At Big Hand Limited, we carry out repair works on your damaged structures and give them a new look.</p>
                        <a href="{{asset('front/service-details.html')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-helmet-safety"></i>
                        </div>
                        <h3>Construction / Product Management and Consultancy</h3>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                        <a href="{{asset('front/service-details.html')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>
                        <h3>Road Construction</h3>
                        <p>We are noted for our excellent road construction. We have been award the best road construction company of the year in 2019.</p>
                        <a href="{{asset('front/service-details.html')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Servie Cards Section ======= -->
    <section id="services-cards" class="services-cards">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <h3>Quasi eaque omnis</h3>
                    <p>Eius non minus autem soluta ut ui labore omnis quisquam corrupti autem odit voluptas quos commodi magnam occaecati.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip</span></li>
                        <li><i class="bi bi-check2"></i> <span>Duis aute irure dolor in reprehenderit</span></li>
                        <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                </div><!-- End feature item-->

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <h3>Et nemo dolores consectetur</h3>
                    <p>Ducimus ea quam et occaecati est. Temporibus in soluta labore voluptates aut. Et sit soluta non repellat sed quia dire plovers tradoria</p>

                    <ul class="list-unstyled">
                        <li><i class="bi bi-check2"></i> <span>Enim temporibus maiores eligendi</span></li>
                        <li><i class="bi bi-check2"></i> <span>Ut maxime ut quibusdam quam qui</span></li>
                        <li><i class="bi bi-check2"></i> <span>Officiis aspernatur in officiis</span></li>
                    </ul>
                </div><!-- End feature item-->

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <h3>Staque laboriosam modi</h3>
                    <p>Velit eos error et dolor omnis voluptates nobis tenetur sed enim nihil vero qui suscipit ipsum at magni. Ipsa architecto consequatur aliquam</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check2"></i> <span>Quis voluptates laboriosam numquam</span></li>
                        <li><i class="bi bi-check2"></i> <span>Treva libero sunt quis veniam ut</span></li>
                        <li><i class="bi bi-check2"></i> <span>Debitis eos est est corrupti</span></li>
                    </ul>
                </div><!-- End feature item-->

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <h3>Dignissimos suscipit iste</h3>
                    <p>Molestiae occaecati assumenda quia saepe nobis recusandae at dicta ducimus sequi numquam commodi est in consequatur ea magnam quia itaque</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check2"></i> <span>Veritatis qui reprehenderit quis</span></li>
                        <li><i class="bi bi-check2"></i> <span>Accusantium vel numquam sunt minus</span></li>
                        <li><i class="bi bi-check2"></i> <span>Voluptatem pariatur est sationem</span></li>
                    </ul>
                </div><!-- End feature item-->

            </div>

        </div>
    </section><!-- End Servie Cards Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Non quasi officia eum nobis et rerum epudiandae rem voluptatem</h3>
                    <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                            <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Tride clov</a></h4>
                            <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
                        </div>
                    </div><!-- End Icon Box -->
                </div>

                <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
            </div>

        </div>
    </section><!-- End Alt Services Section 2 -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg" style="background-image: url('{{asset('front/assets/img/alt-services.jpg')}}');" data-aos="zoom-in" data-aos-delay="100"></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Our Alternative Services</h3>
                    <p>The following list presents other services that we provide as a company</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                            <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Tride clov</a></h4>
                            <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>
    </section><!-- End Alt Services Section -->


                <div class="swiper-pagination"></div>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        7 Agbesi Close <br>
                        Ashaiman Middle East, Ghana<br><br>
                        <strong>Phone:</strong> +233 24 3877 766<br>
                        <strong>Email:</strong>thebighandent@gmail.com<br>

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

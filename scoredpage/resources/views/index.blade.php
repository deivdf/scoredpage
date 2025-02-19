<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pasion Scorts | Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="{{ asset('build/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('build/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

  
    <link href="{{ asset('build/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Invoque Header -->
    @include('header')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('build/assets/img/carousel-1.jpg') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">En Pasión Scorts</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Encuentra la modelo de tus sueños</h3>
                            <p class="mx-md-5 px-5">Mirá nuestro catalogo y enamorate</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="/service">Catalogo de Modelos</a>
                        </div>
                    </div>
                </div>
    {{--
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('build/assets/img/carousel-2.jpg') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('build/assets/img/carousel-3.jpg') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Cellulite Treatment</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="{{ asset('build/assets/img/about.jpg') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                    <h1 class="mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                    <p class="pl-4 border-left border-primary">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd erat duo eos et erat</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                <h6 class="text-uppercase">Spa Specialist</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                <h6 class="text-uppercase">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Nuestras Modelos</h6>
                <h1>Exclusivas para tí</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{ asset('build/assets/img/service-1.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Alias</h4>
                    <p class="text-white px-3 mb-3">texto de prueba, descripción de la modelo, lo que sabe hacer en la cama, lo que quiere que le hagan</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{ asset('build/assets/img/service-2.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Alias</h4>
                    <p class="text-white px-3 mb-3">texto de prueba, descripción de la modelo, lo que sabe hacer en la cama, lo que quiere que le hagan</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{ asset('build/assets/img/service-3.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Alias</h4>
                    <p class="text-white px-3 mb-3">texto de prueba, descripción de la modelo, lo que sabe hacer en la cama, lo que quiere que le hagan</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{ asset('build/assets/img/service-4.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Alias</h4>
                    <p class="text-white px-3 mb-3">texto de prueba, descripción de la modelo, lo que sabe hacer en la cama, lo que quiere que le hagan</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{ asset('build/assets/img/service-5.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Alias</h4>
                    <p class="text-white px-3 mb-3">texto de prueba, descripción de la modelo, lo que sabe hacer en la cama, lo que quiere que le hagan</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{ asset('build/assets/img/service-6.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Alias</h4>
                    <p class="text-white px-3 mb-3">texto de prueba, descripción de la modelo, lo que sabe hacer en la cama, lo que quiere que le hagan</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('build/assets/img/opening.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Relax And Spa Zone</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 9:00 AM - 7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM - 6:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed</li>
                        </ul>
                        <a href="" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->

    <!-- Pricing Start -->
    <div class="container-fluid bg-pricing" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('build/assets/img/pricing.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                        <div class="owl-carousel pricing-carousel">
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Basic Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                    <h1 class="mb-5">Spa & Beauty Specialist</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{ asset('build/assets/img/team-1.jpg') }}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{ asset('build/assets/img/team-2.jpg') }}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Cory Brown</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{ asset('build/assets/img/team-3.jpg') }}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{ asset('build/assets/img/team-4.jpg') }}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="{{ asset('build/assets/img/testimonial.jpg') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('build/assets/img/testimonial-1.jpg') }}" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('build/assets/img/testimonial-2.jpg') }}" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('build/assets/img/testimonial-3.jpg') }}" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Invoque Footer -->
    @include('footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('build/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('build/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('build/assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('build/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('build/assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('build/assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('build/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('build/assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('build/assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('build/assets/js/main.js') }}"></script>
</body>

</html>
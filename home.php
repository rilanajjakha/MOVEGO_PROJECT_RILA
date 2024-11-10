<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movego</title>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar & Header Start-->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
            <h3 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>movego</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="home.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="packages.php" class="nav-item nav-link">Packages</a>
                    <a href="#" class="nav-item nav-link">Contact</a>
                </div>

                <!-- alert register -->
                <a href="" id="registerButton" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
                <script>
                    // alert register
                    document.getElementById("registerButton").addEventListener("click", function(event) {
                        event.preventDefault();
                        alert("Login belum tersedia");
                    });
                </script>
            </div>
        </nav>

        <!-- Header -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Your Trusted Travel Agent's</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Enjoy Your Vacation With Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Header End-->

    <!-- About-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="assets/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Explore All Corners of The World With Us</h1>
                    <p class="mb-4">Welcome! We are your trusted travel agent, delivering unforgettable adventure experiences. With affordable tour packages and amazing destinations around the world, movago is a reliable travel partner for every adventurer. Let's explore the world together and create unforgettable memories!</p>

                    <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>World Tour</h5>
                            <p>Our travel agency specializes in world tours, providing knowledgeable tour guides who enhance your travel adventures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Adventure</h5>
                            <p>Experience the world with movego, where every destination is a new adventure waiting to be explored. Let's go!!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Tour Guide</h5>
                            <p>Trust our travel experts to curate unforgettable experiences that cater to your wanderlust and curiosity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Event Management</h5>
                            <p>We excel in event management, ensuring seamless and enjoyable experiences throughout your journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">We Provide Top Destinations</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/thai.jpg" alt="thailand">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$200.00</h3>
                            <p>Enjoy Unforgettable Fun with Our Best Travel Destinations in Thailand</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end booking-button" data-message="Paket wisata Thailand sudah habis">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/bali.jpg" alt="bali">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$150.00</h3>
                            <p>Enjoy Unforgettable Fun with Our Best Travel Destinations in Bali</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="packages.php" class="btn btn-sm btn-primary px-3 border-end">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/paris.jpg" alt="paris">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$300.00</h3>
                            <p>Enjoy Unforgettable Fun with Our Best Travel Destinations in Paris</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end booking-button" data-message="Paket wisata Paris sudah habis">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

        
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About </a>
                    <a class="btn btn-link" href="">Package</a>
                    <a class="btn btn-link" href="">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Extra Links</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>About Us</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>Ask Questions</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Privacy Policy</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact Info</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sleman, Yogyakarta, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>088803978579</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>movago@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Follow Us</h4>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">movego</a> 2024 All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Mengambil WOW.js dari CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> 

    <!-- Template Javascript -->
    <script src="js/script.js"></script>
</body>
</html>
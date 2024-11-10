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

                <a href="#" id="registerButton" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
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
                    <h1 class="mb-4">Why Choose Us?</h1>
                    <p class="mb-4">Movego is a premier tour operator and travel agent in Indonesia, renowned for offering a diverse range of international and domestic
                    tour packages at friendly prices. Our expertly curated travel experiences are designed to cater to every type of traveler, ensuring 
                    memorable and hassle-free journeys. With Movego, you benefit from fantastic getaways that are meticulously planned to provide the best in comfort and adventure.</p>

                    <!-- Button testimoni -->
                    <a class="btn btn-primary py-3 px-5 mt-2" href="testimony.php">See Testimony</a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- About Us End -->






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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> 

    <!-- Template Javascript -->
    <script src="js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Bliss - Home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand me-auto" href="#"><img src="img/logo.png" alt="Logo"></a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" alt="Logo"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page" id="home-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="menuInfoHome-link" href="#menuInfoHome">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="reservationInfoHome-link" href="#reservationInfoHome">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="deliveryInfoHome-link" href="#deliveryInfoHome">Delivery</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="aboutInfoHome-link" href="#aboutInfoHome">About</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="footer-link" href="#footer">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" class="Lightbtn" id="profile-button"><i class="fas fa-user"></i></a>
                    <div class="dropdown-menu" id="profile-dropdown">
                        <a class="dropdown-item" href="profile.php">Update Profile</a>
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Home -->
        <section class="home" id="home">
            <div class="homeBox1">
                <div class="home-text">
                    <h1>Bean Bliss Coffee</h1>
                    <h2>Brewing Joy in Every Cup</h2>
                    <h3>Experience the freshness and warmth in every sip of Bean Bliss Coffee.<br></h3>
                    <a href="delivery.php" class="btn">Grab Now</a>
                </div>
                <div class="home-img">
                    <img src="img/background1.png" alt="coffee">
                </div>
            </div>
            <div class="homeBox2"></div>
        </section>

        <!-- Other sections... -->

        <!-- Footer Section -->
        <section class="footer" id="footer">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="footer-container my-5">
                <div class="logo">
                    <img src="img/logo1.png" class="img">
                </div>
                <div class="location">
                    <h5>Our Location</h5>
                    <p>123 Coffee Street, Jakarta, Indonesia</p>
                </div>
                <div class="Info">
                    <h5>Contact Information</h5>
                    <p>Email: info@beanbliss.com</p>
                    <p>Phone: +62 123 456 7890</p>
                </div>
            </div>
            <div class="kelompok">
                <div class="row mt-4">
                    <hr /><br />
                    <div class="col-md-12">
                        <div class="text-left">
                            <h5>© 2024 Kelompok 2</h5>
                        </div>
                        <div class="anggota">
                            <div class="text-center flex-grow-1">
                                <p class="members">Nisaul Husna</p>
                                <p class="numbers">2210511055</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Adinda Rizki Sya'bana Diva</p>
                                <p class="numbers">2210511056</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Mahira Afifa Mulia</p>
                                <p class="numbers">2210511071</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Edwina Martha Putri</p>
                                <p class="numbers">2210511072</p>
                            </div>
                            <div class="text-right">
                                <a href="https://www.upnvj.ac.id/" target="_blank"><img src="img/upn.png" class="logo-upn"></a>
                            </div>
                        </div>
                    </div>
                </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>

</body>
</html>

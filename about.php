<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Bliss Reservation</title>

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
                <a class="navbar-brand me-auto" href="index.php"><img src="img/logo.png" alt="Logo"></a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" alt="Logo"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="menu.php">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="reservation.php">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="delivery.php">Delivery</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page"
                                    href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="footer-link" href="#footer">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="signin.php" class="Lightbtn" id="signin-button">Sign In</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- About -->
        <section class="aboutWelcome" id="aboutWelcome">
            <h1 class="welcome-heading">Welcome to Bean Bliss</h1>
            <p class="welcome-description">Indulge in the delightful experience of savoring freshly brewed coffee and
                <br>
                savoring delectable brunch dishes amidst a warm and inviting ambiance.
            </p>
        </section>

        <!-- About Us -->
        <section class="aboutUs" id="aboutUs">
            <div class="containerAboutUs">
                <div class="aboutUs-text">
                    <div class="heading">
                        <span>About Us</span>
                    </div>
                    <h2>Bean Bliss Coffee</h2>
                    <p>Our journey began with a simple passion: a love for exceptional coffee and a desire
                        to create a warm, welcoming space for our community. Founded in 2021, our mission has
                        always been to serve the highest quality coffee while fostering a sense of connection and
                        community.</p>
                    <p>We believe that great coffee starts with the finest beans. That’s why we source our beans from
                        sustainable farms around the world, ensuring that each cup is not only delicious but also
                        ethically produced. Our expert roasters carefully select and roast each batch to bring out the
                        unique flavors and aromas, offering a delightful experience with every sip.</p>
                </div>
                <div class="aboutUs-img">
                    <img src="img/about.jpeg" alt="about">
                </div>
            </div>
        </section>

        <!-- Banner -->
        <section class="banner" id="banner">
            <h1 class="banner-heading">Crafted with Care, Served with Passion</h1>
        </section>

        <!-- Our Location -->
        <section class="ourLocation" id="ourLocation">
            <div class="containerOurLocation">
                <div class="ourLocation-img">
                    <img src="img/about.png" alt="location">
                </div>
                <div class="ourLocation-text">
                    <div class="heading">
                        <span>Our Location</span>
                    </div>
                    <p>Located in the heart of the city, Bean Bliss Coffee is the perfect spot to take a break and enjoy
                        a delicious cup of coffee. Our cozy café offers a relaxing atmosphere, free Wi-Fi, and plenty of
                        seating for you to unwind or catch up with friends.</p>
                    <p>Come visit us at 123 Coffee Street jakarta and experience the warm, welcoming environment we've 
                        created just for you. We're open every day from 8 AM to 8 PM, ready to serve you the best coffee 
                        in town.</p>
                    <h2><a href="https://maps.app.goo.gl/SKy2Gu8K5JmMmrtg9" class="btn Lightbtn" target="_blank">Visit Us</a></h2>
                </div>
            </div>
        </section>


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
                                <a href="https://www.upnvj.ac.id/" target="_blank"><img src="img/upn.png"
                                        class="logo-upn">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="script.js"></script>
</body>

</html>
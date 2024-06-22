<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Bliss - Home</title>

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
                        <h5 class="offcanvas-title"  id="offcanvasNavbarLabel"><img src="img/logo.png" alt="Logo"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page" id="home-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="favorite-link" href="#menuInfoHome">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="reservation-link" href="#reservationInfoHome">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="delivery-link" href="#deliveryInfoHome">Delivery</a></li>
                        </ul>
                    </div>
                </div>
                <a href="logout.php" class="Lightbtn" id="signin-button">Sign Out</a>
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
                </div>
                <div class="home-img">
                    <img src="img/background1.png" alt="coffee">
                </div>
            </div>
            <div class="homeBox2"></div>
        </section>
    </div>

    <!-- Menu-Home -->
    <section class="menuInfoHome" id="menuInfoHome">
            <div class="containerInfoHome">
                <div class="infoHome-img">
                    <div id="carouselMenuHome" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/menuHome1.png" class="d-block w-100" alt="menuHome1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/menuHome2.png" class="d-block w-100" alt="menuHome2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/menuHome3.png" class="d-block w-100" alt="menuHome3">
                            </div>
                            <div class="carousel-item">
                                <img src="img/menuHome4.png" class="d-block w-100" alt="menuHome4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMenuHome" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMenuHome" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="infoHome-text">
                    <div class="heading">
                        <span>Menu</span>
                        <h1>Manage Menu</h1>
                    </div>
                    <p>Click here to update the menu, allowing you to add new items, edit existing descriptions, and ensure that all information is accurate and enticing for our customers.</p>
                    <a href="manageMenu.php" class="btn">Manage Menu</a>
                </div>
            </div>
        </section>

        <!-- Reservation-Home -->
        <section class="reservationInfoHome" id="reservationInfoHome">
            <div class="containerInfoHome">
                <div class="infoHome-text">
                    <div class="heading">
                        <span>Reservation</span>
                        <h1>View Reservation Table</h1>
                    </div>
                    <p>To ensure a smooth and organized dining experience for our guests, please click the button below to view the reservation table and manage upcoming bookings.</p>
                    <a href="booking.php" class="btn">View Reservation</a>
                </div>
                <div class="infoHome-img">
                    <div id="carouselReservationHome" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/indoor.png" class="d-block w-100" alt="indoor">
                            </div>
                            <div class="carousel-item">
                                <img src="img/outdoor.png" class="d-block w-100" alt="outdoor">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselReservationHome" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselReservationHome" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Delivery Home-->
        <section class="deliveryInfoHome" id="deliveryInfoHome">
            <div class="containerInfoHome">
                <div class="infoHome-img">
                    <img src="img/deliveryHome.png" alt="">
                </div>
                <div class="infoHome-text">
                    <div class="heading">
                        <span>Delivery</span>
                        <h1>View Delivery Orders</h1>
                    </div>
                    <p>To ensure timely and accurate deliveries for our customers, please click the button below to view all current delivery orders and manage them efficiently.</p>
                    <a href="orders.php" class="btn">View Orders</a>
                </div>
            </div>
        </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>

</body>
</html>

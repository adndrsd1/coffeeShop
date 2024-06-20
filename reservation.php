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
                <a class="navbar-brand me-auto" href="index.html"><img src="img/logo.png" alt="Logo"></a>
        
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" alt="Logo"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link max-lg-2" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="menu.html">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page" href="#reservation">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="delivery.php">Delivery</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="home.html">About</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="contact-link" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <a href="signin.php" class="Lightbtn" id="signin-button">Sign In</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Reservation Section -->
        <section class="reservation" id="reservation">
            <div class="container my-5">
                <h2 class="text-center mb-4">Table Reservation</h2>
                <form action="reservationController.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="fullName" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Reservation Date</label>
                        <input type="date" class="form-control" id="date" name="reservationDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Reservation Time</label>
                        <select id="time" name="reservationTime" required>
                            <option selected="">Select time</option>
                            <option value="10.00-11.00">10.00-11.00</option>
                            <option value="11.00-12.00">11.00-12.00</option>
                            <option value="12.00-13.00">12.00-13.00</option>
                            <option value="13.00-14.00">13.00-14.00</option>
                            <option value="14.00-15.00">14.00-15.00</option>
                            <option value="15.00-16.00">15.00-16.00</option>
                            <option value="16.00-17.00">16.00-17.00</option>
                            <option value="17.00-18.00">17.00-18.00</option>
                            <option value="18.00-19.00">18.00-19.00</option>
                            <option value="19.00-20.00">19.00-20.00</option>
                            <option value="20.00-21.00">20.00-21.00</option>
                            <option value="21.00-22.00">21.00-22.00</option>
                            <option value="22.00-23.00">22.00-23.00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="guests" class="form-label">Number of Guests</label>
                        <input type="number" class="form-control" id="guests" name="amountGuest" required>
                    </div>
                    <div class="mb-3">
                        <label for="specialRequests" class="form-label">Special Requests</label>
                        <textarea class="form-control" id="specialRequests" name="specialReq" rows="3" placeholder="e.g., indoor/outdoor seating, high chair, etc."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit Reservation</button>
                </form>
            </div>
        </section>
        
        <!-- Contact Section -->
        <section class="contact" id="contact">
            <div class="container my-5">
                <h2 class="text-center mb-4">Contact Us</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Our Location</h5>
                        <p>123 Coffee Street, Jakarta, Indonesia</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Contact Information</h5>
                        <p>Email: info@beanbliss.com</p>
                        <p>Phone: +62 123 456 7890</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>
</html>

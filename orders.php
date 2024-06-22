<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Bliss - Order</title>

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
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="home-link" href="homeAdmin.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="favorite-link" href="manageMenu.php">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="reservation-link" href="booking.php">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page" id="delivery-link" href="orders.php">Delivery</a></li>
                        </ul>
                    </div>
                </div>
                <a href="logout.php" class="Lightbtn" id="signin-button">Sign Out</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>

    <!-- View Bookings -->
    <section class="homeAdmin" id="homeAdmin">
        <div class="container my-5">
            <h2 class="text-center mb-4">Orders</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Kode Pesanan</th>
                        <th scope="col">Kode Menu</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require 'config.php';

                        $query = "SELECT * FROM pesan";
                        $result = $con->query($query);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['kodePesanan'] . "</td>";
                                echo "<td>" . $row['kodeMenu'] . "</td>";
                                echo "<td>" . $row['nama'] . "</td>";
                                echo "<td>" . $row['jumlah'] . "</td>";
                                echo "<td>" . $row['harga'] . "</td>";
                                echo "<td>" . $row['totalHarga'] . "</td>";
                                echo "<td><a href='deleteOrder.php?id=" . $row['id'] . "' class='Lightbtn'>Delete</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No orders found</td></tr>";
                        }
                        $con->close();
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>

</body>
</html>
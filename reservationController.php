<?php
include "config.php";

$data = $_POST;
global $con;
$fullName = htmlspecialchars($data["fullName"]);
$email = htmlspecialchars($data["email"]);
$phone = htmlspecialchars($data["phone"]);
$reservationDate = date('Y-m-d', strtotime($data["reservationDate"]));
$reservationTime = date('H:i', strtotime($data["reservationTime"]));
$amountGuest = htmlspecialchars($data["amountGuest"]);
$specialReq = htmlspecialchars($data["specialReq"]);
?>


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
                </div>
                <a href="index.html" class="Lightbtn" id="signin-button">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Reservation Section -->
        <section class="reservation" id="reservation">
            <div class="container my-5">
                <?php
                    $query = "INSERT INTO reservasi
                                (fullName, email, phoneNumber, jumlahTamu, tanggalReservasi, waktuReservasi, specialReq)
                                VALUES
                            ('$fullName', '$email', '$phone', '$amountGuest', '$reservationDate', '$reservationTime', '$specialReq')
                            ";

                    if(mysqli_query($con, $query)) {
                        echo "<div class='alert alert-success' role='alert'>Reservation Succesfully!</div>";
                    } else {
                        echo "
                            <script>
                                alert('data gagal ditambahkan!');
                                document.location.href = '../index.php';
                            </script>
                        ";
                    }
                ?>
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

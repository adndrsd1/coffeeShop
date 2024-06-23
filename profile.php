<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header('Location: signin.php');
    exit;
}

$username = $_SESSION['username'];
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
$address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body class="left">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="index.html"><img src="img/logo.png" alt="Bean Bliss Logo"></a>
        </div>
    </nav>

    <div class="profileContainer">
        <div class="container mt-4">
            <div class="input-group mb-3 justify-content-start">
                <button type="button" class="btn btn-secondary" onclick="history.back()"><i class="fas fa-arrow-left"></i> Back</button>
            </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">

                <!---form---> 
                <div class="col-md-12 right-box">
                    <form class="profileForm" id="profileForm" action="logout.php" method="post">
                        <div class="row align-items-center">
                          <div class="header-text mb-4">
                            <div class="heading">
                              <span><i class="fas fa-user"></i> Profile</span>
                            </div>
                          </div>
                          <p>Username</p>
                          <div class="input-group mb-2">
                            <span class="form-control form-control-lg bg-light fs-6" id="username"><?php echo htmlspecialchars($username); ?></span>
                          </div>
                          <p>Email</p>
                          <div class="input-group mb-2">
                            <span class="form-control form-control-lg bg-light fs-6" id="email"><?php echo htmlspecialchars($email); ?></span>
                          </div>
                          <p>Full Name</p>
                          <div class="input-group mb-2">
                            <span class="form-control form-control-lg bg-light fs-6" id="fullname"><?php echo htmlspecialchars($fullname); ?></span>
                          </div>
                          <p>Phone Number</p>
                          <div class="input-group mb-2">
                            <span class="form-control form-control-lg bg-light fs-6" id="phone"><?php echo htmlspecialchars($phone); ?></span>
                          </div>
                          <p>Address Information</p>
                          <div class="input-group mb-3">
                            <span class="form-control form-control-lg bg-light fs-6" id="address"><?php echo htmlspecialchars($address); ?></span>
                          </div>
                          <div class="input-group mb-3">
                            <button type="button" class="btn w-30" id="update-button"><i class="fas fa-edit"></i> Update Information</button>
                          </div>
                          <div class="input-group mb-3 justify-content-end">
                            <button type="submit" class="btn btn-lg w-30 fs-6 Lightbtn end" id="logout-button"><i class="fas fa-sign-out-alt"></i>Log-out</button>
                          </div>
                        </div>
                      </form>                      
                </div> 
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
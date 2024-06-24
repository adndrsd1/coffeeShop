<?php
session_start();
include 'config.php';

if (!isset($_SESSION['id'])) {
    header('Location: signin.php');
    exit;
}

$id = $_SESSION['id'];
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
$address = isset($_SESSION['address']) ? $_SESSION['address'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "UPDATE users SET username='$username', email='$email', fullname='$fullname', phone='$phone', address='$address' WHERE id='$id'";

    if (mysqli_query($con, $query)) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $address;

        header('Location: profile.php');
        exit;
    } else {
        $updateError = 'Failed to update profile. Please try again.';
    }
}
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
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

                <!--form profil-->
                <div class="col-md-12 right-box">
                    <form class="profileForm" id="profileForm" action="profile.php" method="post">
                        <div class="row align-items-center">
                            <div class="header-text mb-4">
                                <div class="heading">
                                    <span><i class="fas fa-user"></i> Profile</span>
                                </div>
                            </div>
                            <p>Username</p>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                            </div>
                            <p>Email</p>
                            <div class="input-group mb-2">
                                <input type="email" class="form-control form-control-lg bg-light fs-6 editable" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                            </div>
                            <p>Full Name</p>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control form-control-lg bg-light fs-6 editable" id="fullname" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>" required>
                            </div>
                            <p>Phone Number</p>
                            <div class="input-group mb-2">
                                <input type="tel" class="form-control form-control-lg bg-light fs-6 editable" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                            </div>
                            <p>Address Information</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6 editable" id="address" name="address" value="<?php echo htmlspecialchars($address); ?>" required>
                            </div>
                            <?php if (isset($updateError)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $updateError; ?>
                                </div>
                            <?php endif; ?>
                            <div class="input-group mb-3">
                                <button type="submit" class="btn w-30"><i class="fas fa-save"></i> Save Information</button>
                            </div>
                            <div class="input-group mb-3 justify-content-end">
                                <a button type="button" class="btn btn-lg w-30 fs-6 Lightbtn end ml-2" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out </button></a>
                            </div>
                        </div>
                    </form>                      
                </div> 
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

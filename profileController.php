<?php
include "config.php";
session_start();

if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $updatequery = mysqli_query($con, "UPDATE users SET fullname = '$fullname', phone = '$phone', address = '$address' WHERE username = '$username'");

    if ($updatequery) {
        $_SESSION['fullname'] = $fullname;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $address;

        header('Location: signin.php');

        exit;
    } else {
        echo "Failed to update profile. Error: " . mysqli_error($con);
    }
}
?>

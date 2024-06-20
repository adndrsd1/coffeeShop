<?php

include 'config.php';
include 'menuController.php';

$id = $_GET['id'];

if(deleteBooking($id) > 0) {
    header("Location: booking.php");
} else {
    echo "Gagal menghapus data!";
}

?>
<?php

include 'config.php';
include 'menuController.php';

$id = $_GET['id'];

if(deleteOrder($id) > 0) {
    header("Location: orders.php");
} else {
    echo "Gagal menghapus data!";
}

?>
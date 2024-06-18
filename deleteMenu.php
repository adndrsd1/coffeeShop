<?php

include 'config.php';
include 'menuController.php';

$id = $_GET['idMenu'];

if(deleteMenu($id) > 0) {
    header("Location: manageMenu.php");
} else {
    echo "Gagal menghapus data!";
}

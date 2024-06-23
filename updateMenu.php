<?php

include 'config.php';
include 'menuController.php';


if(updateMenu($_POST)) {
    header("Location: manageMenu.php");    
} else {
    echo "Gagal mengupdate data!";
}
?>
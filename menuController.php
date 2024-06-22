<?php

include 'config.php';

if(isset($_POST['submit'])){
    $kategori = $_POST['kategori'];
    $namaMenu = $_POST['namaMenu'];
    $harga = $_POST['harga'];

    $gambar = uploadImage();
    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO daftar_menu (kategori, gambar, namaMenu, harga) VALUES 
            ('$kategori', '$gambar', '$namaMenu', '$harga')";
    mysqli_query($con, $query);

    header("Location: manageMenu.php");
}

function uploadImage() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    
    if($error === 4) {
        echo "<div class='alert alert-danger' role='alert'>Pilih gambar terlebih dahulu!</div>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $_FILES['gambar']['name']);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('File yang diupload bukan gambar!');
            </script>";
        return false;
    }

    if($ukuranFile > 1000000) {
        echo "<div class='alert alert-danger' role='alert'>Ukuran file terlalu besar!</div>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

function updateMenu($data) {
    global $con;

    $id = $data["idMenu"];
    $kategori = htmlspecialchars($data["kategori"]);
    $namaMenu = htmlspecialchars($data["namaMenu"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambar"]);

    // check if user upload new image
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadImage();
    }

    // query update data
    $query = "UPDATE daftar_menu SET
                kategori = '$kategori',
                gambar = '$gambar',
                namaMenu = '$namaMenu',
                harga = '$harga'
            WHERE idMenu = $id
            ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function deleteMenu($id) {
    global $con;
    mysqli_query($con, "DELETE FROM daftar_menu WHERE idMenu = $id");
    return mysqli_affected_rows($con);
}

function deleteBooking($id) {
    global $con;
    mysqli_query($con, "DELETE FROM reservasi WHERE id = $id");
    return mysqli_affected_rows($con);
}

function deleteOrder($id) {
    global $con;
    mysqli_query($con, "DELETE FROM pesan WHERE id = $id");
    return mysqli_affected_rows($con);
}
?>
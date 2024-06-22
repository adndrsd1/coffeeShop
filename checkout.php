<?php
include 'config.php';
session_start();

$data = json_decode(file_get_contents("php://input"));
$orderCode = $data->orderCode;
$orderDetails = $data->orderDetails;

foreach ($orderDetails as $orderItem) {
    $title = $orderItem->title;
    $price = floatval($orderItem->price);
    $quantity = $orderItem->quantity;
    $subtotalAmount = floatval($orderItem->subtotal_amount);

    $menuQuery = "SELECT idMenu, stok, harga FROM daftar_menu WHERE namaMenu = '$title'";
    $menuResult = mysqli_query($con, $menuQuery);
    $menu = mysqli_fetch_assoc($menuResult);

    if ($menu) {
        $idMenu = $menu['idMenu'];
        $stok = $menu['stok'];
        $menuPrice = $menu['harga'];

        if ($stok >= $quantity) {
            $totalHarga = $menuPrice * $quantity;

            // Masukkan data ke tabel pesan
            $insertQuery = "INSERT INTO pesan (kodePesanan, kodeMenu, nama, jumlah, harga, totalHarga) VALUES ('$orderCode', '$idMenu', '$title', '$quantity', '$menuPrice', '$totalHarga')";
            $resultInsert = mysqli_query($con, $insertQuery);

            if ($resultInsert) {
                // Kurangi stok di tabel daftar_menu
                $newStok = $stok - $quantity;
                $updateStokQuery = "UPDATE daftar_menu SET stok = '$newStok' WHERE idMenu = '$idMenu'";
                $resultUpdateStok = mysqli_query($con, $updateStokQuery);

                if (!$resultUpdateStok) {
                    echo json_encode(['status' => 'error', 'message' => 'Gagal mengupdate stok menu: ' . $title]);
                    exit;
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan pesanan untuk menu: ' . $title]);
                exit;
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Stok tidak cukup untuk menu: ' . $title]);
            exit;
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Menu tidak ditemukan: ' . $title]);
        exit;
    }
}

echo json_encode(['status' => 'success', 'message' => 'Pesanan berhasil']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Bliss - Home</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-auto" href="#"><img src="img/logo.png" alt="Logo"></a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" alt="Logo"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="home-link" href="homeAdmin.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page" id="favorite-link" href="manageMenu.php">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="reservation-link" href="booking.php">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="delivery-link" href="orders.php">Delivery</a></li>
                        </ul>
                    </div>
                </div>
                <a href="logout.php" class="Lightbtn" id="signin-button">Sign Out</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>

    <!-- View Menu -->
    <section class="homeAdmin" id="homeAdmin">
        <div class="container my-5">
            <h2 class="text-center mb-4 text-4xl">Menu</h2>
            <!-- <a href="tambahMenu.php" class="btn btn-primary mb-3">+ Tambah Menu</a> -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-[#A79277] hover:bg-[#74512D] focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2" type="button">
                + Tambah Menu
            </button>

            <!-- Main modal for add menu -->
            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#D1BB9E] rounded-lg shadow dark:bg-[#D1BB9E]">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New Product
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="menuController.php" class="p-4 md:p-5" method="post" enctype="multipart/form-data">
                            <div class="grid gap-4 mb-2 grid-cols-2">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" name="kategori" class="bg-white border border-gray-300 text-[#74512D] text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option selected="">Select category</option>
                                        <option value="Hot Coffee">Hot Coffee</option>
                                        <option value="Iced Coffee">Iced Coffee</option>
                                        <option value="Pastries">Pastries</option>
                                        <option value="Snacks">Snacks</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                                    <input type="file" name="gambar" id="gambar" class="bg-white border border-gray-300 text-[#74512D] text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required="">
                                </div>
                                <div class="col-span-2">
                                    <label for="namaMenu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Menu</label>
                                    <input type="text" name="namaMenu" id="namaMenu" class="bg-white border border-gray-300 text-[#74512D] text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Nama Menu" required="">
                                </div>
                                <div class="col-span-2">
                                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                    <input type="text" name="harga" id="harga" class="bg-white border border-gray-300 text-[#74512D] text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Rp 20.000" required="">
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <button type="submit" name="submit" class="text-[#74512D] inline-flex items-center bg-[#FFF2E1] hover:bg-[#A79277] focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-3 py-2.5 text-center">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    Add new product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Kategori</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Harga (Rp)</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';
                    $query = "SELECT * FROM daftar_menu";
                    $result = mysqli_query($con, $query);

                    if (mysqli_num_rows($result) > 0)
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['kategori'] ?></td>
                            <td><img src="img/<?php echo $row['gambar'] ?>" alt="Menu" class="w-[125px] h-[125px]"></td>
                            <td><?php echo $row['namaMenu'] ?></td>
                            <td><?php echo $row['harga'] ?></td>
                            <td class="flex flex-row h-[150px] border-0 justify-center">
                                <div>
                                    <!-- <button class="btn Lightbtn">Update</button> -->
                                    <button data-modal-target="update-modal-<?php echo $row['idMenu']; ?>" data-modal-toggle="update-modal-<?php echo $row['idMenu']; ?>" class="btn Lightbtn" type="button">
                                        Update
                                    </button>
                                </div>

                                <!-- Main modal for add menu -->
                                <div id="update-modal-<?php echo $row['idMenu']; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-[#D1BB9E] rounded-lg shadow dark:bg-[#D1BB9E]">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Update Product
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="update-modal-<?php echo $row['idMenu']; ?>">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <form action="updateMenu.php" class="p-4 md:p-5" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="idMenu" value="<?php echo $row['idMenu'] ?>">
                                                <input type="hidden" name="gambarLama" value="<?php echo $row['gambar'] ?>">
                                                <div class="grid gap-4 mb-2 grid-cols-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                        <select id="category" name="kategori" class="bg-white border border-gray-300 text-[#74512D] text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                            <option value="Hot Coffee" <?php if ($row['kategori'] == "Hot Coffee") echo "selected"; ?>>Hot Coffee</option>
                                                            <option value="Iced Coffee" <?php if ($row['kategori'] == "Iced Coffee") echo "selected"; ?>>Iced Coffee</option>
                                                            <option value="Pastries" <?php if ($row['kategori'] == "Pastries") echo "selected"; ?>>Pastries</option>
                                                            <option value="Snacks" <?php if ($row['kategori'] == "Snacks") echo "selected"; ?>>Snacks</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                                                        <input type="file" name="gambar" id="gambar" class="bg-white border border-gray-300 text-[#74512D] text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                        <img src="img/<?php echo $row['gambar']; ?>" alt="Menu" class="mt-2 w-[125px] h-[125px]">
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="namaMenu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Menu</label>
                                                        <input type="text" name="namaMenu" id="namaMenu" value="<?php echo $row['namaMenu']; ?>" class="bg-white border border-gray-300 text-[#74512D] text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Nama Menu" required="">
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                                        <input type="text" name="harga" id="harga" value="<?php echo $row['harga']; ?>" class="bg-white border border-gray-300 text-[#74512D] text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Rp 20.000" required="">
                                                    </div>
                                                </div>
                                                <div class="flex justify-center items-center">
                                                    <button type="submit" name="update" class="text-[#74512D] inline-flex items-center bg-[#FFF2E1] hover:bg-[#A79277] focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-3 py-2.5 text-center">
                                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Update product
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <form action="deleteMenu.php" method="get">
                                    <input type="hidden" name="idMenu" value="<?php echo $row['idMenu'] ?>">
                                    <button class="btn Lightbtn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                        }
                    else {
                        echo "<tr><td colspan='5'>No data found!</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>

</body>

</html>
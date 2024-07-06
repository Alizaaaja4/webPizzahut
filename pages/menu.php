<?php
// Koneksi ke functions.php
require '../constant/functions.php';

// Mengambil data produk dari database
$products = getProducts();

// Jika tombol search diklik
if (isset($_POST["cari"])) {
    $products = searchData($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <title>Demo Academy24</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/welcome.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<body>
    <!-- Header -->
    <header class="bg-darkColor fixed top-0 left-0 w-full z-50">
        <!-- navbar -->
        <nav class="container relative h-14 flex justify-between items-center mb-4">
            <div>
                <a href="#" class="text-2xl uppercase font-oswald">Pizza<span class="text-primaryColor">Hut</span></a>
            </div>
            <div class="hidden absolute bg-darkColor top-0 left-0 w-full py-14 border-b border-primaryColor md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
                <ul class="flex flex-col text-center pt-4 gap-7 md:flex-row">
                    <li>
                        <a href="../index.php" class="nav__link hover:text-primaryColor hover:border-b hover:border-primaryColor ease-in duration-200">Home</a>
                    </li>
                    <li>
                        <a href="./pages/menu.php" class="nav__link hover:text-primaryColor hover:border-b hover:border-primaryColor duration-200">Menu</a>
                    </li>
                    <li>
                        <a href="../components/login.php" class="bg-primaryColor rounded-md p-2 text-darkColor max-w-[170px] mx-auto hover:bg-transparent hover:border-primaryColor hover:border hover:text-primaryColor">
                            Sign Up/ Login
                        </a>
                    </li>
                </ul>
                <div class="absolute top-[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="md:hidden" id="hamburger">
                <i class="ri-menu-2-line cursor-pointer text-xl"></i>
            </div>
        </nav>
    </header>

    <!-- Menu -->
    <section id="menu" class="mt-2">
        <div class="container">
            <div class="max-w-xl mx-auto text-center">
                <h2 class="section__title">OUR BEST MENU</h2>
                <div class="separator mx-auto"></div>
                <p class="paragraph">Find your favorite food with ease! Use the search box below to search for our specials or browse popular categories like pizza, pasta and desserts. Simply type in the name of the food or category you want and let us find the best one for you.</p>
                <div class="mt-5">
                    <form action="" method="post" class="flex justify-center items-center">
                        <input type="text" name="keyword" size="50" autofocus placeholder="Enter keywords menu" autofocus autocomplete="off" class="p-2 border border-gray-300 bg-darkColor rounded-l-md focus:outline-none focus:ring-2 focus:ring-primaryColor">
                        <button type="submit" name="cari" class="p-2 bg-primaryColor text-darkColor hover:font-semibold rounded-r-md hover:bg-primaryColor-dark">Search</button>
                    </form>
                </div>
                <div class="grid grid-cols-3 gap-4 mt-10">
                    <?php foreach ($products as $product) : ?>
                        <div class="bg-darkColorLight p-4 pt-6 rounded-lg shadow-md flex flex-col items-center justify-center text-center hover:border-primaryColor hover:border">
                            <img src="../assets/img/<?= $product["image"]; ?>" class="w-20 h-20 rounded-full mb-2 hover:animate-movingY" alt="Product Image">
                            <div>
                                <h3 class="text-lg font-semibold"><?= $product["name"]; ?></h3>
                                <p class="text-gray-600 mb-2"><?= $product["category"]; ?></p>
                                <p class="text-green-500 font-bold"><?= "$" . number_format($product["price"], 2); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-darkColor text-white py-4">
        <section class="footer container mx-auto text-center px-4">
            <p class="mb-2 text-sm md:text-base">Created by Aliza Nurfitrian Meizahra (ALL)</p>
            <p class="mb-2 text-sm md:text-base">This is a demo website for Academy 2024</p>
            <a href="https://www.linkedin.com/in/alizaaaja" target="_blank" class="text-primaryColor hover:underline text-sm md:text-base">
                Connect with me on LinkedIn
            </a>
        </section>
    </footer>

    <!-- Main.js -->
    <script src="../constant/main.js"></script>
</body>
</html>

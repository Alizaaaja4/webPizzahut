<?php

session_start();

if( !isset($_SESSION["login"])){
    header("Location: ../components/login.php");
    exit;
}

// Koneksi ke functions.php
require '../constant/functions.php';

// Mengambil data produk dari database
$products = query("SELECT * FROM products");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Academy24 - Admin Panel</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="bg-darkColor min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-darkColorLight text-primaryColor py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl font-bold">Admin Panel</h1>
            <a href="../components/logout.php" class="text-whiteColor bg-redColor hover:bg-red-900 px-4 py-2 rounded-md">Logout</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto flex-grow px-4 py-8">
        <div class="bg-darkColor p-6 rounded-lg shadow-md">
            
            <!-- Add Data Button -->
            <div class="mb-4 text-left">
                <a href="../components/addData.php" class="bg-primaryColor text-darkColor px-4 py-2 rounded-lg hover:bg-yellow-600">Add Data</a>
            </div>

            <!-- Data Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-darkColor text-center">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">ID</th>
                            <th class="py-2 px-4 border-b">Image</th>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Category</th>
                            <th class="py-2 px-4 border-b">Price</th>
                            <th class="py-2 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($products as $product) : ?>
                        <tr>
                            <td class="py-2 px-4 border-b"><?= $i; ?></td>
                            <td class="py-2 px-4 border-b">
                                <img src="../assets/img/<?= $product["image"]; ?>" width="80">
                            </td>

                            <td class="py-2 px-4 border-b"><?= $product["name"]; ?></td>
                            <td class="py-2 px-4 border-b"><?= $product["category"]; ?></td>
                            <td class="py-2 px-4 border-b"><?= $product["price"]; ?></td>
                            <td class="py-2 px-4 border-b">
                                <a class="bg-greenColor text-whiteColor px-2 py-1 rounded hover:bg-green-600" href="../components/editData.php?id=<?= $product["id"]; ?>">Edit</a>
                                <a class="bg-redColor text-whiteColor px-2 py-1 rounded hover:bg-red-600" href="../components/delateData.php?id=<?= $product["id"]; ?>" onclick="return confirm('YAKIN ?');">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-darkColor text-whiteColor py-4">
        <div class="container mx-auto text-center">
            <p>Created by Aliza Nurfitrian Meizahra (ALL) - <span class="text-primaryColor">Demo Academy24</span></p>
            <a href="https://www.linkedin.com/in/alizaaaja" target="_blank" class="text-primaryColor hover:underline text-sm md:text-base">
                Connect with me on LinkedIn
            </a>
        </div>
    </footer>

</body>
</html>

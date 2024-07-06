<?php
// Koneksi ke functions.php
require '../constant/functions.php';

// Mengambil data produk dari database
$products = getProducts();

// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan ID
$product = getProducts("SELECT * FROM products WHERE id = $id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di edit atau tidak
    if(editData($_POST) > 0){
        echo "
            <script>
                alert('data berhasil di edit');
                document.location.href = '../pages/admin.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data gagal di edit');
                document.location.href = '../pages/admin.php';
            </script>
        ";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Academy24 - Edit Data</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="bg-darkColor min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-darkColorLight text-primaryColor py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl font-bold">Edit Data</h1>
            <a href="../pages/admin.php" class="text-whiteColor bg-redColor hover:bg-red-900 px-4 py-2 rounded-md">Back to Admin</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto flex-grow px-4 py-8">
        <div class="bg-darkColorLight p-6 rounded-lg shadow-md max-w-lg mx-auto">
            <h2 class="text-2xl font-bold text-whiteColor mb-6">Edit Existing Data</h2>
            
            <form action="" method="post" enctype="multipart/form-data">
                <input type = "hidden" name="id" value="<?= $product["id"]; ?>"> 
                <input type = "hidden" name="gambarLama" value="<?= $product["image"]; ?>"> 

                <div class="mb-4">
                    <label for="name" class="block text-left text-primaryColor">Name:</label>
                    <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-primaryColor bg-darkColorLight rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor" required value="<?= $product["name"]; ?>">
                </div>
                <div class="mb-4">
                    <label for="category" class="block text-left text-primaryColor">Category:</label>
                    <input type="text" name="category" id="category" class="w-full px-3 py-2 border border-primaryColor bg-darkColorLight rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor" required value="<?= $product["category"]; ?>">
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-left text-primaryColor">Price:</label>
                    <input type="text" name="price" id="price" class="w-full px-3 py-2 border border-primaryColor bg-darkColorLight rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor" required value="<?= $product["price"]; ?>">
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-left text-primaryColor mb-2">Image:</label>
                    <img src="../assets/img/<?= $product['image']; ?>" width="50" class="mb-4">
                    <input type="file" name="image" id="image" class="w-full px-3 py-2 border border-primaryColor bg-darkColorLight rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor">
                </div>
                <div class="mb-4">
                    <button type="submit" name="submit" class="w-full px-3 py-2 bg-primaryColor text-darkColor rounded-lg hover:bg-yellow-600">Add Data</button>
                </div>
            </form>
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

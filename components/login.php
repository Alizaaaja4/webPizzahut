<?php
session_start();

// Koneksi ke functions.php
require '../constant/functions.php';

// cek cookie
if(isset ($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM admins WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header("Location: ../pages/admin.php");
    exit;
}

// cek apakah tombol submit, sudah diklik apa belum
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admins WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1){
        // cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if(isset($_POST['remember'])){
                // buat cookie
                setcookie('id', $row['id'], time()+60);
                // enkripsi
                setcookie('key', hash('sha256', $row['username']), time() + 60);
                // setcookie('login', 'true', time() + 60);
            }

            header("Location: ../pages/admin.php");
            exit;
        }   
    }

    $error = true;
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
    <!-- login start -->
    <div class="container mt-24">
        <div class="max-w-md mx-auto text-center">
            <h2 class="section__title">LOGIN ADMIN</h2>

            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic; margin-top:10px;">username/ password salah!!</p>
            <?php endif; ?>

            <div class="border border-primaryColor mt-7 p-5 rounded-lg shadow-lg">
                <form action="" method="post">
                    <div class="mb-4">
                        <label for="username" class="block text-left text-primaryColor">Username:</label>
                        <input type="text" name="username" id="username" class="w-full px-3 py-2 border rounded-lg bg-darkColorLight focus:outline-none focus:ring-primaryColor focus:border-primaryColor">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-left text-primaryColor">Password:</label>
                        <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-lg bg-darkColorLight focus:outline-none focus:ring-primaryColor focus:border-primaryColor">
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember" class="text-gray-700">Remember me</label>
                    </div>
                    <div class="mb-4">
                        <button type="submit" name="login" class="w-full px-3 py-2 bg-primaryColor text-white rounded-lg hover:bg-primaryColor-dark">Login</button>
                    </div>
                </form>
                <p class="text-gray-700 mt-4">Don't have an account? <a href="./regis.php" class="text-primaryColor hover:underline">Register here</a></p>
            </div>
        </div>
    </div>

    <!-- Main.js -->
    <script src="../constant/main.js"></script>
</body>
</html>

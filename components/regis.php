<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <title>Demo Academy24 - Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/welcome.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<body class="flex flex-col min-h-screen">
    <!-- Register start -->
    <div class="flex-grow container mt-12 mb-8">
        <div class="max-w-md mx-auto text-center">
            <h2 class="section__title">Registration</h2>
            <div class="border border-primaryColor mt-7 p-5 rounded-lg shadow-lg">
                <form action="" method="post">
                    <div class="mb-4">
                        <label for="username" class="block text-left text-gray-700">Username:</label>
                        <input type="text" name="username" id="username" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-left text-gray-700">Password:</label>
                        <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor">
                    </div>
                    <div class="mb-4">
                        <label for="password2" class="block text-left text-gray-700">Password Confirmation:</label>
                        <input type="password" name="password2" id="password2" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor">
                    </div>
                    <div class="mb-4">
                        <button type="submit" name="register" class="w-full px-3 py-2 bg-primaryColor text-white rounded-lg hover:bg-primaryColor-dark">Register</button>
                    </div>
                </form>
                <p class="text-gray-700 mt-4">Already have an account? <a href="./login.php" class="text-primaryColor hover:underline">Login here</a></p>
            </div>
        </div>
    </div>

    <!-- Main.js -->
    <script src="../constant/main.js"></script>
</body>
</html>

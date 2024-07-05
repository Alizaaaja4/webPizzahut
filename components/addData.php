<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Academy24 - Add Data</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="bg-darkColor min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-darkColorLight text-primaryColor py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl font-bold">Admin Panel</h1>
            <a href="../pages/admin.php" class="text-whiteColor bg-redColor hover:bg-red-900 px-4 py-2 rounded-md">Back to Admin</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto flex-grow px-4 py-8">
        <div class="bg-darkColorLight p-6 rounded-lg shadow-md max-w-lg mx-auto">
            <h2 class="text-2xl font-bold text-whiteColor mb-6">Add New Data</h2>
            
            <form action="" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-left text-primaryColor">Name:</label>
                    <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-primaryColor rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-left text-primaryColor">Email:</label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-primaryColor rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor" required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-left text-primaryColor">Role:</label>
                    <input type="text" name="role" id="role" class="w-full px-3 py-2 border border-primaryColor rounded-lg focus:outline-none focus:ring-primaryColor focus:border-primaryColor" required>
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

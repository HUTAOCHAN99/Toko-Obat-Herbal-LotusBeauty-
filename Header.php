<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-8 flex justify-between items-center">
        <!-- Left Side (Logo + Menu) -->
        <div class="flex items-center space-x-8">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="path_to_logo.png" alt="Herbilogy" class="h-8 mr-2"> <!-- Ganti dengan logo yang benar -->
                <span class="text-green-900 font-semibold text-xl">Herbilogy</span>
            </div>

            <!-- Main Menu (Hidden on Mobile) -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-green-900 hover:font-bold">Home</a>
                <a href="#" class="text-green-900 hover:font-bold">Products</a>
                <a href="#" class="text-green-900 hover:font-bold">Our Story</a>
                <a href="#" class="text-green-900 hover:font-bold">Bulk Purchase</a>
                <a href="#" class="text-green-900 hover:font-bold">Inspirations</a>
                <a href="#" class="text-green-900 hover:font-bold">FAQ</a>
                <a href="#" class="text-green-900 hover:font-bold">EN | ID</a>
            </div>
        </div>

        <!-- Right Side (Icons) -->
        <div class="flex items-center space-x-6">
            <button class="text-green-900 hover:text-black">
                <i class="ri-user-line ri-lg"></i>
            </button>

            <button class="text-green-900 hover:text-black">
                <i class="ri-shopping-bag-line ri-lg"></i>
            </button>

            <button class="text-green-900 hover:text-black">
                <i class="ri-search-line ri-lg"></i>
            </button>

            <!-- Mobile Menu Icon (only visible on mobile) -->
            <button class="block md:hidden text-green-900 hover:text-black">
                <i class="ri-menu-line ri-lg"></i>
            </button>
        </div>
    </nav>
</body>

</html>

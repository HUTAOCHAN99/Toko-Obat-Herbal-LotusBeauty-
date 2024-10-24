<!-- Home all show -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
</head>

<body class="bg-gray-100">
    <!-- Top Section -->
    <?php
    include('Header.php');
    ?>
    <header class="bg-blue-500 p-4">
        <div class="text-white mb-4">
            <h2 class="text-2xl font-bold">Shop & Win Labubu Lucky Draw</h2>
            <p>Periode: 18 Oktober - 18 November 2024</p>
            <button class="mt-2 px-4 py-2 bg-orange-500 rounded-full text-white">Lihat Semua</button>
        </div>

        <!-- Carousel Section with PHP -->
        <div class="swiper-container m-auto max-w-4xl rounded-lg shadow-lg overflow-hidden">
            <div class="swiper-wrapper">
                <?php
                // Folder tempat gambar disimpan
                $directory = "src/images/carousel/"; // Sesuaikan dengan direktori Anda
                $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

                // Loop melalui semua gambar dan buat elemen swiper-slide
                foreach ($images as $image) {
                    echo '<div class="swiper-slide">';
                    echo '<img src="' . $image . '" alt="Gambar Promo" class="w-full h-auto object-cover rounded-lg">';
                    echo '</div>';
                }
                ?>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next text-white bg-black bg-opacity-50 p-2 rounded-full right-0 absolute z-10">
            </div>
            <div class="swiper-button-prev text-white bg-black bg-opacity-50 p-2 rounded-full left-0 absolute z-10">
            </div>

            <!-- Add Pagination if needed -->
            <div class="swiper-pagination"></div>
        </div>
    </header>



    <!-- Icon Grid Section -->
    <section class="grid grid-cols-4 gap-4 p-4">
        <div class="flex flex-col items-center">
            <i class="ri-file-upload-line text-3xl text-blue-500"></i>
            <p class="text-sm text-gray-700 mt-2">Upload Resep</p>
        </div>
        <div class="flex flex-col items-center">
            <a href="Recipe.php"><i class="ri-file-text-line text-3xl text-blue-500"></i></a>
            <p class="text-sm text-gray-700 mt-2">Obat Resep</p>
        </div>
        <div class="flex flex-col items-center">
            <a href="Product_Page.php"><i class="ri-capsule-line text-3xl text-blue-500"></i></a>
            <p class="text-sm text-gray-700 mt-2">Obat Bebas (OTC)</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="ri-virus-line text-3xl text-blue-500"></i>
            <p class="text-sm text-gray-700 mt-2">Covid Related</p>
        </div>
        <div class="flex flex-col items-center"><a href="">
                <i class="ri-vip-diamond-line text-3xl text-blue-500"></i></a>
            <p class="text-sm text-gray-700 mt-2">Vitamin Supplement</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="ri-shield-user-line text-3xl text-blue-500"></i>
            <p class="text-sm text-gray-700 mt-2">Personal Care</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="ri-heart-pulse-line text-3xl text-blue-500"></i>
            <p class="text-sm text-gray-700 mt-2">Beauty & Skincare</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="ri-baby-line text-3xl text-blue-500"></i>
            <p class="text-sm text-gray-700 mt-2">Mom & Baby</p>
        </div>
    </section>
    <div class="swiper-container m-auto max-w-4xl rounded-lg shadow-lg overflow-hidden">
        <h2>Promo Menarik Untukmu</h2>
        <div class="swiper-wrapper">
            <?php
            // Folder tempat gambar disimpan
            $directory = "src/images/carousel/"; // Sesuaikan dengan direktori Anda
            $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            // Loop melalui semua gambar dan buat elemen swiper-slide
            foreach ($images as $image) {
                echo '<div class="swiper-slide">';
                echo '<img src="' . $image . '" alt="Gambar Promo" class="w-full h-auto object-cover rounded-lg">';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next text-white bg-black bg-opacity-50 p-2 rounded-full right-0 absolute z-10">
        </div>
        <div class="swiper-button-prev text-white bg-black bg-opacity-50 p-2 rounded-full left-0 absolute z-10">
        </div>

        <!-- Add Pagination if needed -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Bottom Navigation -->
    <nav class="fixed bottom-0 left-0 right-0 bg-white shadow-md p-4 flex justify-around">
        <div class="flex flex-col items-center">
            <i class="ri-home-4-line text-xl text-gray-700"></i>
            <p class="text-xs text-gray-700">Home</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="ri-file-list-3-line text-xl text-gray-700"></i>
            <p class="text-xs text-gray-700">Resep</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="ri-message-line text-xl text-gray-700"></i>
            <p class="text-xs text-gray-700">Konsultasi</p>
        </div>
        <div class="flex flex-col items-center">
            <i class="ri-user-line text-xl text-gray-700"></i>
            <p class="text-xs text-gray-700">Akun</p>
        </div>
    </nav>
    <?php
    include('Footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true, // Mengaktifkan loop
            autoplay: {
                delay: 3000, // Auto-slide setiap 3 detik
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

</body>

</html>
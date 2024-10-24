<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <style>
        /* Pastikan navbar selalu berada di lapisan atas */
        nav {
            z-index: 1000;
        }

        /* Sembunyikan tombol panah carousel pada awalnya */
        .swiper-button-next,
        .swiper-button-prev {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        /* Tampilkan tombol panah hanya saat mouse berada di atas carousel */
        .swiper-container:hover .swiper-button-next,
        .swiper-container:hover .swiper-button-prev {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Bagian Atas -->
    <?php include('Header.php'); ?>
    <header class="bg-blue-500 p-4">
        <!-- Bagian Carousel -->
        <div class="swiper-container m-auto max-w-4xl rounded-lg shadow-lg overflow-hidden relative">
            <div class="swiper-wrapper">
                <?php
                $directory = "src/images/carousel/";
                $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                foreach ($images as $image) {
                    echo '<div class="swiper-slide">';
                    echo '<img src="' . $image . '" alt="Gambar Promo" class="w-full h-auto object-cover rounded-lg">';
                    echo '</div>';
                }
                ?>
            </div>

            <!-- Tombol "Lihat Semua" diposisikan dengan z-index lebih tinggi -->
            <div class="absolute bottom-4 right-4 z-20">
                <button class="mt-2 px-4 py-2 bg-orange-500 rounded-lg text-white">Lihat Semua</button>
            </div>

            <!-- Tombol Panah, awalnya tersembunyi, muncul saat hover -->
            <div class="swiper-button-next text-white bg-black bg-opacity-50 p-2 rounded-full absolute z-10 right-0">
            </div>
            <div class="swiper-button-prev text-white bg-black bg-opacity-50 p-2 rounded-full absolute z-10 left-0">
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>


    </header>

    <!-- Bagian Ikon Grid -->
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
    </section>
    <div class="swiper-container m-auto max-w-4xl rounded-lg shadow-lg overflow-hidden relative">
        <div class="swiper-wrapper">
            <?php
            $directory = "src/images/carousel/";
            $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            foreach ($images as $image) {
                echo '<div class="swiper-slide">';
                echo '<img src="' . $image . '" alt="Gambar Promo" class="w-full h-auto object-cover rounded-lg">';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Tombol Panah, awalnya tersembunyi, muncul saat hover -->
        <div class="swiper-button-next text-white bg-black bg-opacity-50 p-2 rounded-full absolute z-10 right-0"></div>
        <div class="swiper-button-prev text-white bg-black bg-opacity-50 p-2 rounded-full absolute z-10 left-0"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>


    <!-- Navigasi Bawah -->
    <nav class="fixed bottom-0 left-0 right-0 bg-white shadow-md p-4 flex justify-around z-1000">
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
    <div class="Recomendation">
        <?php include('Recomendation.php'); ?>
    </div>
    <!-- Footer -->
    <?php include('Footer.php'); ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
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
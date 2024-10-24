<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .swiper-container {
            width: 100%;
            height: auto;
            /* Sesuaikan tinggi secara otomatis */
            padding: 0 20px;
            /* Menambahkan padding untuk container */
        }

        .swiper-slide {
            transition: transform 0.3s ease;
            /* Animasi transisi saat menggeser */
            display: flex;
            /* Agar konten bisa diatur dengan baik */
            justify-content: center;
            align-items: flex-start;
            /* Sesuaikan agar judul tidak terjepit */
            padding: 10px;
            /* Padding pada slide */
        }

        .product-card {
            background: white;
            border-radius: 0.5rem;
            /* rounded-lg */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* shadow-lg */
            padding: 16px;
            /* Padding pada kartu produk */
            width: 100%;
            /* Kartu menggunakan lebar penuh slide */
            height: auto;
            /* Mengatur tinggi otomatis */
        }
    </style>
</head>

<body>

    <div class="container mx-auto my-8">
        <?php
        function renderProductRecommendations($products)
        {
            ?>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">Rekomendasi Untukmu</h2>
                <a href="#" class="text-orange-500">Lihat semua</a>
            </div>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($products as $product) {
                        echo '<div class="swiper-slide">';
                        echo '<div class="product-card">'; // Menggunakan class product-card
                        echo '<img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['name']) . '" class="w-full h-40 object-cover rounded-md">';
                        echo '<div class="mt-4">';
                        echo '<h3 class="text-sm font-semibold text-gray-800">' . htmlspecialchars($product['name']) . '</h3>';
                        echo '<div class="mt-2">';
                        echo '<span class="text-red-500 font-bold">' . htmlspecialchars($product['price']) . '</span>';
                        echo '<span class="text-gray-400 line-through text-sm ml-2">' . htmlspecialchars($product['discount_price']) . '</span>';
                        echo '</div>';
                        echo '<p class="text-gray-600 text-xs mt-1">' . htmlspecialchars($product['sold']) . '</p>';
                        echo '<button class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-lg w-full">Beli Sekarang</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <?php
        }

        // Contoh data produk
        $products = [
            [
                'image' => 'src/images/product1.jpg',
                'name' => 'Bioderma Sensibio H2O Pump 500 ml',
                'price' => 'Rp 338.960',
                'discount_price' => 'Rp 455.000',
                'sold' => '6,8k+ Terjual'
            ],
            // Tambahkan produk lainnya di sini untuk total 12 produk
            [
                'image' => 'src/images/product2.jpg',
                'name' => 'Bioderma Sensibio H2O 500 ml',
                'price' => 'Rp 352.640',
                'discount_price' => 'Rp 455.000',
                'sold' => '6,2k+ Terjual'
            ],
            [
                'image' => 'src/images/product3.jpg',
                'name' => 'Serum Vitamin C',
                'price' => 'Rp 200.000',
                'discount_price' => 'Rp 250.000',
                'sold' => '3k+ Terjual'
            ],
            [
                'image' => 'src/images/product4.jpg',
                'name' => 'Moisturizer Hydrating Gel',
                'price' => 'Rp 150.000',
                'discount_price' => 'Rp 200.000',
                'sold' => '2k+ Terjual'
            ],
            [
                'image' => 'src/images/product5.jpg',
                'name' => 'Produk 5',
                'price' => 'Rp 100.000',
                'discount_price' => 'Rp 150.000',
                'sold' => '1k+ Terjual'
            ],
            [
                'image' => 'src/images/product6.jpg',
                'name' => 'Produk 6',
                'price' => 'Rp 120.000',
                'discount_price' => 'Rp 170.000',
                'sold' => '1.5k+ Terjual'
            ],
            [
                'image' => 'src/images/product7.jpg',
                'name' => 'Produk 7',
                'price' => 'Rp 250.000',
                'discount_price' => 'Rp 300.000',
                'sold' => '800+ Terjual'
            ],
            [
                'image' => 'src/images/product8.jpg',
                'name' => 'Produk 8',
                'price' => 'Rp 180.000',
                'discount_price' => 'Rp 230.000',
                'sold' => '500+ Terjual'
            ],
            [
                'image' => 'src/images/product9.jpg',
                'name' => 'Produk 9',
                'price' => 'Rp 75.000',
                'discount_price' => 'Rp 100.000',
                'sold' => '600+ Terjual'
            ],
            [
                'image' => 'src/images/product10.jpg',
                'name' => 'Produk 10',
                'price' => 'Rp 300.000',
                'discount_price' => 'Rp 400.000',
                'sold' => '200+ Terjual'
            ],
            [
                'image' => 'src/images/product11.jpg',
                'name' => 'Produk 11',
                'price' => 'Rp 400.000',
                'discount_price' => 'Rp 500.000',
                'sold' => '150+ Terjual'
            ],
            [
                'image' => 'src/images/product12.jpg',
                'name' => 'Produk 12',
                'price' => 'Rp 500.000',
                'discount_price' => 'Rp 600.000',
                'sold' => '100+ Terjual'
            ]
        ];

        renderProductRecommendations($products);
        ?>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1, // Tampilkan 1 slide secara default
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1.5,
                    },
                    400:{
                        slidesPerView: 2
                    },
                    640: {
                        slidesPerView: 2.5, 
                    },
                    768: {
                        slidesPerView: 3, 
                    },
                    1024: {
                        slidesPerView: 4, 
                    },
                    1280: {
                        slidesPerView: 5, 
                    },
                    1536: {
                        slidesPerView: 6, 
                    },
                },
            });
        });
    </script>

</body>

</html>
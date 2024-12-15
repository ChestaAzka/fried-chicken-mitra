<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Freed Chicken - Bergabunglah dengan kemitraan kami untuk peluang bisnis yang luar biasa dengan produk berkualitas dan dukungan penuh.">
    <meta property="og:title" content="Kemitraan - Freed Chicken">
    <meta property="og:description" content="Freed Chicken - Bergabunglah dengan kemitraan kami untuk peluang bisnis yang luar biasa dengan produk berkualitas dan dukungan penuh.">
    <meta property="og:image" content="/path/to/your/image.jpg">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <title>Kemitraan - Freed Chicken</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Hover.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

    <!-- Anime.js -->
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>

    <!-- Styles -->
    <style>
        /* Dark Mode */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
        }

        .dark-mode {
            background-color: #121212;
            color: #e9ecef;
        }

        .faq-item div {
            display: none;
        }

        .faq-item div.active {
            display: block;
        }

        /* Floating CTA with Animation */
        .floating-cta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ff4747;
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            animation: bounce 2s infinite;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .floating-cta:hover {
            background-color: #ff2a2a;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Menu Item Hover Effects */
        .menu-item {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .menu-item:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .menu-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: opacity 0.3s;
        }

        .menu-item:hover img {
            opacity: 0.8;
        }

        .menu-item h4 {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1.1rem;
            font-family: 'Roboto', sans-serif;
            transition: background-color 0.3s;
        }

        .menu-item:hover h4 {
            background-color: rgba(255, 71, 71, 0.8);
        }

        .view-more-btn a {
            text-align: center;
            margin-top: 16px;
        }

        /* Animasi scrolling untuk logo brand */
        .brand-marquee {
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            width: 100%;
            display: flex;
            animation: scroll-left 20s linear infinite;
        }

        .brand-marquee img {
            margin-right: 30px;
            height: 50px; /* Atur tinggi gambar sesuai kebutuhan */
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Button and Text Colors */
        .btn-primary {
            background-color: #ff4747;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff2a2a;
        }

        .text-dark {
            color: #333;
        }

        .heading {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        /* Smooth Fade-In for Elements */
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-gradient-to-r from-red-500 to-red-400 text-white py-6 text-center fade-in">
        <img src="/path/to/your/image.jpg" alt="Promosi Freed Chicken" class="w-full max-h-60 object-cover mb-4" loading="lazy">
        <h1 class="text-4xl font-bold heading hvr-float">Bergabunglah dengan Kemitraan Freed Chicken</h1>
        <nav class="mt-4">
            <a href="/" class="text-white px-4 py-2 rounded hover:bg-red-600 hvr-pulse">Home</a>
            <a href="{{route('about')}}" class="text-white px-4 py-2 rounded hover:bg-red-600 hvr-pulse">Tentang Kami</a>
            <a href="/contact" class="text-white px-4 py-2 rounded hover:bg-red-600 hvr-pulse">Hubungi Kami</a>
        </nav>
    </header>

    <button class="toggle-dark-mode fixed top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 hvr-float" onclick="toggleDarkMode()">Toggle Dark Mode</button>

    <main class="flex flex-col items-center p-6">
        <!-- Promo Mitra Section -->
        <section class="promo-mitra bg-yellow-100 py-8 mb-8 fade-in">
            <div class="container max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-semibold mb-4 heading hvr-fade">Promo Kemitraan Freed Chicken</h2>
                <p class="text-lg leading-relaxed mb-6">
                    Bergabunglah sekarang dan nikmati keuntungan luar biasa sebagai mitra Freed Chicken. Dapatkan dukungan penuh dari kami dalam setiap langkah perjalanan bisnis Anda!
                </p>
                <div class="promo-content flex flex-col md:flex-row justify-center items-center">
                    <div class="promo-image md:w-1/2 mb-6 md:mb-0">
                        <img src="{{asset('images/grobak.png')}}" alt="Promo Mitra Brobak" class="rounded-lg shadow-lg w-full h-auto object-cover hvr-grow">
                    </div>
                    <div class="promo-details md:w-1/2 md:ml-8">
                        <h3 class="text-2xl font-semibold mb-4">Keuntungan Menjadi Mitra</h3>
                        <ul class="text-lg mb-6">
                            <li class="mb-2">Produk berkualitas tinggi yang terjamin</li>
                            <li class="mb-2">Dukungan pemasaran dan promosi penuh</li>
                            <li class="mb-2">Pelatihan untuk keberhasilan bisnis Anda</li>
                            <li class="mb-2">Keuntungan dan margin yang menarik</li>
                        </ul>
                        <div class="view-more-btn">
                            <a href="{{route('register')}}" class="btn btn-primary px-6 py-3 rounded-lg hover:bg-red-600 hvr-pulse">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <a href="https://wa.me/+6281383328760?text=Halo%2C%20saya%20tertarik%20untuk%20bergabung%20dengan%20kemitraan%20Freed%20Chicken" class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 hvr-buzz-out">
                        Gabung Sekarang via WhatsApp
                    </a>
                </div>
            </div>
        </section>

        <!-- Brand Marquee -->
        <section class="brand-marquee-section py-6 fade-in">
            <div class="container max-w-6xl mx-auto text-center">
                <h2 class="text-2xl font-semibold mb-4">Mitra Brand Kami</h2>
                <div class="brand-marquee">
                    <img src="/images/brand/gojek.png" alt="Brand 1">
                    <img src="/images/brand/grab-food.png" alt="Brand 2">
                    <img src="/images/brand3.png" alt="Brand 3">
                    <img src="/images/brand4.png" alt="Brand 4">
                </div>
            </div>
        </section>

        <div class="welcome text-center max-w-2xl mb-8 fade-in">
            <h2 class="text-3xl font-semibold mb-4 hvr-buzz">Mengapa Memilih Freed Chicken?</h2>
            <p class="text-lg leading-relaxed mb-4">
                Freed Chicken menawarkan peluang kemitraan yang luar biasa dengan dukungan penuh untuk mitra kami. Kami berkomitmen untuk memberikan kualitas terbaik dalam produk dan layanan kami.
            </p>
            <a href="{{route('register')}}" class="btn btn-primary px-6 py-3 rounded-lg hover:bg-red-600 hvr-buzz-out">Bergabung Sekarang</a>
        </div>

        <!-- Testimonial Section -->
        <section class="testimonial bg-gray-100 py-8 mb-8 fade-in">
            <h2 class="text-3xl font-semibold text-center mb-6">Apa Kata Mitra Kami?</h2>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="testimonial-item bg-white rounded-lg shadow-md p-6 w-80">
                    <p class="text-lg italic mb-4">"Freed Chicken memberikan dukungan yang luar biasa. Bisnis kami berkembang pesat berkat produk berkualitas dan strategi pemasaran yang efektif!"</p>
                    <p class="font-semibold">- John Doe</p>
                </div>
                <div class="testimonial-item bg-white rounded-lg shadow-md p-6 w-80">
                    <p class="text-lg italic mb-4">"Kami sangat puas dengan kemitraan ini. Semua materi promosi dan pelatihan yang diberikan sangat membantu!"</p>
                    <p class="font-semibold">- Jane Smith</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-6">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 Freed Chicken. Semua Hak Dilindungi.</p>
                <nav class="mt-4">
                    <a href="/terms" class="text-white hover:text-gray-400">Syarat & Ketentuan</a> |
                    <a href="/privacy" class="text-white hover:text-gray-400">Kebijakan Privasi</a>
                </nav>
            </div>
        </footer>
    </main>

    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>

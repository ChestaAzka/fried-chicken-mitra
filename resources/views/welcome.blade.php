<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fried Chicken Mitra - Bergabunglah dengan kemitraan kami untuk peluang bisnis yang luar biasa dengan produk berkualitas dan dukungan penuh.">
    <meta property="og:title" content="Kemitraan - Fried Chicken Mitra">
    <meta property="og:description" content="Fried Chicken Mitra - Bergabunglah dengan kemitraan kami untuk peluang bisnis yang luar biasa dengan produk berkualitas dan dukungan penuh.">
    <meta property="og:image" content="/path/to/your/image.jpg">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <title>Kemitraan - Fried Chicken Mitra</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Hover.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

    <!-- Anime.js -->
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>

    <!-- Custom Styles -->
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

        /* Special Styling for Call-to-Actions */
        .cta-btn {
            background-color: #ff4747;
            color: white;
            padding: 15px 25px;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #e84343;
            transform: translateY(-5px);
        }

         /* FAQ Section */
         .faq-item {
            margin-bottom: 20px;
        }

        .faq-question {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .faq-question:hover {
            background-color: #e9ecef;
        }

        .faq-answer {
            padding: 10px;
            background-color: #f1f3f5;
            border-left: 4px solid #ff4747;
            margin-top: 10px;
            display: none;
        }

        /* Footer */
        .footer-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .footer-table th,
        .footer-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .footer-table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .footer-btn {
            background-color: #ff4747;
            color: white;
            padding: 12px 20px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        .footer-btn:hover {
            background-color: #e84343;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-gradient-to-r from-red-500 to-red-400 text-white py-6 text-center fade-in">
    <img src="{{ asset('images/logo.png') }}" alt="Promosi Fried Chicken Mitra" class="w-full max-h-60 object-cover mb-4" loading="lazy">

        <h1 class="text-5xl font-bold heading hvr-float">Bergabunglah dengan Kemitraan Fried Chicken Mitra</h1>
        <nav class="mt-4">
            <a href="/" class="text-white px-6 py-3 rounded-lg hover:bg-red-600 hvr-pulse">Home</a>
            <a href="{{route('about')}}" class="text-white px-6 py-3 rounded-lg hover:bg-red-600 hvr-pulse">Tentang Kami</a>
            <a href="/contact" class="text-white px-6 py-3 rounded-lg hover:bg-red-600 hvr-pulse">Hubungi Kami</a>
        </nav>
    </header>

    <main class="flex flex-col items-center p-6">
        <!-- Promo Mitra Section -->
        <section class="promo-mitra bg-yellow-100 py-10 mb-8 fade-in">
            <div class="container max-w-6xl mx-auto text-center">
                <h2 class="text-4xl font-semibold mb-4 heading">Kenapa Memilih Kemitraan Kami?</h2>
                <p class="text-lg leading-relaxed mb-6">Bergabunglah dengan kami untuk peluang bisnis yang luar biasa. Nikmati berbagai keuntungan eksklusif sebagai mitra kami!</p>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="benefit-item bg-white p-8 rounded-lg shadow-lg w-80 hover:shadow-2xl transition">
                        <h3 class="text-2xl font-semibold text-center mb-4">Keuntungan Produk</h3>
                        <p>Produk berkualitas yang siap memuaskan pelanggan dan mendorong penjualan tinggi.</p>
                    </div>
                    <div class="benefit-item bg-white p-8 rounded-lg shadow-lg w-80 hover:shadow-2xl transition">
                        <h3 class="text-2xl font-semibold text-center mb-4">Dukungan Penuh</h3>
                        <p>Kami memberikan pelatihan dan dukungan pemasaran agar Anda bisa sukses dengan mudah.</p>
                    </div>
                    <div class="benefit-item bg-white p-8 rounded-lg shadow-lg w-80 hover:shadow-2xl transition">
                        <h3 class="text-2xl font-semibold text-center mb-4">Keuntungan Finansial</h3>
                        <p>Keuntungan yang menjanjikan dengan margin menarik untuk mitra kami.</p>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="{{route('register')}}" class="cta-btn hover:bg-red-600">Bergabung Sekarang</a>
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

        <!-- Testimonials Section -->
        <section class="testimonials py-12 bg-gray-100 text-center fade-in">
            <h2 class="text-3xl font-semibold mb-8">Apa Kata Mitra Kami?</h2>
            <div class="flex flex-wrap justify-center gap-12">
                <div class="testimonial-item bg-white p-8 rounded-lg shadow-lg max-w-xs">
                    <p class="italic text-lg mb-4">"Kami sangat puas dengan kemitraan ini. Semua materi promosi dan pelatihan yang diberikan sangat membantu!"</p>
                    <p class="font-semibold">- Jane Smith</p>
                </div>
                <div class="testimonial-item bg-white p-8 rounded-lg shadow-lg max-w-xs">
                    <p class="italic text-lg mb-4">"Fried Chicken Mitra memberikan dukungan yang luar biasa. Bisnis kami berkembang pesat berkat produk berkualitas dan strategi pemasaran yang efektif!"</p>
                    <p class="font-semibold">- John Doe</p>
                </div>
            </div>
        </section>
    </main>

     <!-- FAQ Section -->
     <section class="faq bg-white py-10 mb-8 w-full max-w-6xl mx-auto">
            <h2 class="text-4xl font-semibold mb-4 text-center heading">FAQ - Pertanyaan yang Sering Diajukan</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(0)">Apa keuntungan utama bergabung dengan kemitraan ini?</div>
                    <div class="faq-answer" id="faq-answer-0">Keuntungan utama adalah mendapatkan produk berkualitas tinggi, dukungan penuh dari tim kami, dan peluang keuntungan yang menjanjikan dengan margin yang menguntungkan.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(1)">Bagaimana cara mendaftar sebagai mitra?</div>
                    <div class="faq-answer" id="faq-answer-1">Anda bisa mendaftar langsung melalui halaman pendaftaran di website kami. Isi formulir pendaftaran dan tim kami akan segera menghubungi Anda.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(2)">Apakah ada pelatihan untuk mitra baru?</div>
                    <div class="faq-answer" id="faq-answer-2">Ya, kami menyediakan pelatihan lengkap untuk mitra baru agar dapat memulai bisnis dengan cepat dan efektif.</div>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="bg-gray-900 text-white py-10 px-6 text-center">
            <h3 class="text-2xl font-bold mb-4">Jam Buka</h3>
            <table class="footer-table mx-auto">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Jam Buka</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Senin - Jumat</td>
                        <td>09:00 - 18:00</td>
                    </tr>
                    <tr>
                        <td>Sabtu</td>
                        <td>10:00 - 16:00</td>
                    </tr>
                    <tr>
                        <td>Minggu</td>
                        <td>Tutup</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-6">
                <a href="https://wa.me/1234567890" class="footer-btn" target="_blank">Hubungi Kami di WhatsApp</a>
            </div>
        </footer>
    <div class="floating-cta">
        <a href="{{route('register')}}" class="hvr-pulse">Gabung Sekarang</a>
    </div>

    <script>
        // Toggle Dark Mode
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }

        // FAQ Toggle
        document.querySelectorAll('.faq-item h3').forEach(item => {
            item.addEventListener('click', () => {
                item.nextElementSibling.classList.toggle('active');
            });
        });
        // Toggle FAQ Answers
        function toggleAnswer(index) {
            const answer = document.getElementById(`faq-answer-${index}`);
            answer.style.display = answer.style.display === "none" || answer.style.display === "" ? "block" : "none";
        }
    </script>
</body>
</html>

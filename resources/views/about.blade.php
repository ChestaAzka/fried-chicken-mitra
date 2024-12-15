<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami - Freed Chicken</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- AOS Animation Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffe6e6;
            color: #343a40;
            transition: background-color 0.3s, color 0.3s;
        }

        .dark-mode {
            background-color: #121212;
            color: #e9ecef;
        }

        header {
            background: linear-gradient(135deg, #ff6b6b, #ff4747);
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            animation: fadeInHeader 1s ease-out;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: white;
            margin: 0 10px;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            transition: background-color 0.3s, transform 0.3s;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.4);
            transform: scale(1.05);
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .about-section {
            text-align: center;
            max-width: 800px;
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s forwards;
        }

        .about-section h2 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            animation: slideInFromLeft 1s ease-out;
        }

        .about-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            animation: fadeInUp 1.5s forwards;
        }

        .about-section ul {
            list-style-type: disc;
            padding-left: 20px;
            font-size: 1.1rem;
            animation: fadeInUp 2s forwards;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            background-color: #ff4747;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            animation: fadeInUp 2s forwards;
        }

        .btn:hover {
            background-color: #e03c3c;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: white;
        }

        .toggle-dark-mode {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .toggle-dark-mode:hover {
            background-color: #e05555;
        }

        /* Animations */
        @keyframes fadeInHeader {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInFromLeft {
            0% {
                opacity: 0;
                transform: translateX(-100px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Styling for Founder Section */
        .founder {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
        }

        .founder-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }

        .founder-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tentang Kami - Freed Chicken</h1>
        <nav>
            <a href="/">Home</a>
            <a href="{{route('about')}}">Tentang Kami</a>
            <a href="/contact">Hubungi Kami</a>
        </nav>
    </header>

    <button class="toggle-dark-mode" onclick="toggleDarkMode()">Toggle Dark Mode</button>

    <main>
        <div class="about-section" data-aos="fade-up">
            <h2>Visi dan Misi Kami</h2>
            <p>
                Freed Chicken berkomitmen untuk menyediakan ayam goreng berkualitas tinggi kepada setiap pelanggan kami, dengan rasa yang khas dan pelayanan terbaik.
                Kami ingin menjadi merek pilihan utama di Indonesia dalam kategori makanan cepat saji.
            </p>
            <p>
                Misi kami adalah untuk membangun kemitraan yang saling menguntungkan dengan mitra bisnis kami, memberikan pelatihan dan dukungan yang lengkap,
                serta menjaga standar kualitas yang tinggi pada setiap langkah yang kami ambil.
            </p>
        </div>

        <div class="about-section" data-aos="fade-up" data-aos-delay="300">
            <h2>Sejarah Kami</h2>
            <p>
                Freed Chicken didirikan pada tahun 2010 dengan tujuan untuk memberikan pengalaman kuliner yang luar biasa bagi para penggemar ayam goreng di Indonesia.
                Dari awal yang sederhana, kini kami telah berkembang pesat dan membuka banyak cabang di berbagai daerah.
            </p>
            <p>
                Kami percaya bahwa kualitas dan kepercayaan pelanggan adalah kunci keberhasilan kami. Seiring berjalannya waktu, Freed Chicken terus memperkenalkan inovasi
                baru untuk memenuhi kebutuhan konsumen dan menciptakan pengalaman makan yang menyenangkan.
            </p>
        </div>

        <div class="about-section" data-aos="fade-up" data-aos-delay="600">
            <h2>Keunggulan Kami</h2>
            <ul>
                <li>Ayam Goreng dengan bumbu rahasia yang lezat dan renyah.</li>
                <li>Pelayanan yang cepat dan ramah.</li>
                <li>Proses pemesanan yang mudah dan efisien, baik langsung maupun melalui aplikasi.</li>
                <li>Jaminan kepuasan pelanggan dengan kualitas makanan yang terjaga.</li>
            </ul>
        </div>

        <!-- Founder Section -->
        <div class="about-section" data-aos="fade-up" data-aos-delay="900">
            <h2>Pendiri Kami</h2>
            <div class="founder">
                <img src="{{asset('images/Ulangan_DKV_8.jpg')}}" alt="Foto Pendiri" class="founder-photo">
                <p class="founder-name">Dea Afrizal</p>
            </div>
            <p>
                Dea Afrizal adalah pendiri Freed Chicken, dengan visi untuk menciptakan pengalaman makan yang unik dan berkualitas bagi masyarakat Indonesia.
            </p>
        </div>

        <div class="about-section">
            <a href="{{route('register')}}" class="btn" data-aos="fade-up" data-aos-delay="1200">Bergabunglah Sebagai Mitra</a>
        </div>
    </main>

    <footer>
        Freed Chicken &copy; {{ date('Y') }} | Semua Hak Dilindungi
    </footer>

    <!-- AOS Animation Script -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        const toggleDarkMode = () => {
            document.body.classList.toggle('dark-mode');
        };

        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 1000, // Duration of animation
            once: true, // Animate once per scroll
            offset: 100, // Start the animation when scrolled 100px
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Menu Freed Chicken - Pilihan menu lezat dan berkualitas untuk semua selera.">
        <meta property="og:title" content="Menu - Freed Chicken">
        <meta property="og:description" content="Menu Freed Chicken - Pilihan menu lezat dan berkualitas untuk semua selera.">
        <meta property="og:image" content="/path/to/your/image.jpg">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <title>Menu - Freed Chicken</title>

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
            }

            .menu-item img {
                width: 100%;
                height: 200px;
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
                font-size: 1rem;
                transition: background-color 0.3s;
            }

            .menu-item:hover h4 {
                background-color: rgba(255, 71, 71, 0.8);
            }
        </style>
    </head>
    <body class="bg-red-50 text-gray-800">
        <header class="bg-gradient-to-r from-red-500 to-red-400 text-white py-6 text-center">
            <h1 class="text-4xl font-bold">Menu Freed Chicken</h1>
            <nav class="mt-4">
                <a href="/" class="text-white px-4 py-2 rounded hover:bg-red-600">Home</a>
                <a href="{{route('about')}}" class="text-white px-4 py-2 rounded hover:bg-red-600">Tentang Kami</a>
                <a href="/contact" class="text-white px-4 py-2 rounded hover:bg-red-600">Hubungi Kami</a>
            </nav>
        </header>

        <main class="flex flex-col items-center p-6">
            <div class="menu-section bg-gray-100 p-6 rounded-lg max-w-4xl mb-8">
                <h3 class="text-2xl font-semibold mb-4 text-center">Menu Andalan Kami</h3>
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <li class="menu-item p-4 bg-white rounded-lg shadow-md">
                        <img src="/images/menu-original.jpg" alt="Fried Chicken Original" loading="lazy">
                        <h4>Fried Chicken Original</h4>
                        <p class="text-gray-600 mt-2">Renyah dan gurih, cocok untuk semua usia.</p>
                    </li>
                    <li class="menu-item p-4 bg-white rounded-lg shadow-md">
                        <img src="/images/menu-spicy.jpg" alt="Spicy Chicken Wings" loading="lazy">
                        <h4>Spicy Chicken Wings</h4>
                        <p class="text-gray-600 mt-2">Sensasi pedas yang menggoda selera.</p>
                    </li>
                    <li class="menu-item p-4 bg-white rounded-lg shadow-md">
                        <img src="/images/menu-burger.jpg" alt="Chicken Burger" loading="lazy">
                        <h4>Chicken Burger</h4>
                        <p class="text-gray-600 mt-2">Burger ayam dengan saus spesial Freed.</p>
                    </li>
                    <li class="menu-item p-4 bg-white rounded-lg shadow-md">
                        <img src="/images/menu-wrap.jpg" alt="Chicken Wrap" loading="lazy">
                        <h4>Chicken Wrap</h4>
                        <p class="text-gray-600 mt-2">Wrap ayam dengan sayuran segar dan saus.</p>
                    </li>
                    <!-- Add more menu items here if needed -->
                </ul>
            </div>
        </main>

        <footer class="text-center bg-gray-800 text-white py-4">
            Freed Chicken &copy; {{ date('Y') }} | Semua Hak Dilindungi
        </footer>
    </body>
</html>

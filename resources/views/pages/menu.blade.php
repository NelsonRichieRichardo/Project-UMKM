<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Menu | De'Sate</title>
    <style>
        .menu{
            font-weight: 400;
        }
        .foto {
            display: flex;
            flex-wrap: wrap;
        }
        .foto img {
            margin: 5px;
        }
    </style>
    
</head>
<body>

    <section id="menu-main">
        <nav>
            <img src="../../foto/logo-white.png" class="logo">
            <div class="navlinks" id="navLinks">
                <ul>
                    <li><a href="/home">HOME</a></li>
                    <li><a href="/menu">MENU</a></li>
                    <li><a href="/about">ABOUT</a></li>
                    <li><a href="/catalog">CATALOG</a></li>
                </ul>
            </div>
        </nav>
        <div class="flex flex-box">
            {{-- Tabel Kiri --}}
            <div class="flex-grow flex-col mx-4">
                <h1 class="page-header">Makanan</h1>
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light text-surface dark:text-black">
                                <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Name</th>
                                        <th scope="col" class="px-6 py-4">Price</th>
                                    </tr>
                                </thead>
                                @foreach ( $products as $product)  
                                    @if ($product->category == 'makanan')
                                        <tbody>
                                            <tr class="border-b border-neutral-200 dark:border-black/10">
                                                <td class="whitespace-nowrap px-6 py-4">{{ $product->name}}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $product->price}}</td>
                                            </tr>
                                        </tbody>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Tabel Kanan --}}
            <div class="flex-grow flex-col mx-4">
                <h1 class="page-header">Minuman</h1>
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light text-surface dark:text-black">
                                <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Name</th>
                                        <th scope="col" class="px-6 py-4">Price</th>
                                    </tr>
                                </thead>
                                @foreach ( $products as $product)  
                                    @if ($product->category == 'minuman')
                                        <tbody>
                                            <tr class="border-b border-neutral-200 dark:border-black/10">
                                                <td class="whitespace-nowrap px-6 py-4">{{ $product->name}}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $product->price}}</td>
                                            </tr>
                                        </tbody>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{----- SITE FOOTER -----}}
    <footer class="bg-white shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="../../foto/logo-white.png" class="h-8" alt="DeSate Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">DeSate</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="/home" class="hover:underline me-4 md:me-6">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="/menu" class="hover:underline me-4 md:me-6">Menu</a>
                    </li>
                    <li>
                        <a href="/catalog" class="hover:underline">Catalog</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/home" class="hover:underline">DeSate™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>
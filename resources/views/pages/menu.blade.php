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

    <section id="main">
        <nav class="nav-header">
            <div class="nav-option text">
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/menu">Menu</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/catalog">Catalog</a></li>
                </ul>
            </div>
        </nav>
        <div class="flex flex-box">
            {{-- Tabel Kiri --}}
            <div class="flex-grow flex-col">
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
            <div class="flex-grow flex-col">
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
    
    

</body>
</html>
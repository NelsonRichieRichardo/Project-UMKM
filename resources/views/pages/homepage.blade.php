<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home | De'Sate</title>
</head>
<body>
    <nav class="nav-header">
        <div class="nav-option">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/catalog">Catalog</a></li>
            </ul>
        </div>
    </nav>

    <section id="main" class="container size-full">
        <div id="main-flex" class="flex flex-row"> 
            <div id="store-name-flex" class="flex-none w-[40%]">
                <h1 class="font-sans text-7xl font-bold">De' Sate</h1>
            </div>
            <div id="products" class="flex-initail w-[60%] align-center">
                <img alt="image"><img>
            </div>
        </div>
    </section>
    <section id="top-picks" class="">

    </section>
    <section id="front-store" class=""></section>

</body>
</html>
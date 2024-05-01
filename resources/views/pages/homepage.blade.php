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
            <div id="store-name-flex" class="flex-none items-center w-[50%] h-[60vh] grid grid-row auto-row-max content-center place-items-start px-10">
                <h1 class="font-sans text-8xl font-bold">De'Sate</h1>
                <div class="indent-9"><h2 class="font-sans text-3xl ">Your cheapest and tastiest food options</h2></div>
                <div class="indent-9"><h2 class="font-sans text-3xl ">are from here.</h2></div>
                <button class="indent-9" >Menu</button>
            </div>
            <div id="products-flex" class="flex-initail w-[60%] align-center">
                <img alt="image"><img>
            </div>
        </div>
    </section>
    <section id="top-picks" class="">

    </section>
    <section id="front-store" class=""></section>

</body>
</html>
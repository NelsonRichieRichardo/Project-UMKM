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

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0066ff" fill-opacity="1" d="M0,128L60,106.7C120,85,240,43,360,37.3C480,32,600,64,720,85.3C840,107,960,117,1080,112C1200,107,1320,85,1380,74.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>

    <section id="top-picks" class="">

    </section>
    <section id="front-store" class=""></section>

</body>
</html>
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
                <li><a href="/home">Home</a></li>
                <li><a href="/">Menu</a></li>
                <li><a href="/">About</a></li>
                <li><a href="/catalog">Catalog</a></li>
            </ul>
        </div>
    </nav>

    <section id="main" class="container size-full">
        <div class="header-text-cont">
            <h2>De'Sate</h2>
            <p>Your cheapest & tastiest food options
                <br>are from here</p>
            <div class="hero-btn"><a href="/menu">Menu</a></div>
        </div>
            <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,128L80,112C160,96,320,64,480,74.7C640,85,800,139,960,160C1120,181,1280,171,1440,170.7C1600,171,1760,181,1920,154.7C2080,128,2240,64,2400,58.7C2560,53,2720,107,2880,149.3C3040,192,3200,224,3360,234.7C3520,245,3680,235,3840,192C4000,149,4160,75,4320,58.7C4480,43,4640,85,4800,101.3C4960,117,5120,107,5280,122.7C5440,139,5600,181,5760,197.3C5920,213,6080,203,6240,208C6400,213,6560,235,6720,234.7C6880,235,7040,213,7200,192C7360,171,7520,149,7680,117.3C7840,85,8000,43,8160,53.3C8320,64,8480,128,8640,128C8800,128,8960,64,9120,69.3C9280,75,9440,149,9600,154.7C9760,160,9920,96,10080,96C10240,96,10400,160,10560,202.7C10720,245,10880,267,11040,272C11200,277,11360,267,11440,261.3L11520,256L11520,320L11440,320C11360,320,11200,320,11040,320C10880,320,10720,320,10560,320C10400,320,10240,320,10080,320C9920,320,9760,320,9600,320C9440,320,9280,320,9120,320C8960,320,8800,320,8640,320C8480,320,8320,320,8160,320C8000,320,7840,320,7680,320C7520,320,7360,320,7200,320C7040,320,6880,320,6720,320C6560,320,6400,320,6240,320C6080,320,5920,320,5760,320C5600,320,5440,320,5280,320C5120,320,4960,320,4800,320C4640,320,4480,320,4320,320C4160,320,4000,320,3840,320C3680,320,3520,320,3360,320C3200,320,3040,320,2880,320C2720,320,2560,320,2400,320C2240,320,2080,320,1920,320C1760,320,1600,320,1440,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>

    <section id="top-picks" classs="absolute">
        <h1 class="font-sans font-bold text-5xl text-center content-around">────Our Top Picks────</h1>
        <div id="main-cont" class="grid grid-cols-3 gap-4 justify-items-center mt-8">
            <div id="top-img" class="w-fit h-fit">
                <img src="build/assets/3TnNasi.JPG" class="w-96 h-96" alt="image"><br>
                <h2 class="text-center text-2xl">Tahu Tempe Telur</h2>
                <h2 class="text-center text-xl">Rp. 10.000,-</h2>
            </div>
            <div id="top-img" class="w-fit h-fit">
                <img src="build/assets/3TnNasi.JPG" class="w-96 h-96" alt="image"><br>
                <h2 class="text-center text-2xl">Ayam Goreng</h2>
                <h2 class="text-center text-xl">Rp. 12.000,-</h2>
            </div>
            <div id="top-img" class="w-fit h-fit">
                <img src="build/assets/3TnNasi.JPG" class="w-96 h-96" alt="image" ><br>
                <h2 class="text-center text-2xl">Ayam Goreng</h2>
                <h2 class="text-center text-xl">Rp. 12.000,-</h2>
            </div>
        </div>
    </section>

    <section id="front-store" class="mt-20">
        <img src="build/assets/pakde.JPG" alt="Pak'De Pemilik Usaha">
    </section>
</body>
</html>
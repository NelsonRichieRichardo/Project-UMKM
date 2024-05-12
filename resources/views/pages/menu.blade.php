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
        <h1 class="menu">Menu <span style="text-align:right">2024</span></h1>
        <div class="foto">
            <img src="./build/assets/menu1.JPG" alt="menu1" width="40%" height="40%">
            <img src="./build/assets/menu2.JPG" alt="menu2" width="40%" height="40%">
            <img src="./build/assets/menu3.JPG" alt="menu3" width="40%" height="40%">
            <img src="./build/assets/menu4.JPG" alt="menu4" width="40%" height="40%">
        </div>
    </section>
    
    

</body>
</html>
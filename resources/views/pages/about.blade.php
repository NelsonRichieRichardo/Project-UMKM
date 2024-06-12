<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/e3ab2ad8c0.js" crossorigin="anonymous"></script>
    <title>About | De'Sate</title>
    <style>
        .container{
            margin-top: 10px;
            background-image: url('../../foto/interior.jpg');
            background-size: cover;
            background-position: center;
            background-color: grey;
            background-color: grey;
            width: 100%;
            height: 50%;
        }
        .bawah{
            text-align: center;
            margin-top: -15px;
        }
        .bwh{
            text-align: center;
            margin-top: 5px;
        }
        #owner img{
            width: 40%;
            height: 15%;
            padding-right: 25px;
            border-radius: 10%;
        }
        #find{
            margin-top: 7rem;
        }
        #find h3{
            font-size: 2rem;
            text-align: center;
        }
        #find div{
            display: flex;

        }
        #find div p{
            margin-left: 3%;
        }
        #find div p span{
            font-size: 20px;
            font-weight: bold;
        }
        #find iframe{
            margin-top: 1rem;
            width: 100%;
            height: 60vh;
        }

    </style>
</head>
<body>

    <section id="about-page">
        <nav>
            <img src="../../foto/logo-white.png" class="logo">
            <div class="navlinks" id="navLinks">
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/menu">MENU</a></li>
                    <li><a href="/about">ABOUT</a></li>
                    <li><a href="/catalog">CATALOG</a></li>
                </ul>
            </div>
        </nav>
        <div class="about-text-cont">
            <h2>About</h2>
            <p>Company Profile</p>
        </div>
    </section>

    <section id="about-info">
        <h1 class="bawah">SERVING QUALITY FOOD</h1>
        <h3 class="bwh">SINCE 2001</h3>
        <br>
        <p>De'Sate Taman Kota Mas adalah restoran sate yang menyajikan berbagai macam Makanan lezat, seperti sate ayam, nasi goreng, ayam penyet, ayam bakar, mie goreng, sayuran dan lain sebagainya. Selain itu, restoran ini juga menyediakan aneka minuman segar seperti teh obeng, lemon tea, matcha, dan coklat es. Restoran De'Sate Taman Kota Mas memiliki suasana yang santai dan nyaman, cocok untuk makan bersama keluarga atau teman. Restoran ini buka dari jam 17.00 WIB hingga 23.00 WIB malam dan hanya tutup pada hari sabtu. Anda dapat memesan makanan dari De'Sate Taman Kota Mas melalui GoFood maupun melalui Whatsapp dan biaya pengiriman gratis disekitar Taman Kota Mas dan Taman Baloi.</p>
    </section>

    
    <h2 id="owner-text">Owner ──────────</h2>
    <section id="owner">
        <img src="../../foto/pakde.JPG" alt="pakde">
        <div class="about-owner">
            <h3 id="nama">Pak Suryadi “De”</h3>
            <p> Bapak Supriyadi, atau yang akrab dipanggil dengan sebutan "Pak De," adalah pendiri restoran De'sate. Beliau bersama istrinya telah membangun restoran ini sejak tahun 2001. Beliau lahir di Jawa Timur, Pada masa mudanya Pak De memutuskan untuk merantau ke Batam demi mencari kehidupan yang lebih baik. Dengan ketekunan dan kerja kerasnya membuahkan hasil, menjadikan De'sate sebagai salah satu restoran yang terkenal di Batam terutama dikalangan anak muda dan warga disekitarnya.</p>
            <hr>
            <div id="owner-contact">
                <h4>Contact</h4>
                <p><span><i class="fa-solid fa-phone"></i></span> 0823-9261-5968</p>
            </div>
        </div>
    </section>
    <section id="find">
        <h3>────    Where You Can Find Us   ────</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d361.1513754676393!2d104.00415271852088!3d1.1234718994402069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98b1aadc70913%3A0xa7a91ec9450be79d!2sDe&#39;Sate%20Taman%20Kota%20Mas!5e0!3m2!1sen!2sid!4v1715521116082!5m2!1sen!2sid" width="95%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        
{{----- SITE FOOTER -----}}
    </section>
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
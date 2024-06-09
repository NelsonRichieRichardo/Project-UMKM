<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>About | De'Sate</title>
    <style>
        .container{
            margin-top: 10px;
            background-image: url('./build/assets/interior.jpg');
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
        #owner{
            display: flex;
        }
        h2{
            padding-left: 20px; 
            padding-bottom: 10px;
        }
        #owner img{
            width: 40%;
            height: 15%;
            padding-left: 10px;
            padding-right: 25px;
            border-radius: 10%;
        }
        #owner p{
            text-align: justify;
            padding-left: 10px;
            padding-right: 10%;
        }
        #nama{
            width: 40%;
            text-align: center;
        }
        #find{
            margin: 
        }
        #find h3{
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
            margin: 10px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 5%;
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
        <div class="container">
            <p class=""><span class="font-bold">About</span> | Company Profile</p>
        </div>
        <h1 class="bawah">SERVING QUALITY FOOD</h1>
        <h3 class="bwh">SINCE 2001</h3>
        <p>De'Sate Taman Kota Mas adalah restoran sate yang menyajikan berbagai macam Makanan lezat, seperti sate ayam, nasi goreng, ayam penyet, ayam bakar, mie goreng, sayuran dan lain sebagainya. Selain itu, restoran ini juga menyediakan aneka minuman segar seperti teh obeng, lemon tea, matcha, dan coklat es. Restoran De'Sate Taman Kota Mas memiliki suasana yang santai dan nyaman, cocok untuk makan bersama keluarga atau teman. Restoran ini buka dari jam 17.00 WIB hingga 23.00 WIB malam dan hanya tutup pada hari sabtu. Anda dapat memesan makanan dari De'Sate Taman Kota Mas melalui GoFood maupun melalui Whatsapp dan biaya pengiriman gratis disekitar Taman Kota Mas dan Taman Baloi.</p>
    </section>
    <h2>Owner ──────────</h2>
    <section id="owner">
        <img src="./build/assets/pakde.JPG" alt="pakde">
        <p> Bapak Supriyadi, atau yang akrab dipanggil dengan sebutan "Pak De," adalah pendiri restoran De'sate. Beliau bersama istrinya telah membangun restoran ini sejak tahun 2001. Beliau lahir di Jawa Timur, Pada masa mudanya Pak De memutuskan untuk merantau ke Batam demi mencari kehidupan yang lebih baik. Dengan ketekunan dan kerja kerasnya membuahkan hasil, menjadikan De'sate sebagai salah satu restoran yang terkenal di Batam terutama dikalangan anak muda dan warga disekitarnya.</p>
    </section>
    <p id="nama">Pak Suryadi “De”</p>
    <section id="find">
        <h3>────Where You Can Find Us────</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d361.1513754676393!2d104.00415271852088!3d1.1234718994402069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98b1aadc70913%3A0xa7a91ec9450be79d!2sDe&#39;Sate%20Taman%20Kota%20Mas!5e0!3m2!1sen!2sid!4v1715521116082!5m2!1sen!2sid" width="95%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div>
            <p style="margin-right: 25px"> <span>Address</span> <br>Perumahan Taman Kota Mas, Tj. Uma, Kec. Lubuk Baja, Kota Batam</p>
            <p><span>Phone Number</span> <br> 0823-9261-5968</p>
        </div>


    </section>


</body>
</html>
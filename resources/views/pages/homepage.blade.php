<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home | De'Sate</title>
    <script src="https://kit.fontawesome.com/e3ab2ad8c0.js" crossorigin="anonymous"></script>
    
</head>
<body>

{{----- MAIN -----}}
    <section id="main">
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
        
        {{-- <div class="sampingan">
            <img class="samping.kiri" src="../../foto/miegor.JPG" alt="miegor" width="200px" height="170px">
            <img class="samping.kanan" src="../../foto/ayamp.JPG" alt="ayamp" width="150px" height="100px">
        </div>

        <div class="lingkaran">
            <img class="pattaya" src="../../foto/pattaya.JPG" alt="nasgor pattaya">
        </div>   --}}

        <div class="header-text-cont">
            <h2>De'Sate</h2>
            <p>Your cheapest & tastiest food options 
                <br>are from here</p>
            <div class="hero-btn"><a href="/menu">View Menu</a></div>
        </div>
        {{-- <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,128L80,112C160,96,320,64,480,74.7C640,85,800,139,960,160C1120,181,1280,171,1440,170.7C1600,171,1760,181,1920,154.7C2080,128,2240,64,2400,58.7C2560,53,2720,107,2880,149.3C3040,192,3200,224,3360,234.7C3520,245,3680,235,3840,192C4000,149,4160,75,4320,58.7C4480,43,4640,85,4800,101.3C4960,117,5120,107,5280,122.7C5440,139,5600,181,5760,197.3C5920,213,6080,203,6240,208C6400,213,6560,235,6720,234.7C6880,235,7040,213,7200,192C7360,171,7520,149,7680,117.3C7840,85,8000,43,8160,53.3C8320,64,8480,128,8640,128C8800,128,8960,64,9120,69.3C9280,75,9440,149,9600,154.7C9760,160,9920,96,10080,96C10240,96,10400,160,10560,202.7C10720,245,10880,267,11040,272C11200,277,11360,267,11440,261.3L11520,256L11520,320L11440,320C11360,320,11200,320,11040,320C10880,320,10720,320,10560,320C10400,320,10240,320,10080,320C9920,320,9760,320,9600,320C9440,320,9280,320,9120,320C8960,320,8800,320,8640,320C8480,320,8320,320,8160,320C8000,320,7840,320,7680,320C7520,320,7360,320,7200,320C7040,320,6880,320,6720,320C6560,320,6400,320,6240,320C6080,320,5920,320,5760,320C5600,320,5440,320,5280,320C5120,320,4960,320,4800,320C4640,320,4480,320,4320,320C4160,320,4000,320,3840,320C3680,320,3520,320,3360,320C3200,320,3040,320,2880,320C2720,320,2560,320,2400,320C2240,320,2080,320,1920,320C1760,320,1600,320,1440,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg> --}}
    </section>


{{----- PRODUCTS -----}}  
    <section id="products">
        <div class="title-text">
            <h1>────    Our Top Picks   ────</h1>
        </div>
        <div class="product-row">
            <div class="product-col">
                <div class="prod-img">
                    <div class="overlay"></div>
                    <img src="../../foto/ayamp.JPG">
                </div>
                <h2>Ayam Bakar</h2>
                <h3>Rp 24.000</h3>
                <div class="product-desc">
                    <h3>Ayam Bakar</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="product-col">
                <div class="prod-img">
                    <div class="overlay"></div>
                    <img src="../../foto/satereguler.JPG">
                </div>
                <h2>Sate Reguler</h2>
                <h3>Rp 20.000</h3>
                <div class="product-desc">
                    <h3>Sate Reguler</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="product-col">
                <div class="prod-img">
                    <div class="overlay"></div>
                    <img src="../../foto/pattaya.JPG">
                </div>
                <h2>Pattaya</h2>   
                <h3>Rp 18.000</h3>
                <div class="product-desc">
                    <h3>Pattaya</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="product-row">
            <div class="product-col">
                <div class="prod-img">
                    <div class="overlay"></div>
                    <img src="../../foto/ayamp.JPG">
                </div>
                <h2>Ayam Bakar</h2>
                <h3>Rp 24.000</h3>
                <div class="product-desc">
                    <h3>Ayam Bakar</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="product-col">
                <div class="prod-img">
                    <div class="overlay"></div>
                    <img src="../../foto/satereguler.JPG">
                </div>
                <h2>Sate Reguler</h2>
                <h3>Rp 20.000</h3>
                <div class="product-desc">
                    <h3>Sate Reguler</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="product-col">
                <div class="prod-img">
                    <div class="overlay"></div>
                    <img src="../../foto/pattaya.JPG">
                </div>
                <h2>Pattaya</h2>   
                <h3>Rp 18.000</h3>
                <div class="product-desc">
                    <h3>Pattaya</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>

    </section>
    


    <section id="about" class="mt-20">
        <div class="about-row">
            <div class="about-img">
                <img src="../../foto/pakde2.jpeg">
            </div>
            <div class="about-col">
                <h1>Who is the Man behind Desate</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolorum harum veniam ex eaque. Expedita fugit incidunt possimus, repellendus, 
                    quasi distinctio quas, neque culpa dignissimos soluta ullam. Ut, nihil consequatur.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolorum harum veniam ex eaque. Expedita fugit incidunt possimus, repellendus, 
                    quasi distinctio quas, neque culpa dignissimos soluta ullam. Ut, nihil consequatur.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolorum harum veniam ex eaque. Expedita fugit incidunt possimus, repellendus, 
                    quasi distinctio quas, neque culpa dignissimos soluta ullam. Ut, nihil consequatur.</p>
                    <div class="hero-btn"><a href="/about">Learn More</a></div>
            </div>
        </div>
    </section>

{{----- TESTIMONIALS -----}}
    <section id="testimonials">
        <div class="title-text">
            <p>TESTIMONIALS</p>
            <h1>What Our Customers Think</h1>
        </div>
        <div class="testi-row">
            <div class="testi-col">
                <div class="user-info">
                    <i class="fa-solid fa-user"></i>
                    <div class="user-social">
                        <h4>Some User</h4>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    </div>
                </div>
                <div class="user-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi.</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
            <div class="testi-col">
                <div class="user-info">
                    <i class="fa-solid fa-user"></i>
                    <div class="user-social">
                        <h4>Random User</h4>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    </div>
                </div>
                <div class="user-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi.</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
            <div class="testi-col">
                <div class="user-info">
                    <i class="fa-solid fa-user"></i>
                    <div class="user-social">
                        <h4>Phone User</h4>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    </div>
                </div>
                <div class="user-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi.</p>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
        <h2>"Affordable & Delicious"</h2>
    </section>

{{----- SITE FOOTER -----}}
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="../../foto/logo-white.png" class="h-8" alt="DeSate Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">DeSate</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="/about" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/home" class="hover:underline">DeSate™</a>. All Rights Reserved.</span>
        </div>
    </footer>


    
</body>
</html>
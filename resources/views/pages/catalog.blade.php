<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Catalog | De'Sate</title>
</head>
<body>

  <nav class="nav-header">
    <div class="nav-option">
        <ul>
		    <li><a href="/home">Home</a></li>
			<li><a href="/menu">Menu</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/catalog">Catalog</a></li>
		</ul>
    </div>
  </nav>

    <h1 class="page-header">Product Catalog</h1>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Chicken</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/ayamp.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Ayam Penyet
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Khas pak'de</p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp18.000</p>
        </div>
      </div>

      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/ayambjl.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Ayam Bajak Laut
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Rasa Gurih </p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp20.000</p>
        </div>
      </div>
      
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/ayamcbi.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Ayam Cabe Ijo
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Pedas Mantap</p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp18.000</p>
        </div>
      </div>

      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/ayamnn.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Ayam Nano Nano
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Bumbu Spesial</p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp18.000</p>
        </div>
      </div>
      <!-- More products... -->
    </div>
  </div>
</div>
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Rice</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/Nasi.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nasi Putih
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"></p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp5.000</p>
        </div>
      </div>

      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/pattaya.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nasi Goreng Pattaya
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"></p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp18.000</p>
        </div>
      </div>
      
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/NasgorAy.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nasi Goreng Ayam
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"></p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp15.000</p>
        </div>
      </div>

      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/Nasgorbil.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nasi Goreng Bilis
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"></p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp15.000</p>
        </div>
      </div>
      
      <!-- More products... -->
    </div>
  </div>
</div>
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Sate</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/satekos.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Sate Anak Koz
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"></p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp15.000</p>
        </div>
      </div>

      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/satereg.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Sate Reguler
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"></p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp20.000</p>
        </div>
      </div>
      
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="./build/assets/satejumbo.JPG" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Sate Jumbo
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"></p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp25.000</p>
        </div>
      </div>
      <!-- More products... -->
    </div>
  </div>
</div>
</body>
</html>
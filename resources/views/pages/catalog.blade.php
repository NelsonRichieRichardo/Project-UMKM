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
  <section id="catalog-header">
    <nav>
      <h1 class="page-header">Product Catalog</h1>
        <div class="navlinks" id="catalogNav">
            <ul>
                <li><a href="/home">HOME</a></li>
                <li><a href="/menu">MENU</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/catalog">CATALOG</a></li>
            </ul>
        </div>
    </nav>
  </section>


  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8 mb-36">

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($products as $product)
          <div class="group relative">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
              <img src="./uploads/{{$product->image}}" alt="Product's Image" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{$product->name}}
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{$product->description}}</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp. {{$product->price}}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

{{----- SITE FOOTER -----}}
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
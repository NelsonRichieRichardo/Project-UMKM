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

  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">

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
</body>
</html>
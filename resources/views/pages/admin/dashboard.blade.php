<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>De'Sate | Admin</title>
</head>
<body>
    <section class="container px-4 mx-auto">
        <h1 class="page-header">Products</h1>
        <a href="{{ route('products.create') }}" class="flex justify-end">
            <button class="my-8 px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-green-700 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600" class="btn btn-primary">Add New Product</button>
        </a>
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black-500">
                                        Name
                                    </th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black-500">
                                        Category
                                    </th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black-500">
                                        Description
                                    </th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black-500">
                                        Price
                                    </th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black-500">
                                        Image
                                    </th>
                                    <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($products as $product)
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$product->name}}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$product->category}}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$product->description}}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$product->price}}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><img src="{{ asset('uploads/' . $product->image) }}" width="50" alt="Product Image"></td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning px-4 py-2 text-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" class="mx-8" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger px-4 py-2 text-white transition-colors duration-300 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Delete</button>
                                        </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
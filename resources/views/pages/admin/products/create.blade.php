<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>De'Sate | Admin</title>
</head>
<body class="flex h-screen items-center justify-center">
    <div class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md">
        <h2 class="text-lg font-semibold text-gray-700 capitalize">Add Product</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <label class="text-gray-700" for="name">Name</label>
                <input type="text" name="name" class="form-control border rounded" required>
            </div>
            <div class="form-group grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <label class="text-gray-700" for="category">Category</label>
                <select name="category" class="border rounded"id="category">
                    <option value="makanan" selected>Foods</option>
                    <option value="minuman">Drinks</option>
                </select>
            </div>
            <div class="form-group grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <label class="text-gray-700" for="description">Description</label>
                <textarea name="description" class="form-control border rounded"></textarea>
            </div>
            <div class="form-group grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <label class="text-gray-700" for="price">Price</label>
                <input type="number" name="price" class="form-control border rounded" step="0.01" required>
            </div>
            <div class="form-group grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <label class="text-gray-700" for="image">Image</label>
                <input type="file" name="image" class="form-control border rounded">
            </div>

            <div class="flex justify-end mt-6">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    <button class="mx-8 px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600" onclick="event.preventDefault(); window.location.href = '/admin'">Cancel</button>
                </form>
                <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600" type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</body>
</html>

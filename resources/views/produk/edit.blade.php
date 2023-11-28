<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50">
    <div class="p-6">
        <h1 class="text-2xl font-semibold text-gray-800">Edit Produk</h1>
        <form action="{{ route('update-produk', $produk->id_produk)}}" method="post">
            @csrf
            @method('PUT')
        <div class="mt-6">
            <label for="nama_produk" class="block text-sm font-medium text-gray-600">Nama Produk</label>
            <input type="text" id="nama_produk" name="nama_produk" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500 " value="{{old('nama_produk', $produk->nama_produk)}}">
            <label for="merk_produk" class="block text-sm font-medium text-gray-600">Brand (Merk)</label>
            <input type="text" id="merk_produk" name="merk_produk" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500"  value="{{old('merk_produk', $produk->merk_produk)}}">
            <label for="harga" class="block text-sm font-medium text-gray-600">Harga Produk</label>
            <input type="text" id="harga" name="harga" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500" value="{{old('harga', $produk->harga)}}">

            <button type="submit" name="" class="mt-4 mb-2 rounded-lg inline-block text-white text-base py-2 px-4 bg-blue-600">Edit Produk</button>
        </div>
        </form>
    </div>

</body>
</html>

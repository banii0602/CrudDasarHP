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
        <h1 class="text-2xl font-semibold text-gray-800">Produk</h1>
        <form action="{{ route('transaksi-store') }}" method="post">
            @csrf
        <div class="mt-6">
            <label for="jumlah_produk" class="block text-sm font-medium text-gray-600">Jumlah Produk</label>
            <input type="text" id="jumlah_produk" name="jumlah_produk" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500 ">
            <label for="tgl_transaksi" class="block text-sm font-medium text-gray-600">Tanggal Transaksi</label>
            <input type="date" id="tgl_transaksi" name="tgl_transaksi" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500">
            <label for="id_produk" class="block text-sm font-medium text-gray-600">Nomor Produk</label>
            <input type="text" id="id_produk" name="id_produk" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500">
            <label for="id_user" class="block text-sm font-medium text-gray-600">Nomor User</label>
            <input type="text" id="id_user" name="id_user" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500">

            <button type="submit" name="" class="mt-4 mb-2 rounded-lg inline-block text-white text-base py-2 px-4 bg-blue-600">Tambah Transaksi</button>

        </div>
    </form>
    </div>

</body>
</html>

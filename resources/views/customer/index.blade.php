<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="home">
        <nav class="absolute top-0 left-0 right-0 bg-white p-6">
        <div class="container mx-auto font-['Poppins']">
            <div class="flex items-center justify-between">
                <div class="font-medium text-black">KOCAK</div>
                    <div class="flex items-center text-black font-medium space-x-4">
                    <a href="/login.html" class="block py-2 px-4 text-red-500 hover:bg-red-600 hover:text-white rounded-md">Log out</a>
                </div>
            </div>
        </div>
      </nav>

        @forelse ($produk as $produks)
        <div class="container mx-auto mt-24 grid grid-cols-3 gap-16">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="p-4 px-6 rounded">
                <p class="font-bold text-xl mb-2">{{$produks->nama_produk}}</p>
                <p class="text-gray-700 text-base">Merek: {{$produks->merk_produk}}</p>
                <p class="text-gray-700 text-base">Harga: {{$produks->harga}}</p>
                </div>
            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="p-4 px-6 rounded">
                <p class="font-bold text-xl mb-2">{{$produks->nama_produk}}</p>
                <p class="text-gray-700 text-base">Merek: {{$produks->merk_produk}}</p>
                <p class="text-gray-700 text-base">Harga: {{$produks->harga}}</p>
                </div>
            </div>


            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="p-4 px-6 rounded">
                <p class="font-bold text-xl mb-2">{{$produks->nama_produk}}</p>
                <p class="text-gray-700 text-base">Merek: {{$produks->merk_produk}}</p>
                <p class="text-gray-700 text-base">Harga: {{$produks->harga}}</p>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-10 grid grid-cols-3 gap-16">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="p-4 px-6 rounded">
                <p class="font-bold text-xl mb-2">{{$produks->nama_produk}}</p>
                <p class="text-gray-700 text-base">Merek: {{$produks->merk_produk}}</p>
                <p class="text-gray-700 text-base">Harga: {{$produks->harga}}</p>
                </div>
            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="p-4 px-6 rounded">
                <p class="font-bold text-xl mb-2">{{$produks->nama_produk}}</p>
                <p class="text-gray-700 text-base">Merek: {{$produks->merk_produk}}</p>
                <p class="text-gray-700 text-base">Harga: {{$produks->harga}}</p>
                </div>
            </div>


            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="p-4 px-6 rounded">
                <p class="font-bold text-xl mb-2">{{$produks->nama_produk}}</p>
                <p class="text-gray-700 text-base">Merek: {{$produks->merk_produk}}</p>
                <p class="text-gray-700 text-base">Harga: $99.99</p>
                </div>
            </div>
            @empty

        @endforelse
        </div>
    </div>
</body>
</html>

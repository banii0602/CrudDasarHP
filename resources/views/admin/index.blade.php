<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="flex h-screen font-['Poppins']">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 h-screen flex flex-col">
            <div class="flex items-center justify-center mt-6">
                <span class="text-white text-xl font-semibold ml-2">Hp Gayming</span>
            </div>
            <nav class="mt-6 h-full flex flex-col">
                <div class="h-full">
                    <a href="{{ route('dashboardadmin') }}" class="block py-2 px-4 text-white hover:text-white bg-gray-600 rounded-md">Dashboard</a>
                    <a href="{{ route('produk') }}" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">Produk</a>
                    <a href="{{ route('transaksi') }}" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">Transaksi</a>
                    <a href="{{ route('user') }}" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">User</a>
                </div>
                <div>
                    <a href="#" class="block py-2 px-4 mb-4 text-red-500 hover:bg-red-600 hover:text-white rounded-md">Log out</a>
                </div>
            </nav>
            </div>

        <!-- Content -->
        <div class="flex-1 overflow-x-hidden overflow-y-auto bg-blue-100">
            <!-- Your main content goes here -->
            <div class="p-6 ">
                <h1 class="text-2xl font-semibold text-gray-800 mb-6">Selamat datang admin</h1>
                <h1 class="text-2xl font-semibold text-gray-800 pb-3">User</h1>
                <!-- Your content goes here -->

                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg">
                        <thead>
                            <tr>
                                <th class="border py-2 px-4 border-b">ID</th>
                                <th class="border py-2 px-4 border-b">Username</th>
                                <th class="border py-2 px-4 border-b">Password</th>
                                <th class="border py-2 px-4 border-b">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user as $users)
                            <tr>
                                <td class="border py-2 px-4 border-b">{{$nomor++}}</td>
                                <td class="border py-2 px-4 border-b">{{$users->nama_user}}</td>
                                <td class="border py-2 px-4 border-b">{{$users->password}}</td>
                                <td class="border py-2 px-4 border-b">{{$users->role}}</td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="p-6">
                <div class="overflow-x-auto">
                    <div class="grid grid-cols-2 gap-6">
                        <h1 class="text-2xl font-semibold text-gray-800 pb-3">Produk</h1>
                        <h1 class="text-2xl font-semibold text-gray-800 pb-3">Transaksi</h1>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg">
                            <thead>
                                <tr>
                                    <th class="border py-2 px-4 border-b">NO.</th>
                                    <th class="border py-2 px-4 border-b">Name</th>
                                    <th class="border py-2 px-4 border-b">Brand</th>
                                    <th class="border py-2 px-4 border-b">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($produk as $produks)
                                <tr>
                                    <td class="border py-2 px-4 border-b">{{$nomor++}}</td>
                                    <td class="border py-2 px-4 border-b">{{$produks->nama_produk}}</td>
                                    <td class="border py-2 px-4 border-b">{{$produks->merk_produk}}</td>
                                    <td class="border py-2 px-4 border-b">{{$produks->harga}}</td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>

                        <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg">
                            <thead>
                                <tr>
                                    <th class="border py-2 px-4 border-b">Jumlah Produk</th>
                                    <th class="border py-2 px-4 border-b">Tgl Transaksi</th>
                                    <th class="border py-2 px-4 border-b">No Produk</th>
                                    <th class="border py-2 px-4 border-b">No User</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($transaksi as $data)
                                <tr>
                                    <td class="border py-2 px-4 border-b">{{$data->jumlah_produk}}</td>
                                    <td class="border py-2 px-4 border-b">{{$data->tgl_transaksi}}</td>
                                    <td class="border py-2 px-4 border-b">{{$data->id_produk}}</td>
                                    <td class="border py-2 px-4 border-b">{{$data->id_user}}</td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
</html>

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
    <div class="flex h-screen ">
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
                    <a href="#" class="block py-2 px-4 text-red-500 mb-4 hover:bg-red-600 hover:text-white rounded-md">Log out</a>
                </div>
            </nav>
            </div>

        <!-- Content -->
        <div class="flex-1 overflow-x-hidden overflow-y-auto bg-blue-100">
            <!-- Your main content goes here -->
            <div class="p-6 ">
                <h1 class="text-2xl font-semibold text-gray-800">Transaksi</h1>
                <div class="btn">
                    <a href="{{ route('transaksi-create') }}" class=" mt-4 mb-2 rounded-lg inline-block text-white text-xl py-2 px-4 bg-blue-600">Tambah Data Transaksi</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg">
                        <thead>
                            <tr>
                                <th class="border py-2 px-4 border-b">Jumlah Produk</th>
                                <th class="border py-2 px-4 border-b">Tgl Transaksi</th>
                                <th class="border py-2 px-4 border-b">No Produk</th>
                                <th class="border py-2 px-4 border-b">No User</th>
                                <th class="border py-2 px-4 border-b">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($transaksi as $data)
                                <td class="border py-2 px-4 border-b">{{$data->jumlah_produk}}</td>
                                <td class="border py-2 px-4 border-b">{{$data->tgl_transaksi}}</td>
                                <td class="border py-2 px-4 border-b">{{$data->id_produk}}</td>
                                <td class="border py-2 px-4 border-b">{{$data->id_user}}</td>
                                <td class="flex py-2 px-4 border-b justify-around">
                                    <a href="{{ route('edit-transaksi', $data->jumlah_produk) }}" class="fa-solid fa-pen-to-square text-2xl text-blue-500 hover:text-blue-600"></i></a>
                                    <form  class=" inline-block" action="{{ route('destroytransaksi', $data->jumlah_produk) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="fa-solid fa-trash text-2xl text-red-500 hover:text-red-600"></i></button>
                                </form>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

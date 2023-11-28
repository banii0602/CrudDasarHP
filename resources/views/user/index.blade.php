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
                <h1 class="text-2xl font-semibold text-gray-800">User</h1>
                <div class="btn">
                    <a href="{{ route('user-create') }}" class=" mt-4 mb-2 rounded-lg inline-block text-white text-xl py-2 px-4 bg-blue-600">Tambah User</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg">
                        <thead>
                            <tr>
                                <th class="border py-2 px-4 border-b">ID</th>
                                <th class="border py-2 px-4 border-b">Username</th>
                                <th class="border py-2 px-4 border-b">Password</th>
                                <th class="border py-2 px-4 border-b">Role</th>
                                <th class="border py-2 px-4 border-b">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($user as $users)
                                <td class="border py-2 px-4 border-b">{{$nomor++}}</td>
                                <td class="border py-2 px-4 border-b">{{$users->nama_user}}</td>
                                <td class="border py-2 px-4 border-b">{{$users->password}}</td>
                                <td class="border py-2 px-4 border-b">{{$users->role}}</td>
                                <td class="flex py-2 px-4 border-b justify-around">
                                    <a href="{{ route('user-edit', $users->id_user) }}" class="fa-solid fa-pen-to-square text-2xl text-blue-500"></i></a>
                                    <form  class=" inline-block" action="{{ route('destroyuser', $users->id_user) }}" method="post">
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

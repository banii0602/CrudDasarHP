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
        <h1 class="text-2xl font-semibold text-gray-800">User</h1>
        <form action="{{ route('user-update', $user->id_user)}}" method="post">
            @csrf
            @method('PUT')
        <div class="mt-6">
            <label for="nama_user" class="block text-sm font-medium text-gray-600">Username</label>
            <input type="text" id="nama_user" name="nama_user" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500 " value="{{old('username', $user->nama_user)}}">

            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500" value="{{old('password', $user->password)}}">

            <label for="role" class="block text-sm font-medium text-gray-600">Role</label>
            <select id="role" name="role" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500">
                <option value="Admin">Admin</option>
                <option value="Customer">User</option>
            </select>

            <button type="submit" name="submit" class="mt-4 mb-2 rounded-lg inline-block text-white text-base py-2 px-4 bg-blue-600">Tambah User</button>

        </div>
        </form>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{ route('login-proses') }}" method="POST">
            @csrf
            <div>
              <label for="nama_user" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
              <div class="mt-2">
                <input id="nama_user" name="nama_user" type="nama_user" autocomplete="nama_user" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('nama_user')
                <small  class=" text-red-700 italic">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>

              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('password')
                <small  class=" text-red-700 italic">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <div>
              <button type="submit" href="#" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                <a class="flex justify-center text-red-600 py-3" href="{{ route('register') }}"><small>Belum mempunyai akun? regist disini</small></a>
            </div>
          </form>
        </div>
        @if($message = Session::get('failed'))

        <p class=" text-red-700 italic">{{ $message }}</p>

        @endif
      </div>
</body>
</html>

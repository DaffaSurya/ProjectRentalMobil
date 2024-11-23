<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="div-body">
        <div class="div-img">
            <img src="https://images.unsplash.com/photo-1696238670344-eb2e92114e81?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-regis">
        </div>
    
        <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl">Register Started Today...</h1>

      <p class="mt-4 text-gray-500">
        Silahkan Register untuk membuat akun agar dapat mengakses beberapa pages yang ada..
      </p>
    </div>

    <form action="{{route('Regis.post')}}" class="mx-auto mb-0 mt-8 max-w-md space-y-4" method="post">
      @csrf
      <div>
        <label for="email" class="sr-only">Nama</label>

        <div class="relative">
          <input
            type="text"
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
            placeholder="Masukkan Nama "
            name="nama"
          />
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">Email</label>

        <div class="relative">
          <input
            type="email"
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
            placeholder="Masukkan email anda"
            name="email"
          />
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">Password</label>

        <div class="relative">
          <input
            type="password"
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
            placeholder="Masukkan password anda"
            name="password"
          />
        </div>
      </div>

      <div class="role-regis">
        <label style="color: gray;">Masukkan role anda:</label>

        <select name="role" id="role" class="select">
        <option value="User">User</option>
        <option value="Admin">Admin</option>
        </select>
      </div>

      <!-- css -->
        <style>
            .role-regis {
                font-size: smaller;
                display: flex;
                margin-left: 15px;
            }

            .select {
                margin-left: 10px;
            }
        </style>
      <!-- css end -->

      <div class="flex items-center justify-between" style="margin-left: 15px;">
        <p class="text-sm text-gray-500">
         sudah punya akun?
          <a class="underline" href="{{route('Login')}}">Login</a>
        </p>

        <button
          type="submit"
          class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
        >
          Sign in
        </button>
      </div>
    </form>
  </div>
 
    </div>
</body>
</html>
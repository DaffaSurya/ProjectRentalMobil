<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
  ` <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
   `<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
   @vite('resources/css/app.css')
</head>
<body>
    <div>
    <!-- navbar car -->
    <div class="div-navbar">
      <!-- div-logo -->
    <div class="logo-navbar">
    <p>Rent4car</p>
    </div>
   <!-- div logo end -->
    <div class="div-navbar-list">
      <div class="div-list-nav">
    <a href="{{route('Home')}}">
      <p>Dashboard</p>
      </a>
      <p>about us</p>
      <a href="{{route('coin.user')}}">
      <p style="color:blue;">Lihat Koin</p>
      </a>
      </div>
    </div>

    <div class="div-button-nav">
            @auth
                <!-- Jika user sudah login -->

                <div class="after-login">
                  <img src="{{asset('profile/user.png')}}" alt="" class="img-profile">
                  <p>Welcome, {{Auth::user()->name}}</p>
                </div>
                <form action="{{route('Logout')}}" method="post">
                  @csrf
                <button class="button-Daftar">
                  Logout
                </button>
                </form>
            @else

            <a href="{{route('register.user')}}">
            <button class="button-Daftar">
              Sign-Up
             </button>
            </a> 

      <a href="{{route('Login')}}">
      <button class="button-Login">
         Masuk
      </button>
      </a>
            @endauth
      
    </div>
    </div>
    <!-- navbar car end -->

    <!-- Topup content -->
    
    <!-- topup content end -->
    </div>
</body>
</html>
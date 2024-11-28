<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout Example</title>
    <link rel="stylesheet" href="koin.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
   @vite('resources/css/app.css')
</head>
<body>
    <div>
        <!-- navbar -->
     <div class="div-navbar">
      <!-- div-logo -->
    <div class="logo-navbar">
    <p>Rent4car</p>
    </div>
   <!-- div logo end -->
    <div class="div-navbar-list">
      <div class="div-list-nav">
      <p style="color: blue;">Dashboard</p>
      <p>about us</p>
      <a href="{{route('coin.user')}}">
      <p>Lihat Koin</p>
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
        <!-- navbar end -->

    <!-- Top Up content  -->
    <div class="container">
        <header class="header">
            <h1>Top Up Koin</h1>
            <p>Silahkan Top Up koin untuk sewa Mobil</p>
        </header>

        <div class="grid">
            <!-- Card 1 -->
            <div class="card">
                <div class="card-content">
                    <h2>Koint 100</h2>
                    <p>This is a description of the first item. It gives more details about the card.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <div class="card-content">
                    <h2>Koint 100</h2>
                    <p>This is a description of the second item. It gives more details about the card.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card">
                <div class="card-content">
                    <h2>Koint 100</h2>
                    <p>This is a description of the third item. It gives more details about the card.</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="card">
                <div class="card-content">
                    <h2>Card Title 4</h2>
                    <p>This is a description of the fourth item. It gives more details about the card.</p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="card">
                <div class="card-content">
                    <h2>Card Title 5</h2>
                    <p>This is a description of the fifth item. It gives more details about the card.</p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="card">
                <div class="card-content">
                    <h2>Card Title 6</h2>
                    <p>This is a description of the sixth item. It gives more details about the card.</p>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="card">
                <div class="card-content">
                    <h2>Card Title 7</h2>
                    <p>This is a description of the seventh item. It gives more details about the card.</p>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="card">
                <div class="card-content">
                    <h2>Card Title 8</h2>
                    <p>This is a description of the eighth item. It gives more details about the card.</p>
                </div>
            </div>
            <!-- Card 9 -->
            <div class="card">
                <div class="card-content">
                    <h2>Card Title 9</h2>
                    <p>This is a description of the ninth item. It gives more details about the card.</p>
                </div>
            </div>
        </div>

        <!-- Confirm Button -->
        <button class="confirm-btn">Confirm</button>
    </div>

    <!-- top up content end  -->
    </div>
</body>
</html>

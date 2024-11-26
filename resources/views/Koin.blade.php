<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
  ` <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
   `<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ asset('Coin.css') }}" rel="stylesheet" type="text/css">
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
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h3>Koin Saya</h3>
            </div>
            <div class="card-body text-center">
                <h4>Total Koin</h4>
                <div class="coin-balance my-4">
                    <span id="coin-count"></span> Koin
                </div>
                <button class="btn btn-success my-2" id="topup-btn">Top Up Koin</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="topupModal" tabindex="-1" aria-labelledby="topupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="topupModalLabel">Top Up Koin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="topup-form" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="topup-amount" class="form-label">Jumlah Koin</label>
                            <input type="number" class="form-control" id="topup-amount" name="amount" min="1" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Top Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- topup content end -->
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout Example</title>
    <link rel="stylesheet" href="koin.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
      <a href="{{ route('Dashboard')}}">
      <p>Dashboard</p>
      </a>
      <a href="{{route('coin.user')}}">
      <p style="color: blue;">Lihat Koin</p>
      </a>
      <a href="{{route('History')}}">
        <p>History rent</p>
      </a>
      <a href="{{route('History.pay')}}">
        <p>History Payment</p>
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

            <h1>Total Saldo anda : {{$totalcoin}} koin</h1>
        </header>
        
        <div class="grid">
            <!-- Card 1 -->   
            @foreach($data as $data)
            <div class="card" data-aos= "fade-up">
          
                <div class="card-content">
                  <a href="{{route('Topup.user', $data->id)}}">
                    <h2>{{$data->Input_koin}} Koin</h2>
                    <p>Rp. {{$data->Harga_koin}}</p>
                    </a>
                </div>     
            </div>
            @endforeach
            <!-- Card 2 -->
            <!-- Card 3 -->

            <script>
           AOS.init();
            </script>
        
        </div>
    </div>

    <!-- top up content end  -->
    </div>
</body>
</html>

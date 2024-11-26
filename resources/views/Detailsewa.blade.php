<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Style.css') }}">
    <link rel="stylesheet" href="{{ asset('Sewa.css') }}">
    @vite('resources/css/app.css')
    <title>Detail Sewa</title>
</head>
<body class="body-sewa">
    <div>
        <!-- navbar end -->
    <div class="div-navbar">
      <!-- div-logo -->
    <div class="logo-navbar">
    <p>Rent4car</p>
    </div>
   <!-- div logo end -->
    <div class="div-navbar-list">
      <div class="div-list-nav">
        <a href="{{route('Home')}}">
      <p style="color: blue;">Dashboard</p>
      </a>
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

    <!-- detail penyewaan -->
    <div class="container">
        <!-- Bagian Kiri -->
        <div class="left-section">
            <img src="/uploads/{{$data->photo}}" alt="Toyota Fortuner 2024">
        </div>
        <!-- Bagian Kanan -->
        <div class="right-section">
            <h3>{{$data -> merk}}</h3>
            <ul>
                <li>{{$data -> jumlah_kapasitas}} kapasitas orang</li>
                <li>{{$data -> No_plat}}</li>
                <li>RPM At Max Power: 3400 RPM</li>
                <li>RPM At Max Torque: 1600–2000 RPM</li>
                <li>Kapasitas Tangki Bahan Bakar: 80 L</li>

             <h2>Points: {{$data -> points}} untuk 1 hari sewa </h2>
            </ul>
            <form>
                <div class="form-group">
                    <label for="start_date">Start date:</label>
                    <input type="date" id="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">End date:</label>
                    <input type="date" id="end_date">
                </div>
                <div class="coins">
                    <span>300 coins</span>
                </div>
                <button type="submit" class="confirm-btn">Confirm</button>
            </form>
        </div>
    </div>
    <!-- detail penyewaan end -->
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('Rental.css') }}" type="text/css">
    <title>Penyewaan</title>
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
      <p style="color: blue;">Dashboard</p>
      </a>
      <a href="{{route('coin.user')}}">
      <p>Lihat Koin</p>
      </a>
      <a href="{{route('History')}}">
      <p>History Rent</p>
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
        <!-- navbar end  -->
    <!-- form detail sewa user  -->
    <div class="div-Detailrental">
        <div class="detailrental">
            <!-- column 1 -->
           <div class="div-column1">
            <h1>Merk Mobil:</h1>
            <!-- <input type="text" name="merk" value="{{$data->merk}}"> -->
            <h2>{{$data->merk}}</h2>
            <h2></h2>
           </div>
            <!-- column 1 end -->

            <!-- column 2 -->
           <div class="div-column1">
                <h1>Jumlah Kapasitas</h1>
                <!-- <input type="text" name="kapasitas" value="{{$data->kapasitas}}">  -->
                <h2>{{$data->kapasitas}}</h2>
            </div>
         <!-- column 2 end -->

         <!-- column 3 -->
         <div class="div-column1">
                <h1>Tanggal mulai sewa</h1>
                <!-- <input type="date" name="start_date" value="{{$formatstartdate}}"> -->
                <h2>{{$formatstartdate}}</h2>
            </div>
         <!-- column 3 end -->

         <!-- column 4 --> 
         <div class="div-column1">
                <h1>Tanggal akhir sewa</h1>
                <!-- <input type="d" name="end_date" value="{{$formatenddate}}"> -->
                <h2>{{$formatenddate}}</h2>
            </div>
         <!-- column 4 end -->
        </div>
    </div>
    <!-- form isi detail sewa -->

    
        <div class="div-sewamobil">
            <div class="div-datasewamobil">
                 <div class="div-getdata">
                    <h1>Apakah data yang diatas sudah sesuai dengan yang anda cantumkan? jika sudah apakah anda membayar <span>{{$totalCoins}} Koin</span></h1>
                    <h1>Total koin yang anda miliki: {{$PointUser}} Koin</h1>
                 </div>

                 <div class="confirm-Lastrent">
                    <form action="{{route('pembayaran.mobil', $data -> id)}}" method="post">
                      @csrf
                    <button class="button-confirm" type="submit">Bayar</button>
                    </form>
                 </div>
            </div>
        </div>

    <!-- footer -->
    <footer class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <div class="flex justify-center text-teal-600 sm:justify-start">
       <p style="font-size: 28px; font-weight:500; color:black;">RentCar</p>
      </div>

      <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
        Copyright &copy; 2024. All rights reserved.
      </p>
    </div>
  </div>
</footer>
    <!-- footer end -->
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koin.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('History.css') }}" rel="stylesheet" type="text/css">
    <title>HistoryRental</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
       <!-- navbar -->
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
      <p>Lihat Koin</p>
      </a>
      <a href="{{route('History')}}">
        <p style="color: blue;">History rent</p>
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

       <!-- content -->
    <div class="div-dataHistory">

<div class="overflow-x-auto rounded-lg border border-gray-200">
  <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
    <thead class="ltr:text-left rtl:text-right">
      <tr>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">merk</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Kapasitas</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nomer Plat</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Start_date</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">end_date</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Telusuri</th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
      @foreach($history as $key => $rental)
      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$rental->merk}}</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$rental->kapasitas}}</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$rental->no_plat}}</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$rental->start_date}}</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$rental->end_date}}</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
         <a href="{{route('Sewa.mobil', $rental->id)}}">Lihat Mobil</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
    </div>
       <!-- content end  -->
    </div>
</body>
</html>
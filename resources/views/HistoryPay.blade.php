<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset ('History.css') }}" type="text/css">
    <title>History Transaksi</title>
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
      <a href="{{route('Dashboard')}}">
      <p>Dashboard</p>
      </a>
      <a href="{{route('coin.user')}}">
      <p>Lihat Koin</p>
      </a>
      <a href="{{route('History')}}">
      <p>History Rent</p>
      </a>
      <a href="{{route('History.pay')}}">
        <p style="color: blue;">History Payment</p>
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

        <!-- content-->
      <div class="div-contentpayment">
        <div class="div-Subjudul">
        <h1>History Transaksi Sewa Mobil</h1>
        </div>
        <div class="div-datapay">
        
<div class="overflow-x-auto" style="border: 1px solid black; border-radius: 12px;">
  <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
    <thead class="ltr:text-left rtl:text-right">
      <tr>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Merk</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Coinspay</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status Pembayaran</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Rental Status</th>
        <th class="px-4 py-2"></th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
      @foreach($rent as $data)
      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$data->merk}}</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$data->Coinspay}}</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$data->paymentstatus}}</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$data->Rentstatus}}</td>
        <td class="whitespace-nowrap px-4 py-2">
          <form action="{{route('Historypay.post', $data->id)}}" method="post"
           class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
          >
          @csrf
          <button type="submit">
          Delete
          </button>
          </form>  
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
        </div>
      </div>
        <!-- content end -->
    </div>
</body>
</html>
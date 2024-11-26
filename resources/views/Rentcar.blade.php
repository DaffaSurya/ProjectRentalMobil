<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
  @vite('resources/css/app.css')
  <title>Rentcar</title>
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
    <!-- navbar car end -->

    <!-- Rent car -->
    <div style="height: 70vh;">

      <div id="controls-carousel" class="relative w-full" data-carousel="static" style="height: 80%">
        <!-- Carousel wrapper -->
        <div class="relative h-80 overflow-hidden rounded-lg md:h-96">
          <!-- Item 1 -->
          @foreach($cars as $car)
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="div-datamobil">
              <div class="div-carouselRent">
                <div class="div-imageRent">
                  <img src="/uploads/{{$car->photo}}" alt="" class="img-rent">
                </div>
              </div>
              <div class="div-merkrent">
                <p>{{$car -> merk}}</p>
              </div>
              <div class="div-buttonrent">
                <a href="{{ route('Detail.sewa', $car -> id) }}">
                <button class="button-rent">
                  Rental ->
                </button>
                </a>
              </div>
            </div>
          </div>

          @endforeach
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </div>
    <!-- Rent car end -->
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome  </title>
   <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
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

   <!-- banner mobil -->
   <div class="div-banner">
      <div class="div-carBg">
         <div class="div-bgcar">
          <img src="{{ asset('images/car2.png')}}">
         </div>
      </div>

      <div class="div-paragraph">
         <div class="article-banner">
         <p style="font-size: xx-large; font-weight:600; font-family:Arial, Helvetica, sans-serif;">
            Welcome to Rent4Car,</p>
          <p style="width: 80%;">"Experience Safe & Trusted Car Rentals!"With over 10,000+ satisfied customer reviews, we’re here to meet all your travel needs. A wide selection of cars, professional service, and a quick process—everything designed for your convenience.</p>
          <a href="{{route('Catalog.Rent')}}">
          <button class="button-banner">Rent</button>
          </a>
         </div>
      </div>
   </div>
   <!-- banner mobil end -->

   <!-- Paraf About us -->
    <div class="p-aboutus">
    <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
      About us
    </h2>
    </div>
   <!-- paraf About us end -->

   <!-- about us -->
      <div class="div-aboutUs">
         <div class="aboutUs">      
<div id="controls-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="carousel">
               <div class="carousel-slide">
                     <img src="{{asset('profile/Daffa_pp.jpg')}}"  class="profil">
               </div>   
               
               <div class="carousel-div2">
                <p class="p-nama">Daffa Surya Arrayan, 434231042</p>
                <p class="p-deskrip">Sebagai full stack web developer , daffa bertugas untuk melihat dan memeriksa bagian frontend 
                <p class="text-center" style="font-family:Arial, Helvetica, sans-serif"> dan backend agar sesuai seperti yang diinginkan </p>
                </p>
               </div>
            </div>
        </div>
        <!-- Item 2 -->
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <div class="carousel">
               <div class="carousel-slide">
                     <img src="{{asset('profile/Fahad_pp.jpg')}}"  class="profil">
               </div>        
               <div class="carousel-div2">
                <p class="p-nama">Fahad Usman, 434231042</p>
                <p class="p-deskrip">Fahad sebagai backend bertugas membuat database dan table untuk sistem penyewaaan Mobil</p>
                <p class="text-center" style="font-family:Arial, Helvetica, sans-serif;"> dan berkontribusi dalam desain</p>
               </div>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <div class="carousel">
               <div class="carousel-slide">
                     <img src="{{asset('profile/NDOG.jpg')}}"  class="profil">
               </div>   
               
               <div class="carousel-div2">
                <p class="p-nama">Ahmad Syauqi Nuri, 434231088</p>
                <p class="p-deskrip">Syauqi memiliki peran dalam mendesain dan membuat beberapa Layout Frontend dalam website</p>
                <p class="text-center" style="font-family:Arial, Helvetica, sans-serif;">dan berkontribusi dalam database</p>
               </div>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <div class="carousel">
               <div class="carousel-slide">
                     <img src="{{asset('profile/Angga_pp.jpg')}}"  class="profil">
               </div>   
               
               <div class="carousel-div2">
                <p class="p-nama">Awaulangga , 434231042</p>
                <p class="p-deskrip">Angga memiliki peran dalam Figma dan membantu syauqi dalam beberapa Layout Frontend di</p>
                <p class="text-center" style="font-family:Arial, Helvetica, sans-serif">website dan berkontribusi dalam database bersama Fahad</p>
               </div>
            </div>
        </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

         </div>
      </div>
      </div>
<!-- about us end -->

<!-- Cars Collection -->
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Cars Collection</h2>

      <p class="mx-auto mt-4 max-w-md text-gray-500">
        Menampilkan Beberapa Mobil yang Menarik dan bisa disewa dengan Coin yang bisa kalian kumpulkan.
      </p>
    </header>

    <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1694278963099-92070bcc0f3b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FyJTIwYm13fGVufDB8fDB8fHww"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1661023794309-483649098bc5?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />

        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1541443131876-44b03de101c5?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />
        </a>
      </li>

      <li>
        <a href="#" class="group block overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1701806244887-391677f29718?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />
        </a>
      </li>
    </ul>
  </div>
</section>

<!-- cars collection end -->

<!-- Testimonial  -->
<section class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
    <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
      Read trusted reviews from our customers
    </h2>

    <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
      <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
        <div class="flex items-center gap-4">
          <img
            alt=""
            src="https://th.bing.com/th/id/OIP.LmoGr4n6USA-x_EblBgaIQHaLH?rs=1&pid=ImgDetMain"
            class="size-14 rounded-full object-cover"
          />

          <div>
            <div class="flex justify-center gap-0.5 text-green-500">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
            </div>

            <p class="mt-0.5 text-lg font-medium text-gray-900">Han so hee</p>
          </div>
        </div>

        <p class="mt-4 text-gray-700">
        좋은 서비스, 웹 사이트는 매력적이고 접근하기 쉽고 다양한 자동차 선택, 코인 기능 만 원으로 액세스 할 때 종종 문제가되는 이유는 무엇입니까?
        </p>
      </blockquote>

      <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
        <div class="flex items-center gap-4">
          <img
            alt=""
            src="https://potensikita.com/wp-content/uploads/2019/08/image-20.png"
            class="size-14 rounded-full object-cover"
          />

          <div>
            <div class="flex justify-center gap-0.5 text-green-500">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
            </div>

            <p class="mt-0.5 text-lg font-medium text-gray-900">Hideto Furuya</p>
          </div>
        </div>

        <p class="mt-4 text-gray-700">
        Great service, the use of the coin feature makes it easy for customers to rent cars and cars according to the web
        </p>
      </blockquote>

      <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
        <div class="flex items-center gap-4">
          <img
            alt=""
            src="https://th.bing.com/th/id/OIP.3l5HZQC9_NBiiMtpFEoHrgAAAA?rs=1&pid=ImgDetMain"
            class="size-14 rounded-full object-cover"
          />

          <div>
            <div class="flex justify-center gap-0.5 text-green-500">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                />
              </svg>
            </div>

            <p class="mt-0.5 text-lg font-medium text-gray-900">Azizi Asadel</p>
          </div>
        </div>

        <p class="mt-4 text-gray-700">
          meskipun pelayanan bagus dan mobil yang disediakan beragam Tapi yang menjadi pertanyaan kenapa tidak langsung pakai uang saja?
        </p>
      </blockquote>
    </div>
  </div>
</section>

<!-- testimonial end -->


<!-- footer -->
<footer class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <div class="flex justify-center  sm:justify-start">
        <div class="logo-navbar">
        <p>Rent4car</p>
        </div>
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
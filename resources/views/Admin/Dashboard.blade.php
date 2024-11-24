<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Style1.css') }}">
    @vite('resources/css/app.css')
    <title>DashboardAdmin</title>
</head>
<body>
    <div style="background-color: #f5f5f5;">
      <!-- navbar -->
    <div class="div-navbar">
    <div class="logo-navbar">
        <p>RentCar</p>
    </div>
    </div>
    <!-- navbar end -->

   <!-- content -->
        <div class="div-content">
            <!-- side bar -->
            <div class="sidebar">
               <p style="margin-top: 40px;">Dashboard</p>
               <p>Tambah Mobil</p>
            </div>

        <!-- sidebar end -->
        <!-- content 1 -->
        <div class="div-container1">
            <!-- section content -->
        <div class="section1">
        <section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-7" style="background-color:white; border-radius: 12px;">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
      <div>
        <div class="max-w-lg md:max-w-none">
          <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
           Get where you need to go with our service
          </h2>

          <p class="mt-4 text-gray-700">
          Budget Friendly car rentals for road trips, city visits, and more.Book now and start exploring
          </p>
        </div>
      </div>

      <div>
        <img
          src="https://plus.unsplash.com/premium_photo-1661293849183-56b763a87b9c?q=80&w=1769&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="rounded"
          alt=""
        />
      </div>
    </div>
  </div>
</section>
        </div>
 <!-- section content end --> 

 <!-- table -->
          <div class="table">
    

<div class="overflow-x-auto rounded-lg border border-gray-200" style="width: 90%; margin-left: 40px; margin-top: 10px;">
  <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
    <thead class="ltr:text-left rtl:text-right">
      <tr>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Client Name</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Car Type</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Car Number</th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">John Doe</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Honda Brio</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">L 3112 Ren</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">deal</td>
      </tr>

      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Herman douglas</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Honda Jazz</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">L 1322 END</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">pending</td>
      </tr>

      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Wanto Jayo</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Xenia</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">B 4561 RL</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Pending</td>
      </tr>

      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Wanto Jayo</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Xenia</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">B 4561 RL</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Pending</td>
      </tr>

      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Wanto Jayo</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Xenia</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">B 4561 RL</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Pending</td>
      </tr>

      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Wanto Jayo</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Xenia</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">B 4561 RL</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Pending</td>
      </tr>

      <tr>
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Wanto Jayo</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Xenia</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">B 4561 RL</td>
        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Pending</td>
      </tr>
    </tbody>
  </table>
</div>
          </div>

          <!-- table end -->

        </div>

        <!-- content 1 end -->

        <!-- content 2 -->
        <div class="container2">
           <div class="container2-div1">
<article class="rounded-xl border border-gray-700 bg-gray-100 p-4" style="width: 90%; margin-left:20px; margin-top: 10px">
  <div class="flex items-center gap-4">
    <img
      alt=""
      src="https://images.unsplash.com/photo-1614644147724-2d4785d69962?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80"
      class="size-16 rounded-full object-cover"
    />

    <div>
      <h3 class="text-lg font-medium text-Black">Daffa Surya Arrayan</h3>

      <div class="flow-root">
        <ul class="-m-1 flex flex-wrap">
          <li class="p-1 leading-none">
            <a href="#" class="text-xs font-medium text-gray-600"> Twitter </a>
          </li>

          <li class="p-1 leading-none">
            <a href="#" class="text-xs font-medium text-gray-600"> GitHub </a>
          </li>

          <li class="p-1 leading-none">
            <a href="#" class="text-xs font-medium text-gray-600">Website</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <ul class="mt-4 space-y-2">
    <li>
      <a href="#" class="block h-full rounded-lg border border-gray-700 p-4 hover:border-pink-600">
        <strong class="font-medium text-black">Project UAS</strong>

        <p class="mt-1 text-xs font-medium text-gray-600">
       Project UAS ini mengangkat tema Website Rental Mobil yang menggunakan Framework Laravel 11
        </p>
      </a>
    </li>
    <button class="button-container">
        Logout
    </button>
  </ul>
</article>
           </div>

<div>
           <a href="#" class="block">
  <img
    alt=""
    src="https://images.unsplash.com/photo-1666243035395-9b7853cecc05?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    class="h-56 w-95 rounded-bl-3xl rounded-tr-3xl object-cover sm:h-60 lg:h-72"
    style="margin-left: 10px; margin-top: 20px"
  />
           </a>
        </div>
    
        </div>
   <!-- content end -->
    </div>
</body>
</html>
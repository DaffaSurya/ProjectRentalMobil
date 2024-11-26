<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Style1.css') }}">
    @vite('resources/css/app.css')
    <title>EditCar</title>
</head>

<body class="body-edit">
    <div>
        <!-- Navbar -->
        <div class="div-navbarAdmin">
            <div class="navbar-admin">
                <p>Rent4Car</p>
            </div>

            <div class="navbar1admin">
                <a href="{{route('Dashboard.Admin')}}">
                    <p style="font-size: 20px; font-weight:600">Dashboard</p>
                </a>
                <form action="{{route('Logout.Admin')}}" method="post">
                    <button class="navbaradmin-button">
                        Logout
                    </button>
                </form>
            </div>
        </div>
        <!-- navbar end -->

        <!-- content -->
        
        <div class="container">
        <h1>Edit Mobil</h1>
        <form  method="POST" enctype="multipart/form-data" action="{{ route('editpost.admin' , $data -> id) }}">
            @csrf        
            <div class="form-group">
                <label for="brand">Merk:</label>
                <input type="text" id="brand" name="merk" value="{{ $data -> merk}}" required>
            </div>
            
            <div class="form-group">
                <label for="model">No_Plat:</label>
                <input type="text" id="model" name="no_plat" value=" {{ $data -> no_plat}} " required>
            </div>
            
            <div class="form-group">
                <label for="jumlah_kapasitas">Jumlah_kapasitas:</label>
                <input type="text" id="year" name="kapasitas" value="{{ $data -> jumlah_kapasitas}}" required>
            </div>
            
            <div class="form-group">
                <label for="price">Point:</label>
                <input type="number" id="price" name="point" value="{{ $data -> points}}" required>
            </div>
            
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="gambar">
                    <img alt="Mobil Image" class="preview-img" src="/uploads/{{ $data -> photo }}">
            </div>
            
            <div class="form-group">
                <button type="submit" class="buttonedit-update">Update</button>
                <a>
                 <button class="buttonedit-cancel">
                    Cancel
                </button>
                </a>
            </div>
        </form>
    </div>
    <!-- content end -->

    <!-- footer -->
    <footer>
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
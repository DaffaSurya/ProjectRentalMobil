<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Style1.css') }}">
    <link rel="stylesheet" href="{{ asset('Point.css') }}">
    @vite('resources/css/app.css')
    <title>PointAdmin</title>
</head>
<body>
    <div>
        <!-- navbar -->
        <div class="div-navbarAdmin">
            <div class="navbar-admin">
                <p>Rent4Car</p>
            </div>

            <div class="navbar1admin">
                <a href="{{route('Dashboard.Admin')}}">
                    <p style="font-size: 20px; font-weight:600">Dashboard</p>
                </a>
                <form action="{{route('Logout.Admin')}}" method="post">
                    @csrf
                    <button class="navbaradmin-button">
                        Logout
                    </button>
                </form>
            </div>
        </div>
        <!-- navbar end -->

         <!-- main content -->
         <div class="container">
            <h2>Masukkan Harga dan Jumlah Poin</h2>
            <form id="pointForm" action="{{ route('Point_post') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="price">Harga (IDR):</label>
                    <input type="number"  name="price" >
                </div>
                <div class="form-group">
                    <label for="points">Jumlah Point:</label>
                    <input type="number"  name="points">
                </div>
                <button type="submit">Simpan</button>
            </form>
        </div>

        <!-- content mobil admin -->
        
         <div class="wrapper">
        
         <div class="car-list">
         @foreach($data as $data)

                <!-- Card 1 -->
                <div class="card">
                    <div class="card-content">
                        <h2>{{$data -> Input_koin}} Point</h2>
                        <p>Rp.{{$data -> Harga_koin}}</p>
                    </div>

                    <div class="div-button">
                        <button class="edit-point">
                            Edit
                        </button>

                        <form action="{{ route('Deletepoint_admin', $data->id) }}" method="post">
                            @csrf
                        <button class="delete-point">
                            Delete
                        </button>
                        </form>
                    </div>
                </div>
                @endforeach
                </div>   
        </div>
      
        <!-- content mobil admin -->

    </div>
</body>
</html>
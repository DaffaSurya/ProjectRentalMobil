<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Style1.css') }}">
    @vite('resources/css/app.css')
    <title>Tambah Mobil</title>
</head>

<body>
    <div>
        <div>
            <!-- Tambah mobil -->
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
            <!-- tambah mobil end -->

            <!-- section tambah mobil  -->
            <div class="div-tambahmobil">

                <form action="{{route('post.addmobil')}}" class="tambahmobil-section" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="addcar">
                        <label for="">Merk Mobil</label>
                        <label
                            class="relative block rounded-md border border-gray-400 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                            <input
                                type="text"
                                name="merk"
                                class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0"
                                placeholder="Username" />

                        </label>
                    </div>

                    <div class="addcar">
                        <label for="">No.Plat</label>

                        <label
                            class="relative block rounded-md border border-gray-400 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                            <input
                                type="text"
                                name="no_plat"
                                class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0"
                                placeholder="Username" />

                        </label>
                    </div>

                    <div class="addcar">
                        <label for="">Jumlah Kapasitas</label>

                        <select name="kapasitas" class="dropdown-kapasitasmobil">
                            <option value="1-4 orang">1-4 orang</option>
                            <option value="1-6">1-6 orang</option>
                            <option value="Diatas 6 orang">Diatas 6 orang</option>
                        </select>
                    </div>

                    <div class="addcar">
                        <label for="">Point sewa perhari </label>


                        <label
                            class="relative block rounded-md border border-gray-400 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                            <input
                                type="number"
                                name="point"
                                class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0"
                                placeholder="Username" />

                        </label>
                    </div>

                    <div class="addcar-file">
                        <label for="">Masukkan foto mobil</label>
                        <input type="file" class="file-fotomobil" name="gambar">
                    </div>

                    <div class="addcar">
                        <button class="tambah-mobilbutton" type="submit">
                            Tambah Mobil
                        </button>
                    </div>
                </form>

            </div>
            <!-- section tambah mobil end -->

            <!-- data penambahan mobil -->
          
            <div class="wrapper">
                <h1>Daftar Mobil yang ditambahkan</h1>
              
                <div class="car-list">
                @foreach($car as $data)
                    <!-- Data Mobil 1 -->
                    <div class="car-card">
                       
                        <!-- <img src="{{ asset('uploads/' . $data->photo) }}" alt="{{ $data->merk }}"> -->
                        <img src="/uploads/{{$data->photo}}" alt="Gambar" />
                        <h2>{{$data-> merk}}</h2>
                        <p>{{$data-> jumlah_kapasitas}}</p>
                        <p>No.Plat: {{$data -> no_plat}}</p>
                        <p>Poin: {{$data-> points}} points</p>

                        <div class="section-button">
                           <a href="{{ route('edit.admin', $data -> id)}}">
                            <button class="button">
                                Edit
                            </button>
                            </a>
                           <form action="{{route('hapus.add', $data->id )}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <button class="button">
                                Delete
                            </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          
            <!-- data penambahan mobil end -->
        </div>

    </div>
</body>

</html>
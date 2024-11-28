<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Style1.css') }}">
    <link rel="stylesheet" href="{{ asset('koin.css') }}">
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
            <form id="pointForm">
                <div class="form-group">
                    <label for="price">Harga (IDR):</label>
                    <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="points">Jumlah Point:</label>
                    <input type="number" id="points" name="points" required>
                </div>
                <button type="submit">Simpan</button>
            </form>
        </div>
        <div class="container-point">
            <div class="grid">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 1</h2>
                        <p>This is a description of the first item. It gives more details about the card.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 2</h2>
                        <p>This is a description of the second item. It gives more details about the card.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 3</h2>
                        <p>This is a description of the third item. It gives more details about the card.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 4</h2>
                        <p>This is a description of the fourth item. It gives more details about the card.</p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 5</h2>
                        <p>This is a description of the fifth item. It gives more details about the card.</p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 6</h2>
                        <p>This is a description of the sixth item. It gives more details about the card.</p>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 7</h2>
                        <p>This is a description of the seventh item. It gives more details about the card.</p>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 8</h2>
                        <p>This is a description of the eighth item. It gives more details about the card.</p>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="card">
                    <div class="card-content">
                        <h2>Card Title 9</h2>
                        <p>This is a description of the ninth item. It gives more details about the card.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end main --}}
    </div>
</body>
</html>

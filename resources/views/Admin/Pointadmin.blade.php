<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Style1.css') }}">
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
    </div>
</body>
</html>
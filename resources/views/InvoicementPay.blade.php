<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('invoice.css')}}">
  <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('PDF.css') }}" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Invoicement</title>
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
          <a href="{{ route('Dashboard')}}">
            <p style="color: blue;">Dashboard</p>
          </a>
          <p>about us</p>
          <a href="{{route('coin.user')}}">
            <p>Lihat Koin</p>
          </a>
          <a href="">
            <p>History Rent</p>
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
    <div class="div-invoice">
      <div class="div-datainvoice">
        <section>
          <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
              <div>
                <div class="max-w-lg md:max-w-none" id="content">
                  <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
                    Your Payment Has been made..
                  </h2>

                  <p class="mt-4 text-gray-700">
                    Merk Mobil: {{$Getcar->merk}}
                  </p>
                  <p class="mt-4 text-gray-700">
                    Kapasitas Orang: {{$Getcar->kapasitas}}
                  </p>
                  <p class="mt-4 text-gray-700">
                    Nomer Plat Mobil: {{$Getcar->no_plat}}
                  </p>

                  <p class="mt-4 text-gray-700">
                    Mulai sewa mobil: {{$tanggalsewa}}
                  </p>

                  <p class="mt-4 text-gray-700">
                    Akhir sewa mobil: {{$tanggalakhirsewa}}
                  </p>

                </div>

              <div class="div-buttonvoice">
                <button class="button-invoice" id="button-invoice">
                  Download Invoice
                </button>
              </div>
            </div>

            <div>
              <img
                src="https://cdn3d.iconscout.com/3d/premium/thumb/payment-successful-7940652-6294950.png"
                class="rounded"
                style="height: 48vh; border-radius: 12px; width: 100%" />
            </div>
          </div>
      </div>
      </section>
    </div>
  </div>

  <script>
    document.getElementById('button-invoice').addEventListener('click', function() {
      var data = document.getElementById('data-content').innerHTML

      var opt = {
        margin: 1,
        filename: 'Invoicement_Rent4Car.pdf',
        jsPDF: {
          unit: 'in',
          orientation: 'portrait'
        }
      }

      html2pdf()
        .set(opt)
        .from(data)
        .save()

    })
  </script>


  <script>
    const Showdatenow = () => {
      const tanggal = new Date();

      const formatTanggal = tanggal.toLocaleDateString("id-ID", {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric"
      });

      return document.getElementById('tanggal').textContent = formatTanggal;
    }
  </script>

  <!-- footer -->
  <footer class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex justify-center text-black-600 sm:justify-start">
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

  <div class="display-data" id="data-content">
                  <div class="data-pdf">
                  <div class="space-between" >
                    <h1>Invoice</h1>
                    <div class="payee">
                      <b>Rent4Car</b><br />
                      Daffa Surya Arrayan<br />
                      Fahad Usman<br />
                      Ahmad Syauqi Nuri<br />
                      Indonesia<br />
                    </div>
                  </div>
                  <hr />
                  <div class="billing-details space-between">
                    <div class="payor">
                      Bill to:<br />
                      <b>Rent4Car</b><br />
                      Daffa Surya Arrayan<br />
                      Universitas Airlangga<br />
                      Surabaya , Jawa Timur<br />
                      indonesia<br />
                    </div>
                    <table class="info-table">
                      <tbody>
                        <tr>
                          <td>
                            <strong>Invoice number:</strong>
                          </td>
                          <td>111</td>
                        </tr>
                        <tr onload="Showdatenow">
                          <td>
                            <strong>Invoice date:</strong>
                          </td>
                          <td>{{$datenow}}</td>
                        </tr>
                        <tr>
                          <td>
                            <strong>Tanggal awal rental:</strong>
                          </td>
                          <td>{{$tanggalsewa}}</td>
                        </tr>

                        <tr>
                          <td>
                            <strong>Tanggal akhir rental:</strong>
                          </td>
                          <td>{{$tanggalakhirsewa}}</td>
                        </tr>

                        <tr>
                          <td>
                            <strong>Total Harga sewa</strong>
                          </td>
                          <td>{{$amount_rent}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr />
                  <div class="order-details">
                    <table class="items-table">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Qty</th>
                          <th>Price</th>
                          <th class="align-right">Amount</th>
                        </tr>
                      </thead>
                      <tbody class="bg-gray rounded">
                        <tr class="item-row">
                          <td class="text-break product_name">
                            <b class="item-name">{{$Getcar->merk}}</b>
                            <br />
                            <span class="product-desc">
                              Mobil ini memiliki RPM at Max Power: 3400 RPM dan RPM MAX-Torque dikisaran 1600-2000 RPL
                              serta dilengkapi dengan kapasitas tangki Bahan Bakar sebesar 80 Liter
                            </span>
                          </td>
                          <td>1</td>
                          <td>{{$amount_rent}} Coins</td>
                          <td class="align-right">{{$amount_rent}} Coins</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <div class="order-summary space-between">
                    <div class="card">
                      <b>Notes</b>
                      <br />
                      Terima kasih sudah merental mobil di Rent4Car
                    </div>
                    <table class="info-table">
                      <tbody>
                        <tr>
                          <td>
                            <strong>Subtotal:</strong>
                          </td>
                          <td>{{$amount_rent}} Coins</td>
                        </tr>
                        <tr>
                          <td>
                            <strong>Total:</strong>
                          </td>
                          <td>{{$amount_rent}} Coins</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="order-total space-between">
                    <div></div>
                    <div class="total">
                      <div class="amount-due">
                        Amount due:
                      </div>
                      <div class="amount-due-total">
                      {{$amount_rent}} Coins
                      </div>
                    </div>
                  </div>
                  <div class="footer">
                    &copy; Copyright 2024, Rent4Car Company
                  </div>
                  </div>
                </div>
              </div>
  </div>
</body>

</html>
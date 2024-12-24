<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-Up Coin Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .container h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input[type="number"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .payment-options {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .payment-option {
            flex: 1;
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .payment-option:hover {
            background-color: #f0f0f0;
            border-color: #333;
        }

        .payment-option.active {
            background-color: #333;
            color: #fff;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color:  rgba(0, 0, 255, 0.814);
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Top-Up Coins</h1>
        <form action="{{ route('Topup.post', $data_koin->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="amount">Amount Koin</label>
                <input type="number" id="amount" name="amount" placeholder="Enter coin amount" value="{{$data_koin->Input_koin}}" required>
            </div>

            <div class="form-group">
                <label for="amount">Harga Koin</label>
                <input type="text" id="amount" name="Harga" placeholder="Enter coin amount" value="{{$data_koin->Harga_koin}}" required>
            </div>

            <div class="form-group">
                <label for="payment-method">Select Payment Method</label>
                <div class="payment-options">
                    <!-- <div class="payment-option" onclick="selectOption(this)" >Credit Card</div> -->
                     <input type="text"  class="payment-option" value="Shopeepay" style="width: 80px;" name="Shopeepay">
                    <!-- <div class="payment-option" onclick="selectOption(this)">E-Wallet</div> -->
                    <input type="text"  class="payment-option" value="Gopay" style="width: 80px;" name="Gopay">
                    <!-- <div class="payment-option" onclick="selectOption(this)">Bank Transfer</div> -->
                    <input type="text"  class="payment-option" value="OVO" style="width: 80px;" name="OVO">
                </div>
            </div>

            <button type="submit" class="btn-submit">Lanjutkan Pembayaran</button>
        </form>
    </div>

    <!-- <script>
        function selectOption(element) {
            const options = document.querySelectorAll('.payment-option');
            options.forEach(option => option.classList.remove('active'));
            element.classList.add('active');
        }
    </script> -->
</body>
</html>

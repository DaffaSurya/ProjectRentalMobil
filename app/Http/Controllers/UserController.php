<?php

namespace App\Http\Controllers;

use App\Models\addcar;
use App\Models\History;
use App\Models\Koinuser;
use App\Models\point;
use App\Models\Rental;
use App\Models\Result;
use App\Models\Resultrent;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

// use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function Home()
    {
        return view('welcome');
    }

    public function Dashboard()
    {
        return view('Dashboard');
    }

    public function Koin()
    {
        $data = point::all();

        $payment = Resultrent::where('user_id', Auth::id())->value('paymentstatus');
        $totalcoin = Koinuser::where('user_id', Auth::id())->sum('amount_koin');

        if($payment == 'success') {
            $totalcoin = Resultrent::where('user_id', Auth::id())->value('Remain_coins');
        } else {
            $totalcoin = Koinuser::where('user_id', Auth::id())->sum('amount_koin');
        }   
            
        return  view('Koin', compact('data', 'totalcoin'));
    }


    public function Rental()
    {
        $cars = addcar::all();
        return view('Rentcar', compact('cars'));
    }

    public function Detailsewa($id)
    {
        $data = addcar::find($id);
        return view('Detailsewa', compact('data'));
    }

    public function Detailsewa_post(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required',
            'jumlah_kapasitas' => 'required',
            'no_plat' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'koin' => 'required|integer',
        ]);

        $insertdata = new History();
        $insertdata->user_id = Auth::id();
        $insertdata->merk = $request->merk;
        $insertdata->kapasitas = $request->jumlah_kapasitas;
        $insertdata->no_plat = $request->no_plat;
        $insertdata->start_date = $request->start_date;
        $insertdata->end_date = $request->end_date;
        $insertdata->Coins = $request->koin;

        $insertdata->save();


        return redirect()->route('History', $id);
    }

    public function Topup($id, Request $request)
    {
        $data_koin = point::find($id);
        return view('TopupCoin', compact('data_koin'));
        
    }

    public function Topup_koin(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|integer',
            'Harga' => 'required',
            'Shopeepay' => 'required',
            'Gopay' => 'required',
            'OVO' => 'required',
        ]);

        $Topup = new Koinuser();

        $Topup->user_id = Auth::id();
        $Topup->amount_koin = $request->amount;
        $Topup->Harga = $request->Harga;
        $Topup->pembayaran = $request->Shopeepay;
        $Topup->pembayaran = $request->Gopay;
        $Topup->pembayaran = $request->OVO;
        
        $Topup->save();

        return redirect()->route('coin.user');
    }

    public function History()
    {
        $history = History::where('user_id', Auth::id())->get();
        return view('History', compact('history'));
    }


    public function Penyewaan($id)
    {
        $data = History::find($id);

        $DateStart = Carbon::parse($data->start_date);
        $DateEnd = Carbon::parse($data->end_date);

        // format tanggal mennjadi D-M-Y untuk Awal sewa
        $formatstartdate = Carbon::parse($data->start_date)->format('d-m-y');

        // format tanggal menjadi D-M-Y untuk akhir sewa
        $formatenddate = Carbon::parse($data->end_date)->format('d-m-y');

        // Lama user sewa mobil
        $dayRented = $DateStart->diffInDays($DateEnd);



        $DayPoint = $data->Coins;

        // perkalian sewa mobil perhari
        $totalCoins = $dayRented * $DayPoint; // kalikan Lama sewa user dengan point sewa per hari
        // perkalian sewa mobil perhari

        // kalikan Lama sewa user dengan point sewa per hari
        $PointUser = Koinuser::where('user_id', Auth::id())->sum('amount_koin');

        $Coinuser = Koinuser::where('user_id', Auth::id())->sum('amount_koin');

        // $PointUser = $Coinuser - ($datacoin ? $datacoin->amount_koin : 0);

        //  $PointUser = Koinuser::where('user_id', Auth::id()) -> sum('amount_koin') - $points; // data total coin

        return view('penyewaan', compact('data', 'formatstartdate', 'formatenddate', 'dayRented', 'totalCoins', 'PointUser'));
    }

    public function pembayaran(Request $request, $id)
    {

        $data = History::find($id);

        $koin = Koinuser::find($id);

        $DateStart = Carbon::parse($data->start_date);
        $DateEnd = Carbon::parse($data->end_date);

        $formatstartdate = Carbon::parse($data->start_date)->format('d-m-y');
        $formatenddate = Carbon::parse($data->end_date)->format('d-m-y');

        $dayRented = $DateStart->diffInDays($DateEnd);

        $DayPoint = $data->Coins;


        $totalCoins = $DayPoint * $dayRented;  // ini total coin yang harus dibayar user
        $PointUser = Koinuser::where('user_id', Auth::id())->sum('amount_koin');

        if ($PointUser < $totalCoins) {
            return response()->json([
                'status' => 'error',
                'message' => 'Insufficient points',
            ], 400);
        }
        // pengurangan poin user dan poin sewa mobil tiap 1 hari
        $result = $PointUser - $totalCoins;
        // pengurangan poin user dan poin sewa mobil tiap 1 hari


        if ($PointUser >= $totalCoins) {
            Resultrent::create([
                'user_id' => Auth::id(),
                'name_user' => Auth::user()->name,
                'merk' => $data->merk,
                'Coinspay' => $totalCoins,
                'Remain_coins' => $result,
                'paymentstatus' => 'success',
                'Rentstatus' => 'Done',
                'start_date' => $formatstartdate,
                'end_date' => $formatenddate,
            ]);
        } else {
            return response()->json([
                'message' => 'Koin tidak mencukupi.',
                'remaining_coins' => $totalCoins,
            ], 400);
        };


        $cars = new Rental();

        $cars->user_id = $data->user_id;
        $cars->user = Auth::user()->name;
        $cars->merk = $data->merk;
        $cars->kapasitas = $data->kapasitas;
        $cars->no_plat = $data->no_plat;
        $cars->start_date = $formatstartdate;
        $cars->end_date = $formatenddate;
        $cars->Coins = $result;

        $cars->save();

        return redirect()->route('Invoice.user', $id);
    }

    public function Invoice($id)
    {

        $Getcar = History::find($id);

        $datestart = Carbon::parse($Getcar->start_date);
        $enddate = Carbon::parse($Getcar->end_date);

        $datenow = Carbon::now()->format('d-m-y');

        $tanggalsewa = Carbon::parse($Getcar->start_date)->format('d-m-y'); // format tanggal dengan d-m-y
        $tanggalakhirsewa = Carbon::parse($Getcar->end_date)->format('d-m-y');  // format tanggal dengan d-m-y

        $dayRented = $datestart->diffInDays($enddate);  // kurangi tanggal untuk mendapatkan lama sewa kendaraan

        $daypoint = $Getcar->Coins;

        $amount_rent = $daypoint * $dayRented; // perkalian untuk mengetahui total koin rental mobil user

        return view('InvoicementPay', compact('Getcar', 'tanggalsewa', 'tanggalakhirsewa', 'amount_rent', 'datenow'));
    }


    public function History_pay()
    {
        $rent = Resultrent::where('user_id', Auth::id())->get();
        return view('HistoryPay', compact('rent'));
    }

    public function Historypay_post($id)
    {
        $datamobil = Resultrent::find($id);
        $datamobil->delete();

        if ($datamobil) {
            return redirect()->route('History.pay');
        } else {
            return response()->json([
                'message' => 'data gagal terhapus'
            ], 400);
        }
    }

    public function Topup_Success(Request $request) {
        return view('payment_success', [
            'order_id' => $request->query('order_id'),
        ]);
    }
}

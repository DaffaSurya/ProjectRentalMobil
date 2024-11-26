<?php

namespace App\Http\Controllers;

use App\Models\addcar;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function Home() {
        return view('welcome');
    }

    public function Dashboard() {
      return view('Dashboard');
  }

   public function Koin() {
     return view('Koin');
   }

   public function Rental() {
    $cars = addcar::all();
    return view('Rentcar' , compact('cars'));
   }

   public function Detailsewa($id) {
    $data = addcar::find($id);
    return view('Detailsewa', compact('data'));
   }
}

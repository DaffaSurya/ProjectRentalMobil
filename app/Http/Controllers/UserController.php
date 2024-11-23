<?php

namespace App\Http\Controllers;

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
    return view('Rentcar');
   }
}

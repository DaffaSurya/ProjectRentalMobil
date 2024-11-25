<?php

namespace App\Http\Controllers;

use App\Models\addcar;
use App\Models\TambahCar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('Admin.Dashboard');
    }

    public function addMobil()
    {   $car = addcar::all();
        return view('Admin.Tambahmobil', compact('car'));
    }

    public function post_add(Request $request)
    {

       $request->validate([
            'merk' => 'required',
            'no_plat' => 'required',
            'kapasitas' => 'required',
            'point' => 'required|integer',
            'gambar' => 'required|mimes:jpg,png,pdf|max:2048', // Validasi gambar
        ]);
        $insert = new addcar();
        $file_path = public_path('uploads');

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $file_name = date('Y-m-d').$file->getClientOriginalName();

            $file->move($file_path, $file_name);
            $insert->photo = $file_name;
        }


      $insert->merk = $request->merk;
      $insert->no_plat = $request->no_plat;
      $insert->jumlah_kapasitas = $request->kapasitas;
      $insert->points = $request->point;

        $insert->save();

        return redirect()->route('Dashboard.Admin');
    }   

    public function Hapus($id) {
        $content = addcar::find($id);
        $content->delete();

        return redirect()->route('Dashboard.Admin');
    }
}

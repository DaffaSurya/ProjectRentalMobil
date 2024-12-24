<?php

namespace App\Http\Controllers;

use App\Models\addcar;
use App\Models\point;
use App\Models\Resultrent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {   
        $data = Resultrent::all();
        return view('Admin.Dashboard' , compact('data'));
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

        return redirect()->route('AddMobil.Admin');
    }

    public function Hapus($id) {
        $content = addcar::find($id);
        $content->delete();

        return redirect()->route('post.addmobil');
    }

    public function edit_admin($id) {
        $data = addcar::find($id);

        return view('/Admin.editcar', compact('data'));
    }

    public function edit_post(Request $request , $id) {
        $request->validate([
            'merk' => 'required',
            'no_plat' => 'required',
            'kapasitas' => 'required',
            'point' => 'required|integer',
            'gambar' => 'required|mimes:jpg,png,pdf|max:2048', // Validasi gambar
        ]);

        $car = addcar::find($id);

        $file_path = public_path('uploads');

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $file_name = date('Y-m-d').$file->getClientOriginalName();

            $file->move($file_path, $file_name);
            $car->photo = $file_name;
        }

        $car->merk = $request->merk;
        $car->no_plat = $request->no_plat;
        $car->jumlah_kapasitas = $request->kapasitas;
        $car->points = $request->point;

        $car->update();

        return redirect()->route('AddMobil.Admin');
    }

    public function TopUp_admin() {
        $data = point::all();
        return view('Admin.Pointadmin', compact('data'));
    }

    public function Pointadmin(Request $request) {
        $request->validate([
            'price' => 'required|integer',
            'points' => 'required|integer'
        ]);

        $input = new point();

        $input->Input_koin = $request->points;
        $input->Harga_koin = $request->price;

        $input->save();

        return redirect()->route('Topup_admin');
    }

    public function Delete_Point($id) {
        $Delete = point::find($id);
        $Delete->delete();

        return redirect()->route('Topup_admin');
    }

    
    
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koinuser extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount_koin', 'Harga', 'pembayaran' , 'snap_token'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    protected $table = 'Topup';


    public function user() {
        return $this->belongsTo(User::class);
    }
}

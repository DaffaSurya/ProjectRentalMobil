<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = ['user_id', 'user', 'merk' , 'kapasitas', 'no_plat' , 'start_date', 'end_date', 'Coins'];

    protected $table = 'RentalCar';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

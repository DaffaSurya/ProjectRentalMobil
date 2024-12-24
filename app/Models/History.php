<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //

    protected $fillable = [
        'user_id', 
        'merk', 
        'kapasitas', 
        'no_plat', 
        'start_date', 
        'end_date',
        'Coins'
    ];

    protected $table = 'dataHistory';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

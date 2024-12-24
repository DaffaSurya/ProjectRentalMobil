<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultrent extends Model
{
    protected $fillable = [
        'user_id',
        'name_user',
        'merk',
        'Coinspay',
        'Remain_coins',
        'paymentstatus',
        'Rentstatus',
        'start_date',
        'end_date'
    ];

    protected $table = 'FinalPay';
}

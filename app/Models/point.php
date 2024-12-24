<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class point extends Model
{
    protected $table = 'koin';

    public function user() {
        return $this->belongsTo(User::class);
    }
}

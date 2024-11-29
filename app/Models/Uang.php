<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uang extends Model
{
    public function jenisdonasi(){
        return $this->belongsTo(JenisDonasi::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function donasi(){
        return $this->belongsTo(Donasi::class);
    }

    public function jenisdonasi(){
        return $this->belongsTo(JenisDonasi::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}

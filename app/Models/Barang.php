<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function donasi(){
        return $this->belongsTo(Donasi::class);
    }
}

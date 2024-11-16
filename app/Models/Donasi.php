<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    public function form(){
        return $this->hasOne(Form::class);
    }

    public function uang(){
        return $this->hasOne(Uang::class);
    }

    public function barang() {
        return $this->hasOne(Barang::class);
    }
}

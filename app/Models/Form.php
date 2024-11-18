<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    // protected $table = 'forms';
    // protected $primaryKey = 'id';
    // protected $fillable = ['name', 'email', 'nominal', 'bukti_pembayaran'];

    public function donasi(){
        return $this->belongsTo(Donasi::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprador extends User
{
    use HasFactory;

    protected $fillable = [
        'transacciones'
    ];

    public function transacciones() {
        return $this->hasMany(Transaccion::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendedor;
use App\Models\Transaccion;
use App\Models\Categoria;

class Producto extends Model
{
    use HasFactory;

    const PRODUCTO_DISPONIBLE = 'Disponible';
    const PRODUCTO_NO_DISPONIBLE = 'No disponible';

    protected $table = "productos";

    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidad',
        'status',
        'img',
        'vendedor_id'
    ];

    public function enStock() {
        return $this->status == Producto::PRODUCTO_DISPONIBLE;
    }

    #Analizar esto
    public function vendedor() {
        return $this->belongsTo(Vendedor::class);
    }

    #Analizar esto
    public function transacciones() {
        return $this->hasMany(Transaccion::class);
    }

    #Analizar esto
    public function categorias() {
        return $this->belongsToMany(Categoria::class);
    }

}

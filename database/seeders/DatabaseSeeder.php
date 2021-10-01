<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Transaccion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // $cantidadUsuarios = 100;
        // User::factory($cantidadUsuarios)->create();
        // // \App\Models\User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::truncate();
        Categoria::truncate();
        Producto::truncate();
        Transaccion::truncate();
        DB::table('categoria_producto')->truncate();

        $cantidadUsuarios = 100;
        $cantidadCategorias = 30;
        $cantidadProductos = 1000;
        $cantidadTransacciones = 1000;

        User::factory($cantidadUsuarios)->create();
        Categoria::factory($cantidadCategorias)->create();
        Producto::factory($cantidadProductos)->create();
        Transaccion::factory($cantidadTransacciones)->create();
    }
}

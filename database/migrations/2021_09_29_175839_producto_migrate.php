<?php
// namespace app\Models;
use App\Http\Controllers\Producto\Producto as ProductoProducto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\Producto;

class ProductoMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion', 1000);
            $table->integer('cantidad')->unsigned();
            // $table->string('status')->default(Producto::PRODUCTO_NO_DISPONIBLE);
            #Con la línea de arriba no era posible hacer la migración porque no se encontraba
            #la clase Producto.
            $table->string('status')->default('No disponible');
            $table->string('img');
            $table->integer('vendedor_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

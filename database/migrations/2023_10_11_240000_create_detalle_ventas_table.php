<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idventa')->unsigned();
            $table->integer('idcomputadora')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->decimal("Cantidad", 10,0);
            $table->decimal("Precio", 10,2);
            $table->decimal("Descuento", 10,2);            
            $table->foreign("idventa")->references('id')->on('ventas');
            $table->foreign("idcomputadora")->references('id')->on('computadoras');
            $table->foreign("idusuario")->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};

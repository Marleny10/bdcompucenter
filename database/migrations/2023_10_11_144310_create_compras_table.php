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
        Schema::create('compras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Numero_Compra', 15);
            $table->integer('idusuario')->unsigned();
            $table->integer('idcliente')->unsigned();
            $table->integer('idproveedor')->unsigned();
            $table->integer('idcomputadora')->unsigned();
            $table->dateTime('Fecha');
            $table->string('Cantidad', 1000);
            $table->decimal('Total', 10,2);
            $table->foreign("idusuario")->references('id')->on('usuarios');
            $table->foreign("idcliente")->references('id')->on('clientes');
            $table->foreign("idproveedor")->references('id')->on('proveedors');
            $table->foreign("idcomputadora")->references('id')->on('computadoras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};

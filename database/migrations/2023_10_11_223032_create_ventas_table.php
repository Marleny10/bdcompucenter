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
        Schema::create('ventas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idusuario')->unsigned();
            $table->integer('idcliente')->unsigned();
            $table->string('tipo_comprobante', 10);
            $table->string('numero_comprobante', 10);
            $table->dateTime('Fecha');
            $table->decimal('Total', 10,2);
            $table->string('Estado', 10);
            $table->foreign("idusuario")->references('id')->on('usuarios');
            $table->foreign("idcliente")->references('id')->on('clientes');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};

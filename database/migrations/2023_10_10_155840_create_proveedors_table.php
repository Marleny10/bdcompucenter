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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idcliente')->unsigned();
            $table->string('Nombre_Compañia');
            $table->string('Tipo_Documento', 15);
            $table->string('Numero_Documento', 25);
            $table->string('Direccion_Compañia', 25);
            $table->string('Telefono', 15);
            $table->string('Email', 100);
            $table->foreign("idcliente")->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};

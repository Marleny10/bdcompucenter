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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Nombre', 100);
            $table->string('Tipo_Documento', 10);
            $table->string('Numero_Documento', 15);
            $table->string('Direccion', 200);
            $table->string('Telefono', 9);
            $table->string('Email', 100);
            $table->string('Contraseña', 100);
            $table->integer('id_rol')->unsigned();
            $table->foreign("id_rol")->references('id')->on('rols');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

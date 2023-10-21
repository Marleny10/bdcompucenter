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
        Schema::create('computadoras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Nombre', 100);
            $table->string('Marca', 100);
            $table->decimal('Precio', 10,2);
            $table->string('Codigo', 100);
            $table->string('Stock', 1000);
            $table->string('Descripcion', 100);
            $table->integer('idcategoria')->unsigned();
            $table->integer('idproveedor')->unsigned();
            $table->foreign("idcategoria")->references('id')->on('categorias');
            $table->foreign("idproveedor")->references('id')->on('proveedors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computadoras');
    }
};

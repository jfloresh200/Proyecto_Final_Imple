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
         Schema::create('coches', function (Blueprint $table) {
        $table->string('Matricula')->primary();
        $table->string('Marca');
        $table->string('Modelo');
        $table->string('Grupo');
        $table->integer('NumeroPuertas');
        $table->integer('EdadMinima');
        $table->integer('CodOficina');
        $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coches');
    }
};

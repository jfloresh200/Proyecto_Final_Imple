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
        Schema::create('alquileres', function (Blueprint $table) {
           $table->id('IDAlquiler');
            $table->string('Matricula');
            $table->string('DNI');
            $table->string('Seguro');
            $table->decimal('Precio',10,2);
            $table->integer('DiasCon');
            $table->string('estados')->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquileres');
    }
};

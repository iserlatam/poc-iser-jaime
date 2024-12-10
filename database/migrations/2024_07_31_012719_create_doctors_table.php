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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->enum('tipo_doc', ["ti","cc","ce","pasaporte"]);
            $table->string('no_doc');
            $table->timestamp('fecha_nacimiento');
            $table->string('profesion');
            $table->string('area')->nullable();
            $table->string('an_exp');
            $table->string('direccion');
            $table->string('telefono')->nullable();
            $table->string('celular');
            $table->string('horario')->nullable();
            $table->string('tipo_contrato')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};

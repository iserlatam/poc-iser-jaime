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
        Schema::create('formulas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->smallInteger('ojo_izquierdo_esfera')->nullable();
            $table->smallInteger('ojo_izquierdo_cilindro')->nullable();
            $table->smallInteger('ojo_izquierdo_eje')->nullable();
            $table->smallInteger('ojo_izquierdo_av')->nullable();
            $table->smallInteger('ojo_izquierdo_add')->nullable();
            $table->smallInteger('ojo_izquierdo_dp')->nullable();
            $table->smallInteger('ojo_derecho_esfera')->nullable();
            $table->smallInteger('ojo_derecho_cilindro')->nullable();
            $table->smallInteger('ojo_derecho_eje')->nullable();
            $table->smallInteger('ojo_derecho_av')->nullable();
            $table->smallInteger('ojo_derecho_add')->nullable();
            $table->smallInteger('ojo_derecho_dp')->nullable();
            $table->string('tipo_lente')->nullable();
            $table->integer('valor_lente')->nullable();
            $table->boolean('cita');
            $table->longText('notas_adicionales')->nullable();
            $table->foreignId('cliente_id');
            $table->foreignId('montura_id');
            $table->foreignId('doctor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulas');
    }
};

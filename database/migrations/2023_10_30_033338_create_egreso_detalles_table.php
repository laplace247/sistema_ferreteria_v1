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
        Schema::create('egreso_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('egreso_id')->nullable();
            $table->unsignedBigInteger('articulo_id')->nullable();
            $table->string('cantidad');
            $table->string('precio_venta');
            $table->decimal('impuesto', 10, 2);
            $table->string('total');
            $table->decimal('total_impuesto', 10, 2);
            $table->integer('user_id')->nullable();
            $table->timestamps();
            
            $table->foreign('egreso_id')->references('id')->on('egresos')->cascadeOnDelete();
            $table->foreign('articulo_id')->references('id')->on('articulos')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresos_detalles');
    }
};

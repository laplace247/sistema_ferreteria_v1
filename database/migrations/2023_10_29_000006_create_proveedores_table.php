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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('numero');   
            $table->unsignedBigInteger('tipo_documento_identidad_id');
            $table->string('telefono');
            $table->string('correo_electronico');
            $table->integer('user_id')->nullable();
            $table->timestamps();

            $table->foreign('tipo_documento_identidad_id')->references('id')->on('tipo_documento_identidades')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};

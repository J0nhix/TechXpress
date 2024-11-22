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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marca_id')->constrained();
            $table->string('modelo');
            $table->string('tipo');
            $table->integer('precio');
            $table->integer('precio_oferta')->nullable();
            $table->string('imagen')->nullable();
            $table->string('almacenamiento')->nullable();
            $table->string('color')->nullable();
            $table->string('ram')->nullable();
            $table->boolean('bluetooth')->nullable();
            $table->boolean('inalambrico')->nullable();
            $table->boolean('microfono')->nullable();
            $table->string('tamaño')->nullable();
            $table->string('procesador')->nullable();
            $table->integer('stock');
            $table->foreignId('oferta_id')->nullable()->constrained();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

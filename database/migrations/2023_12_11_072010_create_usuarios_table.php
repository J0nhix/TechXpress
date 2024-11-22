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
        Schema::table('users', function (Blueprint $table) {
            $table->string('dni',9);
            $table->string('alias');
            $table->string('municipio');
            $table->integer('puntos')->nullable();
            $table->unsignedBigInteger('suscripcione_id')->nullable();
            $table->foreign('suscripcione_id')->references('id')->on('suscripciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

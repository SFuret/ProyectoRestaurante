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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger('noPedido')->primary(); // Cambié esta línea
            $table->unsignedBigInteger('idMesa')->nullable();
            $table->unsignedBigInteger('idUsuario')->nullable();
            $table->string('estado', 50);
            $table->timestamp('fechaAlta')->useCurrent();

            $table->foreign('idMesa')->references('id')->on('mesas');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};

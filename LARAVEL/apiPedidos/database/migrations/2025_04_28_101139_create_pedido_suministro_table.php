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
        Schema::create('pedido_suministro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPedido');
            $table->unsignedBigInteger('idSuministro');
            $table->integer('cantidad');
            $table->text('notas')->nullable();

            $table->foreign('idPedido')->references('noPedido')->on('pedidos');
            $table->foreign('idSuministro')->references('id')->on('suministro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_suministro');
    }
};

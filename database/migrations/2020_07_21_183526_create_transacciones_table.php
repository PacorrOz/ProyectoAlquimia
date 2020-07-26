<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('usuario')->nullable;
            $table->char('operacion')->nullable;
            $table->char('estatus')->nullable;
            $table->timestamp('created_at')->default(date("Y-m-d H:i:s"))->nullable();
            $table->timestamp('updated_at')->default(date("Y-m-d H:i:s"))->nullable();     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacciones');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('b1000');
            $table->integer('b500');
            $table->integer('b200');
            $table->integer('b100');
            $table->integer('b50');
            $table->integer('b20');
            $table->integer('b10');
            $table->integer('b5');
            $table->integer('b2');
            $table->integer('b1');
            $table->integer('bcntvs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billetes');
    }
}

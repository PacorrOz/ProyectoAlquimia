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
            //$table->bigIncrements('id');
            $table->integer('1000');
            $table->integer('500');
            $table->integer('200');
            $table->integer('100');
            $table->integer('50');
            $table->integer('20');
            $table->integer('10');
            $table->integer('5');
            $table->integer('2');
            $table->integer('1');
            $table->integer('0.5');
            $table->timestamps();
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

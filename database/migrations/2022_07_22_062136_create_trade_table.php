<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id');
            $table->text('symbol');
            $table->integer('quantity');
            $table->integer('open_price');
            $table->integer('close_price');
            $table->date('open_datetime');
            $table->date('close_datetime');
            $table->boolean('open');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumeMineralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consume_minerals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('wc_id')->nullable()->comment('wc_id means water consume id');
            $table->string('mineral_id')->nullable();
            $table->string('mineral_quantity')->nullable();
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
        Schema::dropIfExists('consume_minerals');
    }
}

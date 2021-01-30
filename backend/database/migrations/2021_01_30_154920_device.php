<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Device extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device', function (Blueprint $table) {
            $table->bigIncrements('id_device');
            $table->String('name');
            $table->bigInteger('member_id');

            $table->foreign('member_id')
                ->references('id_member')
                ->on('member');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device');
    }
}

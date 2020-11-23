<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('url',50);
            $table->tinyInteger('status',false)->default(1);
            $table->integer('serial_num',false,true);
            $table->unsignedInteger('fk_menu_id');
            $table->foreign('fk_menu_id')->references('id')->on('menu');
            $table->string('slug',255);
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
        Schema::dropIfExists('sub_menu');
    }
}

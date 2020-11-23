<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_sub_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('url',100);
            $table->tinyInteger('status',false)->default(1);
            $table->integer('serial_num',false,true);
            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('frontend_menus');
            $table->string('slug',255)->nullable();
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
        Schema::dropIfExists('frontend_sub_menus');
    }
}

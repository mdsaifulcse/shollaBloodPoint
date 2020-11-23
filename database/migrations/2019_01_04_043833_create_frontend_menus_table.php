<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('url',100);
            $table->tinyInteger('status',false)->default(1);
            $table->tinyInteger('type',false)->default(1); // 1=Module, 2=Main Manu
            $table->integer('serial_num',false,true);
            $table->text('slug')->nullable();
            $table->string('icon_class',50)->nullable();
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
        Schema::dropIfExists('frontend_menus');
    }
}

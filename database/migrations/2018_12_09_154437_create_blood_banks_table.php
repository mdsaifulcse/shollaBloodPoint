<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',190)->unique();
            $table->string('url',190)->unique();
            $table->string('category',150)->nullable();
            $table->string('district',200)->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('web')->nullable();
            $table->text('notes')->nullable();
            $table->integer('serial_num',false,true);
            $table->tinyInteger('status',false)->default(1);
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
        Schema::dropIfExists('blood_banks');
    }
}

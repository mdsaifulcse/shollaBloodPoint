<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresidentSpeechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('president_speeches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100)->unique();
            $table->string('url',100);
            $table->string('photo',200)->nullable();
            $table->text('short')->nullable(); // short notes
            $table->text('details')->nullable();
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
        Schema::dropIfExists('president_speeches');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimaryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primary_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name',255);
            $table->string('logo',150);
            $table->string('address',255);
            $table->string('mobile_no',20);
            $table->string('phone',20);
            $table->string('email',50);
            $table->string('favicon',150);
            //$table->tinyInteger('type')->default(1)->comment('1=Group, 2=Company');
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('company_tag')->nullable();
            $table->text('map_embed')->nullable();
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
        Schema::dropIfExists('primary_info');
    }
}

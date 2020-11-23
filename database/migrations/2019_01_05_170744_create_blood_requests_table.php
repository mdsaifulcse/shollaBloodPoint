<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('mobile',11);
            $table->unsignedInteger('blood_group_id');
            $table->foreign('blood_group_id')->references('id')->on('blood_groups');

            $table->string('amount',10);
            $table->string('disease',150);
            $table->string('patient_location',200);

            $table->unsignedInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->timestamp('date_of_donation');
            $table->text('message')->nullable();
            $table->tinyInteger('manage_status',false,0)->default(1)->comment('1=unmanage 2=Manage');
            $table->tinyInteger('status',false,0)->default(1);
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
        Schema::dropIfExists('blood_requests');
    }
}

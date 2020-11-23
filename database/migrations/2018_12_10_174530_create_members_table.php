<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('father_name',200)->nullable();

            $table->unsignedInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');

            $table->unsignedInteger('thana_upazila_id');
            $table->foreign('thana_upazila_id')->references('id')->on('thana_upazilas');

            $table->unsignedInteger('union_id');
            $table->foreign('union_id')->references('id')->on('unions');

            $table->unsignedInteger('village_id');
            $table->foreign('village_id')->references('id')->on('villages');

            $table->string('gender',15)->nullable();

            $table->unsignedInteger('blood_group_id');
            $table->foreign('blood_group_id')->references('id')->on('blood_groups');

            $table->timestamp('last_blood_donation')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('facebook_id',250)->nullable();
            $table->string('photo',200)->nullable();
            $table->tinyInteger('donation_status',false, 1)->default(1)->comment('1=donate blood, 2=If Urgent, I can donate Blood');
            $table->tinyInteger('member_type',false,1)->default(1)->comment('1=Donate blood, 2=  I want to be a voluntary member');
            $table->tinyInteger('status',false,1)->default(0)->comment('1=Active,2=Inactive');
            $table->author();
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
        Schema::dropIfExists('members');
    }
}

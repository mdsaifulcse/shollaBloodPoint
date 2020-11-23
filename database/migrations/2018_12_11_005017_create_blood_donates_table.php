
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_donates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('Identify ths member By this user id ');
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('last_blood_donation');
            $table->string('patient_name')->nullable();
            $table->string('patient_mobile')->nullable();
            $table->string('patient_diseases')->nullable();
            $table->string('hospital')->nullable();
            $table->integer('number_of_donation')->nullable()->comment('Result of how many time member donated blood ');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('blood_donates');
    }
}

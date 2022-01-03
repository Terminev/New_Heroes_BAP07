<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string("first_name", 40);
            $table->string("last_name", 40);
            $table->string("email")->unique();
            $table->string("password");
            $table->integer("phone_number")->nullable();
            $table->year("birth_date");
            $table->string("localisation")->nullable();
            $table->string("bio")->nullable();
            $table->string("sport_practiced")->nullable();
            $table->string("domain_of_activity")->nullable();
            $table->boolean("search_job")->default(false);
            $table->integer("pay_max")->nullable();
            $table->integer("pay_min")->nullable();
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
        Schema::dropIfExists('athletes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcement_companies', function (Blueprint $table) {
            $table->id();
            $table->integer('compagnies_id');
            $table->string('announcement_title');
            $table->string('localisation');
            $table->string('domaine');
            $table->longText('announcement_description');
            $table->integer('pay');
            $table->string('type_of_contract');
            $table->integer('time_work');
            $table->integer('number_of_jobs');
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
        Schema::dropIfExists('announcement_companies');
    }
}

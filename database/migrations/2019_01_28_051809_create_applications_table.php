<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pan_number');
            $table->string('compagny_number');
            $table->string('innovation_field');
            $table->string('innovation_description');
            $table->string('innovation_sector');
            $table->string('startup_description');
            $table->string('estimated_cost');
            $table->string('invested_funds');
            $table->string('expediture_product');
            $table->string('expediture_sales');
            $table->string('user_expectation');
            $table->string('inspiration');
            $table->string('tech_innovation');
            $table->string('presentation_file')->default(null);
            $table->boolean('isStarted');
            $table->boolean('isAccepted')->default(false);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('isPresentationSubmited')->default(false);
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
        Schema::dropIfExists('applications');
    }
}

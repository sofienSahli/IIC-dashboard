<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications_category', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');
            $table->integer('applications_id')->unsigned();
            $table->foreign('applications_id')->references('id')
                ->on('applications')->onDelete('cascade');

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
        Schema::dropIfExists('category_application');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('email', '250');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cin');
            $table->string('role');
            $table->date('birth_date');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('degree');
            $table->string('work');
            $table->string('address');
            $table->boolean('isActive')->default(false);
            $table->string('profile_picture')->default(null);
            $table->rememberToken();
            $table->timestamps();
        });


    }
//         , 'gender', 'degree', 'work', 'address'

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

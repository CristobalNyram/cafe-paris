<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('first_surname');
            $table->string('second_surname');
            $table->string('user')->unique();
            $table->string('gender',1);
            $table->string('address')->nullable();
            $table->string('curp',20)->unique()->nullable();
            $table->string('phone_number',20)->nullable();

      
            $table->date('date_birth')->nullable();

    
            $table->string('email')->unique();
            $table->string('status',2);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('type_user',2);


      
        
        });
    }

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
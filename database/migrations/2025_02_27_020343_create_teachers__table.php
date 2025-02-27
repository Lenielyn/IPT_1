<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_', function (Blueprint $table) {
            $table->integer("teacher_id");
            $table->string("email");
            $table->string("password");
            $table->string("fname");
            $table->string("lname");
            $table->date("dob");
            $table->string("phone");
            $table->string("mobile");
            $table->boolean("status");
            $table->date("last_login_date");
            $table->string("last_login_ip");
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
        Schema::dropIfExists('teachers_');
    }
};

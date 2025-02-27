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
        Schema::create('classrooms__', function (Blueprint $table) {
            $table->integer("classroom_id");
            $table->year("year");
            $table->integer("grade_id");
            $table->string("section");
            $table->boolean("status");
            $table->string("remarks");
            $table->integer("teacher_id");
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
        Schema::dropIfExists('classrooms__');
    }
};

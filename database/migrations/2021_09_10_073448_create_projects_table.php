<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_uil');
            $table->string('data');
            $table->integer('hot');
            $table->string('video_uil');
            $table->string('company');
            $table->string('money');
            $table->string('cycle');
            $table->string('particulars');
            $table->string('show');
            $table->unsignedBigInteger('categories_id')->nullable();
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

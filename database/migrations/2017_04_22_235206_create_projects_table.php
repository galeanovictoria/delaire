<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('proj_id');
            $table->string('proj_title');
            $table->string('proj_type');
            $table->string('proj_img');
            $table->mediumText('proj_tools');
            $table->string('proj_year');
            $table->string('proj_employer');
            $table->string('proj_role');
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
        Schema::drop('projects');
    }
}

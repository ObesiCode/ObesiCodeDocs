<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_projects', function (Blueprint $table) {
            $table->increments('Project_ID');
            $table->integer('Customer_ID');
            $table->string('projectname');
            $table->string('email');
            $table->string('operatingsystem');
            $table->string('application');
            $table->string('hardware');
            $table->string('contactperson');
            $table->string('last_contact');
            $table->string('next_contact');
            $table->binary('is_active');
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
        //
    }
}

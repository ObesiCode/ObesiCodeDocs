<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblOffertes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_offertes', function (Blueprint $table) {
            $table->increments('Offerte_ID');
            $table->integer('Customer_ID');
            $table->integer('Project_ID');

            $table->string('payement_date');
            $table->string('date_of_action');
            $table->string('Offerte_number');
            $table->string('email');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customers', function (Blueprint $table) {
            $table->increments('Customer_ID');
            $table->string('adress');
            $table->string('prospect');
            $table->string('city');
            $table->string('email');
            $table->string('customer_name');
            $table->string('faxnumber');
            $table->string('phonenumber');
            $table->string('bankaccountnumber');
            $table->dateTime('date_of_action');
            $table->string('last_action');
            $table->string('next_action');
            $table->integer('saldo');

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

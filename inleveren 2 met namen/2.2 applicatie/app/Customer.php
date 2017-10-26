<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = "tbl_customers";
    protected $primaryKey = "Customer_ID";
}

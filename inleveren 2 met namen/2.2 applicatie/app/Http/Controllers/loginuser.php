<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\IFTTTHandler;

class loginuser extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * looking at the auth user name and sending them to their
     * respective view
     * @return view
     */
    public function loginuserstuf()
   {
        $test = Auth::user()->name;

        if ($test == 'admin')
        {
            $sales = \App\sales::all();
            $dev = \App\dev::all();
            $financ =\App\finance::all();
            $nega = 0;

            return view('admin/admin')->with('customer',$sales)->with('development',$dev)->with('finance',$financ)->with('nega',$nega);
        }
        if($test == 'sales')
        {
            $sales = \App\sales::all();
            $log = \App\log::all();
            $log = $log->first();



            return view('sales/sales')->with('customers',$sales)->with('log',$log);

        }
       if($test == 'finance')
        {
            $log = \App\log::all();
            $log = $log->first();

            $customers = \App\Customer::all();
            $projects = \App\Project::all();
            $finance = \App\finance::all();
            $id_name = DB::table('tbl_projects')->select('Project_ID')->select("projectname")->get();
            $id_name_a = $id_name->toArray();


            return view('finance/finance')->with('log',$log)->with('Customers',$customers)->with('invoices',$finance)
                ->with('projects', $projects)
                ->with('id', $id_name_a);
        }
        if($test == 'development')
        {


            $projects = \App\dev::all();
            $log = \App\log::all();
            $log = $log->first();




            return view('development/development')->with('projects',$projects)->with('log',$log);
        }




   }


}

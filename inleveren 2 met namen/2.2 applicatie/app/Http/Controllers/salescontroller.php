<?php

namespace App\Http\Controllers;

use App\dev;
use App\log;
use App\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\logcontroller;
class salescontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = \App\sales::all();
        $log = \App\log::all();
        $log = $log->first();



        return view('sales/sales')->with('customers',$sales)->with('log',$log);
    }

    /**
     * @param $id
     * returning the salesviewer with the selected user by parameter $id
     * @return project view
     */
    public function view($id)
    {
        $sales = \App\sales::all();
        $user = sales::where('Customer_ID' ,$id)->get()->first();
        $log = \App\log::all();
        $log = $log->first();
        $dev = dev::where('Customer_ID',$id)->get();



        if (empty($user))
        {
            return redirect('sales/sales');

        }


        return view('sales/salesviewer')->with('customer', $user)->with('customers',$sales)->with('log',$log)->with('developmentprojects',$dev);

    }

    /**
     * @param $id
     * @param $projectid
     * returning the projectview with the selected project by parameter $id
     * the user data is also returned
     * @return projectview
     */
    public function viewproject($id, $projectid)
    {

        $sales = \App\sales::all();
        $user = sales::where('Customer_ID' ,$id)->get()->first();
        $log = \App\log::all();
        $log = $log->first();
        $dev = dev::where('Customer_ID',$id)->get();
        $projectid2 = dev::where('Project_ID',$projectid)->get()->first();

        if (empty($projectid2))
        {
            return redirect('sales/sales');

        }

        return view('sales/salesviewer_projects')->with('customer', $user)->with('customers',$sales)->with('log',$log)->with('dev',$dev)->with('project',$projectid2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {



            $this->validate($request,[
                'customer' => 'required|min:3|string',
                'prospect' => 'required|min:3|string',
                'doa' => 'required|date',
                'city' => 'required|min:1|string',
                'email' => 'required|E-Mail',
                'adress' => 'required|string',
                'phonenumber' => 'required|string',
                'fax' => 'required|string',
                'banknm' => 'required|string',
                'balance' => 'required|string|max:10',
                'doac' => 'required|date',
                'lastaction' => 'required|string',
                'nextaction' => 'required|string',

            ]);




            $sales = new \App\sales();
            $sales->adress              =   $request->adress;
            $sales->bankaccountnumber   =   $request->banknm;
            $sales->city                =   $request->city;
            $sales->customer_name       =   $request->customer;
            $sales->date_of_action      =   $request->doa;
            $sales->email               =   $request->email;
            $sales->faxnumber           =   $request->fax;
            $sales->last_action         =   $request->lastaction;
            $sales->next_action         =   $request->nextaction;
            $sales->bkr                 =   $request->bkr;
            $sales->approved            =   $request->approved;
            $sales->phonenumber         =   $request->phonenumber;
            $sales->prospect            =   $request->prospect;
            $sales->saldo               =   $request->balance;

            $sales->save();






        return redirect('sales?msg');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateuser(Request $request)
    {

        $this->validate($request,[
            'Customer_ID' => '|required|',
            'customer' => 'required|min:3|string',
            'prospect' => 'required|min:3|string',

            'city' => 'required|min:1|string',
            'email' => 'required|E-Mail',
            'adress' => 'required|string',
            'phonenumber' => 'required|string',
            'fax' => 'required|string',
            'banknm' => 'required|string',
            'balance' => 'required|string|max:10',

            'lastaction' => 'required|string',
            'nextaction' => 'required|string',

        ]);



        $customerid = $request->Customer_ID;

        $sales = \App\sales::find($customerid);
        $sales->adress              =   $request->adress;
        $sales->bankaccountnumber   =   $request->banknm;
        $sales->city                =   $request->city;
        $sales->customer_name       =   $request->customer;
        
        $sales->email               =   $request->email;
        $sales->faxnumber           =   $request->fax;
        $sales->last_action         =   $request->lastaction;
        $sales->next_action         =   $request->nextaction;
        $sales->phonenumber         =   $request->phonenumber;
        $sales->bkr                 =   $request->bkr;
        $sales->approved            =   $request->approved;
        $sales->prospect            =   $request->prospect;
        $sales->saldo               =   $request->balance;
        $sales->save();





        return redirect('sales?msg');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     *  \search the database on basis of the search request that was given and return
     * the corrosponding search view
     * @return $this
     */
    public function search(Request $request)
    {
        $user = sales::where('customer_name','LIKE' ,'%'.$request->search.'%')->get();

        $adress = sales::where('adress','LIKE','%'.$request->search.'%')->get();

        $city = sales::where('city','LIKE','%'.$request->search.'%')->get();

        $email =  sales::where('email','LIKE','%'.$request->search.'%')->get();

        $id = sales::where('Customer_ID','LIKE',$request->search)->get();

        $banknm = sales::where('bankaccountnumber','LIKE','%'.$request->search.'%')->get();

        return view('searchsales')->with('user',$user)->with('adress',$adress)->with('city',$city)->with('email',$email)->with('id',$id)->with('banknm',$banknm);
    }

}

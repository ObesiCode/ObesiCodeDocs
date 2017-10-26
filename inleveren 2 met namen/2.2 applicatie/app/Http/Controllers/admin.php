<?php

namespace App\Http\Controllers;

use App\finance;
use Illuminate\Http\Request;
use App\dev;
use App\log;
use App\sales;

use Illuminate\Support\Facades\DB;

class admin extends Controller
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
        $dev = \App\dev::all();
        $financ =\App\finance::all();
        $nega = 0;

        if (\Auth::user()->name == 'admin') {

            return view('admin/admin')->with('customer', $sales)->with('development', $dev)->with('finance', $financ)->with('nega', $nega);
        }
        else
            return back();
    }

    /**
     * @return
     * the admin view with only the negative saldo accounts
     */
    public function negativeindex()
    {
        $sales = \App\sales::where('saldo','<=',-500)->get();

        $q =\App\sales::select('Customer_ID')->where('saldo','<=',-500)->get();




    $d = \App\dev::where('Customer_ID', $q->first()->Customer_ID)->get();





        $dev = \App\dev::all();
        $financ =\App\finance::all();
        $nega = 1;


        return view('admin/admin')->with('customer',$sales)->with('development',$dev)->with('finance',$financ)->with('nega',$nega);
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
        //
    }

    /**
     * @param Request $request
     * update the projects table
     * @return admin view
     */
    public function updateproject(Request $request)
    {
        $this->validate($request,[
            'projectname' => 'required|min:3|string',



            'email' => 'required|E-Mail',



            'application' => 'required|string',
            'hardware' => 'required|string',
            'operatingsystem' => 'required',
            'last_contact' => 'required|string',
            'next_contact' => 'required|string',
            'contactperson' => 'required|string'
        ]);





        $customerid = $request->projectid;


        $dev = \App\dev::find($customerid);


        $dev->projectname      =   $request->projectname;
        $dev->contactperson   =   $request->contactperson;
        $dev->Customer_ID                =   $request->customerid;
        $dev->email       =   $request->email;
        $dev->hardware      =   $request->hardware;
        $dev->last_contact               =   $request->last_contact;
        $dev->operatingsystem           =   $request->operatingsystem;
        $dev->application =             $request->application;
        $dev->next_contact       =   $request->next_contact;
        $dev->is_active = $request->is_active;
        $dev->status            =$request->status;

        $dev->save();
        return redirect('admin');
    }

    /**
     * @param Request $request
     * updaten van een bestaande invoice op basis van de megegeven id
     * @return teruggaan naar laatste veld
     */
    public function updateinvoice(Request $request)
    {
        $finance =  \App\finance::find($request->invoiceid);

        $finance->Customer_ID           =    $request->customerid;
        $finance->Project_ID            =    $request->projectid;
        $finance->email                 =    $request->email;
        $finance->payement_date         =    $request->payement_date;

        $finance->amount                 =    $request->amount;
        $finance->ispayed                 = $request->ispayed;


        $finance->save();



        return back();
    }


    /**
     * @param Request $request
     * updaten van de client gegevens op basis van een meegegeven id
     * @return admin view
     */
    public function updateuseradmin(Request $request)
    {


        $this->validate($request,[
            'Customer_ID' => '|required|',
            'customer' => 'required|min:3|string',
            'prospect' => 'required|min:3|string',
            'doa' => 'required|date',
            'city' => 'required|min:1|string',
            'email' => 'required|E-Mail',
            'adress' => 'required|string',
            'phonenumber' => 'required|string',
            'fax' => 'required|string',
            'banknm' => 'required|string',
            'balance' => 'required|integer|max:10',

            'lastaction' => 'required|string',
            'nextaction' => 'required|string',

        ]);



        $customerid = $request->Customer_ID;

        $sales = \App\sales::find($customerid);
        $sales->adress              =   $request->adress;
        $sales->bankaccountnumber   =   $request->banknm;
        $sales->city                =   $request->city;
        $sales->customer_name       =   $request->customer;
        $sales->date_of_action      =   $request->doa;
        $sales->email               =   $request->email;
        $sales->faxnumber           =   $request->fax;
        $sales->last_action         =   $request->lastaction;
        $sales->next_action         =   $request->nextaction;
        $sales->phonenumber         =   $request->phonenumber;
        $sales->prospect            =   $request->prospect;
        $sales->saldo               =   $request->balance;
        $sales->save();

       echo $request->balance;
        if ($request->balance < -500)
        {
            $project = \App\dev::where('Customer_ID',$request->Customer_ID)->get();

            foreach($project as $pr)
            {
                $pr->is_active = 0;
                $pr->save();

            }

                return redirect('admin');

        }

       else if ($request->balance >= -500)
        {
            $project = \App\dev::where('Customer_ID',$request->Customer_ID)->get();

            foreach($project as $pr)
            {
                $pr->is_active = 1;
            $pr->save();
            }

            return redirect('admin');

        }


            else
        {
            return redirect('admin');
        }






    }


    /**
     * @param Request $request
     * search the database on basis of the search request that was given and return
     * the corrosponding search view
     * @return adminssearch
     */
    public function search(Request $request)
    {





        $user = sales::where('customer_name','LIKE' ,'%'.$request->search.'%')->get();

        $adress = sales::where('adress','LIKE','%'.$request->search.'%')->get();

        $city = sales::where('city','LIKE','%'.$request->search.'%')->get();

        $email =  sales::where('email','LIKE','%'.$request->search.'%')->get();

        $id = sales::where('Customer_ID','LIKE',$request->search)->get();

        $banknm = sales::where('bankaccountnumber','LIKE','%'.$request->search.'%')->get();

        return view('admin/adminsearch')->with('user',$user)->with('adress',$adress)->with('city',$city)->with('email',$email)->with('id',$id)->with('banknm',$banknm);
    }


    /**
     * @param $id
     * alle user data die word meegegeven met request
     * @return admincustomer
     */
    public function changeuser($id)
    {

        $user = sales::where('Customer_ID' ,$id)->get()->first();
        $invoice = finance::where('Customer_ID',$id)->get();


        return view('admin/admincustomer')->with('user',$user)->with('invoices',$invoice);
    }

    /**
     * @param $id
     * alle project data halen
     * @return adminproject
     */
    public function changeproject($id)
    {
        $invoice = finance::where('Project_ID',$id)->get();
        $project = dev::where('Project_ID' ,$id)->get()->first();

        $total = 0;
        foreach ($invoice as $iv )
        {
            $total += $iv->amount;
        }


        return view('admin/adminprojects')->with('project',$project)->with('invoice',$invoice)->with('totalinvoices',$total);
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
    public function update(Request $request, $id)
    {
        //
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
}

<?php

namespace App\Http\Controllers;

use App\dev;
use App\finance;
use App\log;
use App\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class devcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $projects = \App\dev::all();
        $log = \App\log::all();
        $log = $log->first();


        if (\Auth::user()->name == 'admin' || \Auth::user()->name == 'development') {

            return view('development/development')->with('projects', $projects)->with('log', $log);
        }
        else
            return back();
    }

    /**
     * @param $projectid
     * reurning projectview on basis off project-id
     * @return mixed
     */
    public function viewproject($projectid)
    {

        $projects = \App\dev::all();
        $log = \App\log::all();
        $log = $log->first();


        $projectid2 = dev::find($projectid);

        $invoice = finance::where('Project_ID',$projectid)->get();

        $total = 0;
        foreach ($invoice as $iv )
        {
            $total += $iv->amount;
        }



        return view('development/developmentviewer')->with('projects',$projects)->with('log',$log)->with('project',$projectid2)->with('invoice',$invoice)->with('totalinvoices',$total);
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
            'projectname'       => 'required|min:3|string',
            'email'             => 'required|E-Mail',
            'phonenumber'       => 'required|string',
            'application'       => 'required|string',
            'hardware'          => 'required|string',
            'operatingsystem' => 'required',
            'last_contact' => 'required|string',
            'next_contact' => 'required|string',
            'contactperson' => 'required|string'
        ]);



        $dev = new \App\dev();
        $dev->projectname           =   $request->projectname;
        $dev->contactperson         =   $request->contactperson;
        $dev->Customer_ID           =   $request->Customer_ID;
        $dev->email                 =   $request->email;
        $dev->hardware              =   $request->hardware;
        $dev->last_contact          =   $request->last_contact;
        $dev->operatingsystem       =   $request->operatingsystem;
        $dev->application           =   $request->application;
        $dev->next_contact          =   $request->next_contact;


        $dev->projectname               =   $request->projectname;
        $dev->contactperson             =   $request->contactperson;
        $dev->Customer_ID               =   $request->Customer_ID;
        $dev->email                     =   $request->email;
        $dev->hardware                  =   $request->hardware;
        $dev->last_contact              =   $request->last_contact;
        $dev->operatingsystem           =   $request->operatingsystem;
        $dev->application               =   $request->application;
        $dev->next_contact              =   $request->next_contact;
        $dev->is_active = 1;
        $dev->status                    =   0;


        $dev->save();



        return redirect('sales?msg');



    }


    /**
     * @param Request $request
     * update the dev table on the database
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function updatedev(Request $request)
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
        $dev->is_active = 1;
        $dev->status            =$request->status;





        $dev->save();
        $dev = \App\dev::find($customerid);
        if ($dev->status == 2)
        {
            $data = \App\dev::all();
            $delete = \App\dev::find($customerid)->delete();
            $projects = \App\dev::all();
            $log = \App\log::all();
            $log = $log->first();
            return view('development/development')->with('projects',$projects)->with('log',$log);

        }


        return back();
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

    /**
     * @param Request $request
     * search the database on basis of the search request that was given and return
     * the corrosponding searchdevelopment view
     * @return mixed
     */
    public function search(Request $request)
    {

        $user = sales::where('customer_name','LIKE' ,'%'.$request->search.'%')->get();


        $customer = array(
        );

        foreach ($user as $project)
        {
            $test = dev::where('Customer_ID','LIKE','%'.$project->Customer_ID.'%')->get()->first();

            if (empty($test))
            {


            }
            else {
                array_push($customer, $test);
            }
            }

        $id = dev::where('projectname','LIKE','%'.$request->search.'%')->get();

        $projectid = dev::where('Project_ID','LIKE','%'.$request->search.'%')->get();

        return view('searchdevelopment')->with('user',$customer)->with('id',$id)->with('projectid',$projectid);
    }

}

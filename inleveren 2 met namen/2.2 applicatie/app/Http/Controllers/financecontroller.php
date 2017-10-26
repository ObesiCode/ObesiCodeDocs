<?php

namespace App\Http\Controllers;

use App\dev;
use App\finance;
use App\Project;
use App\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\IFTTTHandler;


class financecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $log = \App\log::all();
        $log = $log->first();

        $customers = \App\Customer::all();
        $projects = \App\Project::all();
        $finance = \App\finance::all();
        $id_name = DB::table('tbl_projects')->select('Project_ID')->select("projectname")->get();
        $id_name_a = $id_name->toArray();

        if (\Auth::user()->name == 'admin' || \Auth::user()->name == 'finance') {


            return view('finance/finance')->with('log', $log)->with('Customers', $customers)->with('invoices', $finance)
                ->with('projects', $projects)
                ->with('id', $id_name_a);
        }
        else
            return back();

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

    public function invoicestore(Request $request)
    {


        $finance = new \App\finance();
        $finance->date_of_action        =    $request->Doa;
        $finance->Customer_ID           =    $request->customer_id;
        $finance->Project_ID            =    $request->Project;
        $finance->email                 =    $request->email;
        $finance->payement_date         =    $request->payment;
        $finance->Offerte_ID            =    0;
        $finance->Offerte_number = 0;
        $finance->email = 'test';
        $finance->payement_date        =    $request->Doa;



    }


    /**
     * @param Request $request
     * update the invoice in the databse that corrospondes with the info that was given in the request
     * @return to last view
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
                  $finance->is_active             =$request->is_active;

            $finance->save();



            return back();




    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if (isset($request->Project)){



                    $this->validate($request,[




                        'Doa' => 'required|Date',
                        'Email' => 'required|Email',
                        'Payment' => 'required|Date',
                        'Customer' => 'required|Int',
                        'Project' => 'required|Int',
                        'Amount'  => 'required|Int'





                    ]);
                    $id = DB::table('tbl_offertes')
                        ->select(DB::raw('MAX(invoice_ID)as i'))
                        ->where('Project_ID', "=" , $request->Projec)->get();


                    if ($id[0]->i == null){
                        $id[0]->i = 0;
                    }




                    $finance = new \App\finance();
                    $finance->date_of_action        =    $request->Doa;
                    $finance->Customer_ID           =    $request->Customer;
                    $finance->Project_ID            =    $request->Project;
                    $finance->email                 =    $request->Email;
                    $finance->payement_date         =    $request->Payment;

                    $finance->amount                 =    $request->Amount;
                    $finance->ispayed                 = 0;



                    $finance->save();

            $finance->save();
            $customer = \App\sales::find($request->Customer);
            $eraf = $customer->saldo -$finance->amount;

            $customer->saldo  = $eraf ;
            $customer->save();
            $customernew = \App\sales::find($request->Customer);
            if($customernew->saldo < -500)
            {
                $project = \App\dev::where('Customer_ID',$customernew->Customer_ID)->get();

                foreach($project as $pr)
                {
                    $pr->status = 3;
                    $pr->save();

                }
            }
            else
            {

            }

            return back();



                }


        else{
            $projects = \App\Project::where("Customer_ID", $request->Customer)->take(9999999)->get();
            $log = \App\log::all();
            $log = $log->first();
            $id_name = DB::table('tbl_projects')->select('Project_ID')->select("projectname")->get();
            $id_name_a = $id_name->toArray();

            $customers = \App\Customer::all();




            if (!$projects->isEmpty()){

                $finance = \App\finance::all();

                return view('finance\project')
                    ->with('projects',$projects)
                    ->with('customer',$request->Customer)
                    ->with('log', $log)
                    ->with("Customers", $customers)
                    ->with('invoices',$finance)
                    ->with('id', $id_name_a);



            }
            else{


                $finance = \App\finance::all();
                return view('finance/finance')->with('projects',$projects)

                    ->with('log', $log)
                    ->with("noProject","This client has no projects")
                    ->with("Customers", $customers)
                    ->with('customer',$request->Customer)
                    ->with('invoices',$finance)
                    ->with('$id', $id_name_a);


            }


        }

    }


    /**
     * @param $id
     * ga naar invoice eidt pagina met data die is gehaald uit de megegeven id parameter
     * @return $invoice-edit
     */
    public function editinvoice($id)
    {


        $invoices = finance::where('invoice_ID' ,$id)->get()->first();



        return view('finance/invoice-edit')->with('invoices',$invoices);
    }


    /**
     * @param $request
     * de log updaten
     * @return finance
     */
    public function log($request){
        if($request->log == null)
        {
            $request->log = "Log";
        }
        $log = \App\log::find(1);
        $log->log = $request->log;

        $log->save();
        return redirect('finance?msg');
    }

    /**
     * @param Request $request
     *  * search the database on basis of the search request that was given and return
     * the corrosponding search view
     * @return mixed
     */
    public function search(Request $request)
    {
        $user = finance::where('Customer_ID','LIKE' ,'%'.$request->search.'%')->get();

        $projectid = finance::where('Project_ID','LIKE' ,'%'.$request->search.'%')->get();

        $invoice = finance::where('invoice_ID','LIKE' ,'%'.$request->search.'%')->get();

        $name = sales::where('customer_name','LIKE','%'.$request->search.'%')->get();

        $test = sales::where('customer_name','LIKE' ,'%'.$request->search.'%')->get();


        $name = array(
        );

        foreach ($test as $username)
        {
            $test = finance::where('Customer_ID','LIKE','%'.$username->Customer_ID.'%')->get()->first();

            if (empty($test))
            {


            }
            else {
                array_push($name, $test);
            }
        }






        $projectnames = dev::where('projectname','LIKE','%'.$request->search.'%')->get();

        return view('searchinvoice')->with('users',$user)->with('invoices',$invoice)->with('projectids',$projectid)->with('customers',$name)->with('projects',$projectnames);
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

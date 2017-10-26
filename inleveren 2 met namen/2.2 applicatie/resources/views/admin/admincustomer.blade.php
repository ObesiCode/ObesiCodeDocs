@extends('layouts.layoutbasictop')

@section('content')

    <div class="main" id="test">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown btn-link" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>

        <div class="header">
            <div class="row">
                <div class="links">
                    <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/sales" class="" id="linktext">Sales</a></div>
                    <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/finance" class="" id="linktext">Finance</a></div>
                    <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/development" class="" id="linktext">Development</a></div>
                    <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/admin" class="" id="linktext">Admin</a></div>
                </div>
            </div>
        </div>


        @if ($errors->any())
            <div class="col-sm-12">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{$error}}</li>

                    @endforeach
                </ul>
            </div>

        @endif
<div class="col-sm-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>customer: {{$user->customer_name}}</h3>

        </div>
        <div class="panel-body">
            <div class="col-xs-4">
                <form action="/admin/userupdate" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
            <label for="customerid" id="basicblack">customerid</label>
            <input readonly type="text" name="Customer_ID" id="customerid" class="form-control" value="{{$user->Customer_ID}}">
                    </div>
                    <div class="form-group">
            <label for="customername" id="basicblack">customername</label>
            <input type="text" name="customer" id="customername" class="form-control" value="{{$user->customer_name}}">
                    </div>
                    <div class="form-group">
            <label for="adress" id="basicblack">adress</label>
            <input type="text" name="adress" id="adress" class="form-control" value="{{$user->adress}}">
                    </div>
                    <div class="form-group">
            <label for="prospect" id="basicblack">prospect</label>
            <input type="text" name="prospect" id="prospect" class="form-control" value="{{$user->prospect}}">
                    </div>
                    <div class="form-group">
                <label for="city" id="basicblack">city</label>
                <input type="text" id="city" name="city" class="form-control" value="{{$user->city}}">
                    </div>
                    <div class="form-group">
                <label for="email" id="basicblack">email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                <label for="faxnumber" id="basicblack">faxnumber</label>
                <input type="text" id="faxnumber" name="fax" class="form-control" value="{{$user->faxnumber}}">
                    </div>
            </div>
            <div class="col-xs-4">

                <div class="form-group">
                <label for="phonenumber" id="basicblack">phone number</label>
                <input type="text" id="phonenumber" class="form-control" name="phonenumber" value="{{$user->phonenumber}}">
                </div>
                <div class="form-group">
                <label for="bankaccountnum" id="basicblack">bankaccountnumber</label>
                <input type="text" id="bankaccountnum" class="form-control" name="banknm" value="{{$user->bankaccountnumber}}">
                </div>
                <div class="form-group">
                <label for="doa" id="basicblack">date of action</label>
                <input type="text" id="doa" class="form-control" name="doa" value="{{$user->date_of_action}}">
                </div>
                <div class="form-group">
                <label for="lastaction" id="basicblack">last action</label>
                <input type="text" id="lastaction" class="form-control" name="lastaction" value="{{$user->last_action}}">
                </div>
                <div class="form-group">
                <label for="nextaction" id="basicblack">nextaction</label>
                <input type="text" id="nextaction" class="form-control" name="nextaction" value="{{$user->next_action}}">
                </div>
                <div class="form-group">
                <label for="saldo" id="basicblack">balance</label>
                <input type="number" id="saldo" class="form-control" name="balance" value="{{$user->saldo}}">
                </div>
                <div class="form-group">
                <input type="submit" class="number" id="submitbuttonsales">
                </div>

                </form>
            </div>
        </div>
    </div>
</div>

        @foreach($invoices as $invoice)
            <div class="col-sm-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>invoices</h3></div>
                    <form action="\finance/invoiceupdate" method="post">
                        {{csrf_field()}}
            <div class="form-group">
                <label for="invoiceid">invoice id</label>
                <input  readonly type="text" class="form-control" name="invoiceid" id="invoiceid" value="{{$invoice->invoice_ID}}">
            </div>
                    <div class="form-group">
                        <label for="customerid">Customer id</label>
                        <input readonly type="text" class="form-control" name="customerid" id="customerid" value="{{$invoice->Customer_ID}}">
                    </div>
                    <div class="form-group">
                        <label for="projectid">project id</label>
                        <input readonly type="text" class="form-control" name="projectid" id="projectid" value="{{$invoice->Project_ID}}">
                    </div>
                    <div class="form-group">
                        <label for="payementdate">payement date</label>
                        <input type="text" class="form-control" name="payement_date" id="payementdate" value="{{$invoice->payement_date}}">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{$invoice->email}}">
                    </div>
                    <div class="form-group">
                        <label for="amount">amount</label>
                        <input type="text" class="form-control" name="amount" id="amount" value="{{$invoice->amount}}">
                    </div>

                        <label for="ispayed">currently:@if($invoice->ispayed == 1 )
                                Payed succesfully
                            @else
                                not payed
                            @endif</label>
                    <div class="form-group">
                        <select name="ispayed" id="ispayed" class="form-control">
                            <option value="0">not payed</option>
                            <option value="1">payed </option>
                        </select>
                    </div>

                        <div class="form-group">
                            <label for="is_active">Currently:@if($invoice->is_active == 1 )
                                    Active
                                @else
                                    Not Active
                                @endif</label>
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="0">Nonactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn-primary" id="submitbuttonsales">
                </div>
                    </form>
                </div>
            </div>
            @endforeach






    </div>

    <footer>


        <!-- The Modal -->
        <button id="help" class="btn btn-info"  >Help</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Help</h2>
                </div>
                <div class="model-seperator">
                    <p>Hier kan je de gegevens van {{$user->customer_name}} aanpassen en updaten</p>
                    <p>Updaten via de send knop </p>
                    <p>Om uit te loggen klik je op het blauwe admin woord bovenaan de pagina en klik je daarna op logout</p>
                </div>
                <div class="modal-body">
                    <p>Here you can change/update the info of user {{$user->customer_name}}  </p>
                    <p>Update using the send button</p>
                    <p>To logout you have to click the blue admin word at the top of the page and after that on the logout button beneath it </p>

                </div>


            </div>

        </div>

        <script>
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("help");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

    </footer>

@endsection
@extends('layouts.layoutbasicbottom')

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
        @if(Auth::user()->name == "admin")
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
        @endif




        @if ($errors->any())
            <div class="col-sm-12">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{$error}}</li>

                    @endforeach
                </ul>
            </div>

        @endif
        <form action="/finance">
            <input type="submit" class="btn-primary" value="Go Back" />
        </form>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>invoice case number: {{$invoices->invoice_ID}}</h3>

                </div>
                <div class="panel-body">
                    <div class="col-xs-4">
                        <form action="\finance/invoiceupdate" method="post">
                            {{csrf_field()}}
                            <label for="invoiceid">invoice-id:</label>
                            <div class="form-group">

                            <input readonly type="text" id="invoiceid" name="invoiceid" value="{{$invoices->invoice_ID}}">
                            </div>
                            <label for="customerid">customer-id:</label>
                            <div class="form-group">

                            <input readonly type="text" id="customerid" name="customerid" value="{{$invoices->Customer_ID}}">
                            </div>
                            <label for="projectid">project-id:</label>
                            <div class="form-group">

                            <input readonly type="text" id="projectid" name="projectid" value="{{$invoices->Project_ID}}">
                            </div>
                            <label for="payement_date">payement-date:</label>
                            <div class="form-group">

                            <input type="text" id="payement_date" name="payement_date" value="{{$invoices->payement_date}}">
                            </div>
                            <label for="amount">amount to be payed:</label>
                            <div class="form-group">

                            <input type="number" id="amount" name="amount" value="{{$invoices->amount}}">
                            </div>
                            <label for="email">contactemail:</label>
                            <div class="form-group">

                            <input type="text" id="email" name="email" value="{{$invoices->email}}">
                            </div>
                            <div class="form-group">
                            <label for="ispayed">currently:@if($invoices->ispayed == 1 )
                                    Payed succesfully
                                @else
                                    not payed
                                @endif</label>
                            <select name="ispayed" id="ispayed">
                                <option value="0">not payed</option>
                                <option value="1">payed </option>
                            </select>




                            </div>
                            <div class="form-group">
                                <label for="is_active">Currently:@if($invoices->is_active == 1 )
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

                                <input type="submit" class="number" id="submitbuttonsales">
                            </div>

                        </form>




                </div>
            </div>
        </div>





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
                        <p>Aan de linkerkant kan je een invoice maken voor </p>
                        <p>Het middelveld van het  scherm is een tabel waarin alle Offertes staan en hun Invoice-id ,Customer-id,Project-id,amount en is payed</p>
                        <p>U kunt naar de offerte gegevens gaan door op de "Edit" knop te drukken bij de specifieke naam </p>
                        <p>Boven de tabel is een search functie die je kan gebruiken om specifieke offerte te zoeken</p>
                        <p>Je kan het veld aan de rechterkant van het scherm gebruiken als uw algemene logboek gebruiken ( deze word gedeeld over alle afdelingen )</p>
                        <p>Updaten via de send knop </p>
                        <p>Je kan teruggaan naar het finance scherm door de navigatiebalk of de Go Back knop linksbovenaan de pagina </p>
                        <p>Om uit te loggen klik je op het blauwe {{Auth::user()->name}} woord bovenaan de pagina en klik je daarna op logout</p>
                    </div>
                    <div class="modal-body">
                        <p>You can select a name on the left side of the screen then you will be taken to the create screen where you can create a new invoice for this user </p>
                        <p>the middle area of the screen is a table with all invoices with their Invoice-id,Customer-id,Project-id,amount and is payed</p>
                        <p>U can go to a respective invoice by clicking it respective "Edit" button </p>
                        <p>Above the table is a search function you can use to search a specific invoice </p>
                        <p>You can use the right area as a commen area for your logg ( it will be used by all departments )</p>
                        <p>Update using the send button</p>
                        <p>You can return to the finance page by clicking the link in the navigationbar or the Go Back button on the top left</p>
                        <p>To logout you have to click the blue {{Auth::user()->name}} word at the top of the page and after that on the logout button beneath it </p>
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

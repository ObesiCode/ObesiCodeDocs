
@extends('layouts.layoutbasictop')

@section('content')
    <style>
        .submit
        {

            vertical-align: bottom;
        }
    </style>
    <div class="main">
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

        <!--website start hier hierboven header laravel !-->


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



        <div class="input">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Customer</h1>
                </div>
                <div class="panel-body">
                    <form action="../finance/store" method="post">
                        <div class="col-xs-4">
                            <!--<label for="invoice_id"> Invoice Id</label>
                            <input type="text" id="invoice_id">
                            -->
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="Customer">Customer</label>
                                <select name="Customer" id="Customer" class="form-control">
                                        @foreach($Customers as $customer)
                                        <option value="{{$customer->Customer_ID}}">{{$customer->customer_name}}</option>
                                        @endforeach
                                </select>

                            </div>

                        </div>
                        <div class="form-group col-xs-4 submit">

                            <input type="submit" class="form-control">
                        </div>

                    </form>
                    @if ($errors->any())
                        <div class="col-sm-12">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item list-group-item-danger">{{$error}}</li>

                                @endforeach
                            </ul>
                        </div>

                    @endif

                    @if(isset($noProject))

                        <h3>{{$noProject}}</h3>

                    @endif
                </div>
            </div>
        </div>

    </div>
        <div class="col-sm-4" id="testing">
            <div class="tableview" id="scrollablediv">
                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr >
                        <form action="/finance/search" method="post">
                            {{csrf_field()}}
                            <th id="customth"><label for="search" id="labeltext">Search</label>
                                <input type="text" id="basicblack" name="search" >
                                <input type="submit" id="submitbuttonsales" value="Send">
                        </form>
                        </th>

                    </tr>
                    <tr>
                        <th id="tabletoptext">Invoice-id</th>
                        <th id="tabletoptext">Customer-id</th>
                        <th id="tabletoptext">project-id</th>

                        <th id="tabletoptext">amount</th>
                        <th id="tabletoptext">is payed</th>
                        <th id="tabletoptext"><p>EDIT</p></th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($invoices as $sales)

                        <tr class="@if($sales->ispayed == 1)
                                alert-success
                                @else
                                alert-danger
                                @endif
">
                            <td><p id="basicblack">{{$sales->invoice_ID}}</p></td>
                            <td><p id="basicblack">{{$sales->Customer_ID}}</p></td>
                            <td><p id="basicblack">{{$sales->Project_ID}}</p></td>

                            <td><p id="basicblack">{{$sales->amount}}</p></td>
                            <td><p id="basicblack">
                                    @if($sales->ispayed == 1)
                                        Yes
                                        @else
                                        No
                                        @endif
                                </p></td>



                            <td>
                                <form action="\finance/invoice-edit/{{$sales->invoice_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form>

                            </td>

                        </tr>

                    @endforeach




                    </tbody>
                </table>

            </div>
    <script src="{{ asset('js/app.js') }}"></script>
</div>
        <div class="form-group">
            <form action="log" method="post">
                {{csrf_field()}}

                <textarea rows="4" cols="50" class="log" id="log" name="log" >{{$log->log}}</textarea>
                <input type="submit" class="btn-primary" id="button" value="Send">
            </form>
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
                    <p>Aan de linkerkant kan je de naam selecteren van wie je een offerte wilt toevoegen daarna word u naar de create scherm genomen</p>
                    <p>Het middelveld van het  scherm is een tabel waarin alle Offertes staan en hun Invoice-id ,Customer-id,Project-id,amount en is payed</p>
                    <p>U kunt naar de offerte gegevens gaan door op de "Edit" knop te drukken bij de specifieke naam </p>
                    <p>Boven de tabel is een search functie die je kan gebruiken om specifieke offerte te zoeken</p>
                    <p>Je kan het veld aan de rechterkant van het scherm gebruiken als uw algemene logboek gebruiken ( deze word gedeeld over alle afdelingen )</p>
                    <p>Updaten via de send knop </p>

                    <p>Om uit te loggen klik je op het blauwe {{Auth::user()->name}} woord bovenaan de pagina en klik je daarna op logout</p>
                </div>
                <div class="modal-body">
                    <p>You can select a name on the left side of the screen then you will be taken to the create screen where you can create a new invoice for this user </p>
                    <p>the middle area of the screen is a table with all invoices with their Invoice-id,Customer-id,Project-id,amount and is payed</p>
                    <p>U can go to a respective invoice by clicking it respective "Edit" button </p>
                    <p>Above the table is a search function you can use to search a specific invoice </p>
                    <p>You can use the right area as a commen area for your logg ( it will be used by all departments )</p>
                    <p>Update using the send button</p>

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

        <script src="{{ asset('js/app.js') }}"></script>
@endsection

@extends('layouts.layoutbasicbottom')

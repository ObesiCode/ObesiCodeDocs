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
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/sales" class="" id="linktext">Sales</a></div>
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/finance" class="" id="linktext">Finance</a></div>
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/development" class="" id="linktext">Development</a></div>
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
                    <h3>project: {{$project->projectname}}</h3>
                    <h4>total invoices amount: {{$totalinvoices}}</h4>


                </div>
                <div class="panel-body">
                    <div class="col-xs-4">
                        <form action="/admin/updateproject" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="hidden" name="customerid" value="{{$project->Customer_ID}}">
                                <input type="hidden" name="projectid" value="{{$project->Project_ID}}">
                                <label for="projectnaam" id="basicblack">projectname</label>
                                <input type="text" id="projectnaam" name="projectname" class="form-control" value="{{$project->projectname}}">
                            </div>
                            <div class="form-group">
                                <label for="email" id="basicblack">email</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{$project->email}}">
                            </div>
                            <div class="form-group">
                                <label for="operatingsystem" id="basicblack">operatingsystem</label>
                                <input type="text" id="operatingsystem" name="operatingsystem" class="form-control" value="{{$project->operatingsystem}}">
                            </div>
                            <div class="form-group">
                                <label for="application" id="basicblack">application</label>
                                <input type="text" id="application" name="application" class="form-control" value="{{$project->application}}">
                            </div>
                            <div class="form-group">
                                <label for="hardware" id="basicblack">hardware</label>
                                <input type="text" id="hardware" name="hardware" class="form-control" value="{{$project->hardware}}">
                            </div>
                            <div class="form-group">
                                <label for="contactperson" id="basicblack">contactperson</label>
                                <input type="text" id="contactperson" name="contactperson" class="form-control" value="{{$project->contactperson}}">
                            </div>
                            <div class="form-group">
                                <label for="last_contact" id="basicblack">last contact</label>
                                <input type="text" id="last_contact" name="last_contact" class="form-control" value="{{$project->last_contact}}">
                            </div>
                    </div>
                    <div class="col-xs-4">

                        <div class="form-group">
                            <label for="next_contact" id="basicblack">next action</label>
                            <input type="text" id="next_contact" name="next_contact" class="form-control" value="{{$project->next_contact}}">
                        </div>
                        <div class="form-group">
                            <label for="is_active" id="basicblack">
                                @if($project->is_active == 1)
                                    is active :Project is currently <b>active</b>
                                    @else
                                    is active :Project is currently <b>inactive</b>

                                    @endif
                            </label>
                            <select name="is_active" id="is_active" class="form-control">

                                @if($project->is_active == 1)
                                    <option value="1">active</option>
                                    <option value="2">inactive</option>
                                    @else
                                    <option value="2">inactive</option>
                                    <option value="1">active</option>
                                    @endif

                            </select>

                        </div>
                        <div class="form-group">
                            <label for="status">
                                @if ($project->status == 0)
                                    Currently: Not started
                                @elseif($project->status == 1)
                                    Currently: In Development
                                @elseif($project->status == 2)
                                    Currently: Finished
                                @endif

                            </label>
                            <select name="status" id="status" class="form-control">
                                <option value="0">Not started</option>
                                <option value="1">In Development</option>
                                <option value="2">Finished</option>
                            </select>
                        </div>




                        </div>

                        <div class="form-group">
                            <input type="submit" class="number" id="submitbuttonsales">
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        @foreach($invoice as $invoices)

            <div class="col-sm-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>invoices</h3></div>
                    <form action="\finance/invoiceupdate" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="invoiceid">invoice id</label>
                            <input  readonly type="text" class="form-control" name="invoiceid" id="invoiceid" value="{{$invoices->invoice_ID}}">
                        </div>
                        <div class="form-group">
                            <label for="customerid">Customer id</label>
                            <input readonly type="text" class="form-control" name="customerid" id="customerid" value="{{$invoices->Customer_ID}}">
                        </div>
                        <div class="form-group">
                            <label for="projectid">project id</label>
                            <input readonly type="text" class="form-control" name="projectid" id="projectid" value="{{$invoices->Project_ID}}">
                        </div>
                        <div class="form-group">
                            <label for="payementdate">payement date</label>
                            <input type="text" class="form-control" name="payement_date" id="payementdate" value="{{$invoices->payement_date}}">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{$invoices->email}}">
                        </div>
                        <div class="form-group">
                            <label for="amount">amount</label>
                            <input type="text" class="form-control" name="amount" id="amount" value="{{$invoices->amount}}">
                        </div>

                        <label for="ispayed">currently:@if($invoices->ispayed == 1 )
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
                            <input type="submit" class="form-control btn-primary" id="submitbuttonsales">
                        </div>
                    </form>
                </div>
            </div>




        @endforeach


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
                    <p>Hier kan je de gegevens van project {{$project->projectname}}   aanpassen en updaten</p>
                    <p>Updaten via de send knop </p>
                    @if(isset($invoice[0]))
                        <p>Je kan ook de gegevens van de offertes van project {{$project->projectname}} aanpassen</p>

                        @endif
                    <p>Om uit te loggen klik je op het blauwe admin woord bovenaan de pagina en klik je daarna op logout</p>
                </div>
                <div class="modal-body">
                    <p>Here you can change/update the info of project {{$project->projectname}}   </p>
                    <p>Update using the send button</p>
                    @if(isset($invoice[0]))
                        <p>You can also change or update the info of the {{$project->projectname}} invoices</p>

                    @endif
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

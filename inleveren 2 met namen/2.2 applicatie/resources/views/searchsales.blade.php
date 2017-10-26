@extends('layouts.layoutbasictop')

@section('content')

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

                <form action="/sales">
                    <input type="submit" class="btn-primary" value="Go Back" />
                </form>
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

        <!--website start hier hierboven header laravel !-->





<div class="panel panel-default">
    <div class="col-sm-12">
        <form action="/search/sales" method="post">
            {{csrf_field()}}
            <th id="customth"><label for="search" id="labeltext">Search</label>
                <input type="text" id="basicblack" name="search" >
                <input type="submit" id="submitbuttonsales" value="Send">
        </form>


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

                        <p>Er zijn een totaal van 6 tabellen met potentiele resultaten voor wat u zoekt </p>
                        <p>Door op een van de resultaton hun Edit knop in te drukken kunt u de specifieke client gegevens aanpassen</p>
                        <p>Er is ook nog een search functie voor als je een nieuwe search wilt uitvoeren</p>
                        <p>Om uit te loggen klik je op het blauwe {{Auth::user()->name}} woord bovenaan de pagina en klik je daarna op logout</p>
                    </div>
                    <div class="modal-body">

                        <p>There are a total of 6 tables with potential results for what you are looking for</p>
                        <p>By pushing the Edit button at one of the specific client results you go to their respective edit page </p>
                        <p>There is also another search function for if you want tou search something different </p>
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


    </div>
<div class="col-sm-6">

            <h2>results based on customer adresses</h2>
    <ul class="list-group" id="scrollablediv">
            <table class="table table-bordered" id="tableclass">
                <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>adress</th>
                    <th>customername</th>
                    <th>city</th>
                    <th>number</th>
                    <th>edit</th>
                </tr>
                </thead>
                <tbody>
@foreach($adress as $adr)

                   <tr>
                       <td>{{$adr->Customer_ID}}</td>
                       <td>{{$adr->adress}}</td>
                       <td>{{$adr->customer_name}}</td>
                       <td>{{$adr->city}}</td>
                       <td>{{$adr->phonenumber}}</td>
                       <td>
                           <form action="/sales/{{$adr->Customer_ID}}">
                               <input type="submit" class="btn-primary" value="edit" />
                           </form>
                       </td>
                   </tr>


    @endforeach
                </tbody>
            </table>
</ul>
</div>
</div>
            <div class="col-sm-6">
            <h2>results based on customer names</h2>
            <ul class="list-group" id="scrollablediv">

    <table class="table table-bordered" id="tableclass">
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>adress</th>
            <th>customername</th>
            <th>city</th>
            <th>number</th>
            <th>edit</th>
        </tr>
        </thead>
        <tbody>
    @foreach($user as $usr)

        <tr>
            <td>{{$usr->Customer_ID}}</td>
            <td>{{$usr->adress}}</td>
            <td>{{$usr->customer_name}}</td>
            <td>{{$usr->city}}</td>
            <td>{{$usr->phonenumber}}</td>
            <td><form action="/sales/{{$usr->Customer_ID}}">
                    <input type="submit" class="btn-primary" value="edit" />
                </form></td>
        </tr>



    @endforeach
    </tbody>
        </table>
</ul>
            </div>
            <div class="col-sm-6">
            <h2>results based on customer-ID</h2>

                <ul class="list-group" id="scrollablediv">
                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>adress</th>
                        <th>customername</th>
                        <th>city</th>
                        <th>number</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($id as $custid)
                        <tr>
                            <td>{{$custid->Customer_ID}}</td>
                            <td>{{$custid->adress}}</td>
                            <td>{{$custid->customer_name}}</td>
                            <td>{{$custid->city}}</td>
                            <td>{{$custid->phonenumber}}</td>
                            <td><form action="/sales/{{$custid->Customer_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </ul>
            </div>
            <div class="col-sm-6">
            <h2>results based on customer cities</h2>
            <ul class="list-group" id="scrollablediv">

     <table class="table table-bordered" id="tableclass">
     <thead>
     <tr>
         <th>Customer ID</th>
         <th>adress</th>
         <th>customername</th>
         <th>city</th>
         <th>number</th>
         <th>edit</th>
     </tr>
     </thead>
     <tbody>
     @foreach($city as $cty)

         <tr>
             <td>{{$cty->Customer_ID}}</td>
             <td>{{$cty->adress}}</td>
             <td>{{$cty->customer_name}}</td>
             <td>{{$cty->city}}</td>
             <td>{{$cty->phonenumber}}</td>
             <td><form action="/sales/{{$cty->Customer_ID}}">
                     <input type="submit" class="btn-primary" value="edit" />
                 </form></td>
         </tr>
     @endforeach
     </tbody>
     </table>
</ul>
            </div>
            <div class="col-sm-6">
            <h2>results based on customer emails</h2>
            <ul class="list-group" id="scrollablediv">

    <table class="table table-bordered" id="tableclass">
    <thead>
    <tr>
        <th>Customer ID</th>
        <th>adress</th>
        <th>customername</th>
        <th>city</th>
        <th>number</th>
        <th>edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($email as $ml)
        <tr>
            <td>{{$ml->Customer_ID}}</td>
            <td>{{$ml->adress}}</td>
            <td>{{$ml->customer_name}}</td>
            <td>{{$ml->city}}</td>
            <td>{{$ml->phonenumber}}</td>
            <td><form action="/sales/{{$ml->Customer_ID}}">
                    <input type="submit" class="btn-primary" value="edit" />
                </form></td>
        </tr>

    @endforeach
    </tbody>
        </table>
</ul>

            </div>
            <div class="col-sm-6">
                <h2>results based on banknumber</h2>
                <ul class="list-group" id="scrollablediv">
                    <table class="table table-bordered" id="tableclass">
                        <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>adress</th>
                            <th>customername</th>
                            <th>city</th>
                            <th>banknumber</th>
                            <th>edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banknm as $bank)

                            <tr>
                                <td>{{$bank->Customer_ID}}</td>
                                <td>{{$bank->adress}}</td>
                                <td>{{$bank->customer_name}}</td>
                                <td>{{$bank->city}}</td>
                                <td>{{$bank->bankaccountnumber}}</td>
                                <td><form action="/sales/{{$bank->Customer_ID}}">
                                        <input type="submit" class="btn-primary" value="edit" />
                                    </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </ul>
            </div>
    </div>









@endsection
@extends('layouts.layoutbasicbottom')
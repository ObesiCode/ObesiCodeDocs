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


    <div class="col-sm-12" id="dissapear">


        </div>

        <div class="col-sm-2" id="projectable">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>Projects</h3>


                    <div class="form-group">
                        <form action="/search/development" method="post">
                            {{csrf_field()}}
                            <input type="text" class="form-control" id="search" name="search" placeholder="search here...">
                            <input type="submit" class="btn btn-success" id="" placeholder="search">
                        </form>
                    </div>

                </div>
                <div class="panel-body">
            <div id="scrollablemediumdiv">
                
            <table class="table table-bordered" id="tableclass">
                <thead>
            <tr>
                <th id="tabletoptext">Projectname</th>
                <th id="tabletoptext">Project_ID</th>


                <th id="tabletoptext">active</th>
            </tr>
                </thead>
                <tbody>
                @foreach($development as $project )
                    <ul class="list-group">
                        <tr>
                        <td id="basicblack" class="list-group">
                            <li class="list-group-item">{{$project->projectname}}</li>
                            <li class="list-group-item"><b> customerID: {{$project->Customer_ID}}</b></li>

                        </td>

                        <td id="tableadmintext">{{$project->Project_ID}}</td>


                        @if($project->is_active == 1)
                            <td id="basicblack" class="alert-success">Active</td>
                            @else
                            <td id="basicblack" class="alert-danger">InActive</td>
                            @endif
                        <td id="basicblack">

                            <form action="\admin/pr/{{$project->Project_ID}}">
                                <input type="submit" class="btn-primary" value="edit" />
                            </form>
                        </td>

                        </tr>
                    </ul>


                    @endforeach

                </tbody>

            </table>

            </div>
            </div>



            </div>
        </div>

        <div class="col-sm-2" id="customertable">
            <div class="panel panel-default" >



                <div class="panel-heading">

                    @if($nega == 1)
                        <div class="form-group">
                            <form action="/admin" method="get">
                                <input type="submit" class="btn btn-primary" value="all  accounts">
                            </form>
                        </div>
                        @else


                        <div class="form-group">
                            <form action="/admin/negative" method="get">
                                <input type="submit" class="btn btn-primary" value="all negative balance  accounts">
                            </form>
                        </div>

                    @endif
                    <h3>Customer</h3>
                    <div class="form-group">
                    <form action="/search/admin/customer" method="get">
                        <input type="text" class="form-control" id="search" name="search" placeholder="search here...">
                        <input type="submit" class="btn btn-success" id="" placeholder="search">
                    </form>
                    </div>

                </div>

                <div class="panel-body">

                <div id="scrollablemediumdiv">
            <table class="table table-bordered" id="tableclass">
                <thead>
                <tr>
                    <th id="tabletoptext">CustomerName</th>
                    <th id="tabletoptext">CustomerID</th>
                    <th id="tabletoptext">balance</th>

                </tr>
                </thead>

                <tbody>

                    @foreach($customer as $user)
                        <tr>
                            <td id="basicblack">{{$user->customer_name}}</td>
                            <td id="tableadmintext">{{$user->Customer_ID}}</td>

                            @if($user->saldo <= 0)
                                <td id="basicblack" class="alert-danger">{{$user->saldo}}</td>
                            @else
                            <td id="basicblack" class="alert-success">{{$user->saldo}}</td>
                            @endif
                            <td id="basicblack">
                                <form action="\admin/cst/{{$user->Customer_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form>

                        </tr>
                        @endforeach




                </tbody>

            </table>
                </div>
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
                <p>Als een admin kan jij bij de verschillende afdelingen en alle data</p>
                <p>Als je de edit knop gebruikt kan je de data van die persoon aanpassen </p>
                <p>je kan ook alle customers die negatieve saldo hebben laten zien met de "all negative saldos" button</p>
                <p>Bovenaan de pagina zit een nagivatiebalk waarmee jij als admin naar alle andere afdelingen kan gaan </p>
                <p>Om uit te loggen klik je op het blauwe admin woord bovenaan de pagina en klik je daarna op logout</p>
            </div>
            <div class="modal-body">
                <p>As admin you can acces all data from all of the different company branches</p>
                <p>by using the edit button in the tables you can edit that specific persons data</p>
                <p>You can also see all customers that have a negative saldo by clicking the " all negative saldos " button</p>
                <p>At the top of the page is a navigation bar so you can visit all of the other department pages</p>
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

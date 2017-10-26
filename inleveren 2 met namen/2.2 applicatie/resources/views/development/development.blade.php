@extends('layouts.layoutbasictop')

@section('content')


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

        @if ($errors->any())
            <div class="col-sm-12">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{$error}}</li>

                    @endforeach
                </ul>
            </div>

        @endif


        <div class="col-sm-4" id="testing">
                <div class="panel panel-default" id="salespanel">
                    <div class="panel-heading">
                        <h1>Development</h1>
                    </div>
                    <div class="panel-body" id="">
                        <form action="/dev" method="post">

                            {{csrf_field()}}
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="projectname" id="labeltext">Project name</label>
                                    <input readonly type="text" class="projectname" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="projectid" id="labeltext">Project-ID</label>
                                    <input readonly type="text" class="projectid" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="customername" id="labeltext">Customer name</label>
                                    <input readonly type="text" class="customername" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="email" id="labeltext">Email</label>
                                    <input readonly type="email" class="email" id="salesinput">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="application" id="labeltext">Application</label>
                                    <input readonly type="text" class="application" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="hardware" id="labeltext">Hardware</label>
                                    <input readonly type="text" class="hardware" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="opsystem" id="labeltext">Operating system</label>
                                    <input readonly type="text" class="opsystem" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="contactperson" id="labeltext">Contact person</label>
                                    <input readonly type="text" class="contactperson" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="lastcontact" id="labeltext">Last contact</label>
                                    <input readonly type="text" class="lastcontact" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="nextcontact" id="labeltext">Next contact</label>
                                    <input readonly type="text" class="nextcontact" id="salesinput">
                                </div>
                                <!--
                                <div class="form-group">
                                <input type="submit" class="number" id="submitbuttonsales">
                                </div>
                                -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-sm-4">
            <div class="form-group">
                <form action="\log" method="post">
                    {{csrf_field()}}

                    <textarea rows="4" cols="50" class="log" id="log" name="log" >{{$log->log}}</textarea>
                    <input type="submit" class="btn-primary" id="button" value="Send">
                </form>
            </div>
        </div>
            <div class="col-sm-4" id="testing"></div>
        <div class="col-sm-4" id="testing" >
            <div class="tableview" id="scrollablediv">

                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr>
                        <form action="/search/development" method="post">
                            {{csrf_field()}}
                            <th id="customth"><label for="search" id="labeltext">Search</label>
                                <input type="text" id="basicblack" name="search" >
                                <input type="submit" id="submitbuttonsales" value="Send">
                        </form>
                        </th>

                    </tr>

                    <tr>
                        <th id="tabletoptext">Project-id</th>
                        <th id="tabletoptext">Status</th>
                        <th id="tabletoptext">Project name</th>
                        <th id="tabletoptext"><p>EDIT</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects->sortBy('status') as $project)

                        @if($project->is_active == 1)

                            @if($project->status == 0)
                                <tr class="alert-info">
                                    <td><p id="basicblack">{{$project->Project_ID}}</p></td>
                                    <td><p id="basicblack">Not Started</p></td>

                            @elseif($project->status == 1)
                                <tr class="alert-warning">
                                    <td><p id="basicblack">{{$project->Project_ID}}</p></td>
                                    <td><p id="basicblack">In development</p></td>


                            @elseif($project->status == 2)
                                <tr class="alert-success">
                                    <td><p id="basicblack">{{$project->Project_ID}}</p></td>
                                    <td><p id="basicblack">Finished</p></td>
                            @elseif($project->status == 3)
                                <tr class="alert-dismissible">
                                    <td><p id="basicblack">{{$project->Project_ID}}</p></td>
                                    <td><p id="basicblack">Paused</p></td>
                            @endif
                            <td><p id="basicblack">{{$project->projectname}}</p></td>
                            <td>
                                <form action="/development/{{$project->Project_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form>
                            </td>
                            </tr>
                        @else

                        @endif
                    @endforeach
                    </tbody>
                </table>

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

                    <p>Aan de rechterkant van het scherm is een tabel waarin alle projecten staan hun project-id , status en hun naam</p>
                    <p>U kunt naar de project gegevens gaan door op de "Edit" knop te drukken bij de specifieke naam </p>
                    <p>Boven de tabel is een search functie die je kan gebruiken om specifieke projecten te zoeken</p>
                    <p>Je kan het middelveld als uw algemene logboek gebruiken ( deze word gedeeld over alle afdelingen )</p>
                    <p>Updaten via de send knop </p>
                    <p>Om uit te loggen klik je op het blauwe {{Auth::user()->name}} woord bovenaan de pagina en klik je daarna op logout</p>
                </div>
                <div class="modal-body">

                    <p>On the right side of the screen is a table with all projects with their project-id,status and their projectname</p>
                    <p>U can go to a respective project by clicking it respective "Edit" button </p>
                    <p>Above the table is a search function you can use to search a specific project </p>
                    <p>You can use the middle area as a commen area for youre logg ( it will be used by all departments )</p>
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
@endsection
@extends('layouts.layoutbasicbottom')
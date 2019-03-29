<nav class="navbar-default navbar-static-side" role="navigation"  style="
position: fixed;
">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold"><h2>Rebanta</h2></strong>
                                {{-- <hr> --}}
                              
                                @if(isset(session('clientmaster')->id))
                                <strong class="font-bold"> -  {{ ucwords(session('clientmaster')->name) }}</strong>
                                @endif
                            </span> 
                            {{-- <span class="text-muted text-xs block">Setting &nbsp;&nbsp;<b class="caret"></b></span> --}}
                        </span>
                    </a>
                    {{-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{ url('logout') }}">Logout</a></li>
                    </ul> --}}
                </div>
                <div class="logo-element">
                    Re +
                </div>
            </li>
            <li class="{{ \App\Helpme::isActiveRoute('client_dashboard') }}">
                <a href="{{ url('client_dashboard') }}"><i class="glyphicon glyphicon-th-large"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="{{ \App\Helpme::isActiveRoute('create_branch') }}">
                <a href="{{ url('view_branch') }}"><i class="glyphicon glyphicon-object-align-bottom"></i> <span class="nav-label">Branch</span> </a>
            </li>
           
        </ul>

    </div>
</nav>


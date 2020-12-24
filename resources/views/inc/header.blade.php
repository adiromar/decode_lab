<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="{{ url('/admin') }}" class="navbar-brand">
                <small>
                    {{-- <i class="fa fa-leaf"></i> --}}
                <img src="{{ asset('pdf_assets/main_logo.png') }}" width="25    px" height="25px">
                    Decode Lab
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
            

                

                <li class="green dropdown-modal">
                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{csrf_field()}}
                            </form>

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                </li>

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="{{ asset('adm/assets/images/avatars/user.jpg') }}" alt="Jason's Photo" />
                        <span class="user-info">
                            <small>Welcome,</small>
                            {{ Auth::user()->name }}
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="ace-icon fa fa-cog"></i>
                                Homepage
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            {{-- <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a> --}}
                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{csrf_field()}}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
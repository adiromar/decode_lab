<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="active">
            <a href="{{ url('/admin') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

    

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> Patient's Information </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{  route('patient.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create New
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                <a href="{{ route('patient.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        View Record
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-envelope"></i>
                <span class="menu-text"> Report </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('show_report') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Update Sample Report
                        </a>
    
                        <b class="arrow"></b>
                    </li>

                <li class="">
                <a href="{{ route('report.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Print Report
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        @if(Auth::user()->roles()->first()->role == 'Admin')
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil"></i>
                <span class="menu-text"> Blog Management </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{  route('blog.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create Blog
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                <a href="{{ route('blog.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        View Blog
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-file"></i>
                <span class="menu-text"> Page Management </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{  route('page.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create Page
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                <a href="{{ route('page.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        View Page
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text"> User Management </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{  route('user.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create New
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                <a href="{{ route('user.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        View Record
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        @endif




    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
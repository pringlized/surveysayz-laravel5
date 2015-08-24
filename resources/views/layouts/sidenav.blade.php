<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="/img/profile_small.jpg" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    	<span class="clear"> 
                    		<span class="m-t-xs block"><strong class="font-bold">allkindsofissues</strong> <b class="caret"></b></span> 
                    	</span> 
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SS
                </div>
            </li>
            <li>
                <a href="{{ url('/') }}"><i class="fa fa-globe"></i> <span class="nav-label">Main Site</span> </a>
            </li>
            <li class="active">
                <a href="{{ url('/admin') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Issues</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/admin/issues') }}">Issue List</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/admin/users') }}">User List</a></li>
                </ul>
            </li>
            <!--
            <li>
                <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">System</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/not_found">404</a></li>
                    <li><a href="/server_erroe">500</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </li>
            -->
        </ul>

    </div>
</nav>
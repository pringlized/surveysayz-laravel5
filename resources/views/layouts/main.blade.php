<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SurveyzSayz</title>
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="/css/style1.css" rel="stylesheet">
    </head>

    <body>

        <div id="header-region">
	    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img alt="Brand" src="/img/surveysayz_logo.png" height="20" width="150">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::check())
                                <li><a href="{{ url('/logout') }}"><span class="fa fa-sign-out"></span> Logout</a></li>
                                @if (Auth::user()->role != 'user')
                                    <li><a href="{{ url('/admin') }}"><span class="fa fa-cog"></span> Admin</a></li>
                                @endif
                            @else
                                <li><a href="{{ url('/login') }}"><span class="fa fa-sign-in"></span> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>    </nav>
        </div>

<div class="app-container">
    @yield('content')
</div>

</body>

</html>
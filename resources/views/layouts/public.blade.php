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
            <div id="main-region" class="container"><div class="issue-list"><div class="issue-list-item" id="issue_2">
            <p class="issue-list-item-title"><a class="issue-list-item-title loggedin" href="#issue/2">Rendr: Seamless Backbone.js Web and Mobile Apps</a></p>
            <p class="issue-list-item-tagline">last response <time title="Wed Jun 17 15:57:06 2015 UTC" datetime="2015-06-17T15:57:06+00:00" class="live-timestamp">11 hours ago</time> by <a href="#" class="author">bgerber</a>
                to <a href="#" class="issue-list-item-category">games</a></p>
            <p class="issue-list-item-tagline">created by <a href="#" class="author">bgerber</a></p>
            <ul class="issue-list-item-flat">
                <li class="issue-list-item-flat-li"><a href="#">7 responses</a></li>
                <li class="issue-list-item-flat-li"><a href="#">share</a></li>
                <li class="issue-list-item-flat-li"><a href="#">mark favorite</a></li>
                <li class="issue-list-item-flat-li"><a href="#">do later</a></li>
            </ul>
        </div><div class="issue-list-item" id="issue_1">
            <p class="issue-list-item-title"><a class="issue-list-item-title loggedin" href="#issue/1">Researchers discover first sensor of Earth's magnetic field in an animal</a></p>
            <p class="issue-list-item-tagline">last response <time title="Wed Jun 17 15:57:06 2015 UTC" datetime="2015-06-17T15:57:06+00:00" class="live-timestamp">14 hours ago</time> by <a href="#" class="author">jpringle</a>
                to <a href="#" class="issue-list-item-category">politics</a></p>
            <p class="issue-list-item-tagline">created by <a href="#" class="author">jpringle</a></p>
            <ul class="issue-list-item-flat">
                <li class="issue-list-item-flat-li"><a href="#">153 responses</a></li>
                <li class="issue-list-item-flat-li"><a href="#">share</a></li>
                <li class="issue-list-item-flat-li"><a href="#">mark favorite</a></li>
                <li class="issue-list-item-flat-li"><a href="#">do later</a></li>
            </ul>
        </div><div class="issue-list-item" id="issue_3">
            <p class="issue-list-item-title"><a class="issue-list-item-title loggedin" href="#issue/3">Donald Trump appears to like Vladimir Putin more than he liked Obama</a></p>
            <p class="issue-list-item-tagline">last response <time title="Wed Jun 17 15:57:06 2015 UTC" datetime="2015-06-17T15:57:06+00:00" class="live-timestamp">16 hours ago</time> by <a href="#" class="author">fwinnable</a>
                to <a href="#" class="issue-list-item-category">civics</a></p>
            <p class="issue-list-item-tagline">created by <a href="#" class="author">fwinnable</a></p>
            <ul class="issue-list-item-flat">
                <li class="issue-list-item-flat-li"><a href="#">29 responses</a></li>
                <li class="issue-list-item-flat-li"><a href="#">share</a></li>
                <li class="issue-list-item-flat-li"><a href="#">mark favorite</a></li>
                <li class="issue-list-item-flat-li"><a href="#">do later</a></li>
            </ul>
        </div></div></div>
        </div>

        <div class="container" style="margin-top: 20px">
            NOTES: Events are wired to title & category
        </div>
    </body>

</html>
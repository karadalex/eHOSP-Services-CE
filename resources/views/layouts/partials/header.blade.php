<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('/img/LOGO_big.png')}}" alt="ehosp logo" />
            </a>

            <img class="navbar-menu" src="{{ asset('/img/menu.png') }}" alt="menu" />
            <div class="shadow"></div>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}"> @lang('nav.Home') </a></li>
                <li><a href="{{ url('/about') }}"> @lang('nav.About') </a></li>
                <li><a href="{{ url('/contact') }}"> @lang('nav.Contact') </a></li>
                <li><a href="{{ url('/doc') }}"> @lang('nav.Doc') </a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"> @lang('nav.Login') </a></li>
                    <li><a href="{{ url('/register') }}"> @lang('nav.Register') </a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/profile') }}"> @lang('nav.My Profile') </a></li>
                            <li><a href="{{ url('/settings') }}"> @lang('nav.Settings') </a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> @lang('nav.Logout') </a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>


    <div id="navbar-mobile-only">
        <img src="{{ asset('/img/back.png') }}" alt="hide side navbar" />
        <ul>
            <li><a href="{{ url('/home') }}"><i class="fa fa-home" aria-hidden="true"></i>
&nbsp; @lang('nav.Home') </a></li>
            <li><a href="{{ url('/about') }}"><i class="fa fa-info-circle" aria-hidden="true"></i>
&nbsp; @lang('nav.About') </a></li>
            <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope" aria-hidden="true"></i>
&nbsp; @lang('nav.Contact') </a></li>
            <li><a href="{{ url('/doc') }}"><i class="fa fa-book" aria-hidden="true"></i>
&nbsp;  @lang('nav.Documentation') </a></li>
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}"> @lang('nav.Login') </a></li>
                <li><a href="{{ url('/register') }}"> @lang('nav.Register') </a></li>
            @else
                <li><a href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i>
&nbsp; @lang('nav.My Profile') </a></li>
                <li><a href="{{ url('/settings') }}"><i class="fa fa-cogs" aria-hidden="true"></i>
&nbsp; @lang('nav.Settings') </a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>&nbsp; @lang('nav.Logout') </a></li>
            @endif
        </ul>
    </div>
</nav>

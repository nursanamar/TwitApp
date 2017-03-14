<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Twitter aplication</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/master.css">
    @yield('js')
  </head>
  <body>
    <nav class='navbar navbar-fixed-top'>
        <div class='container'>
          <div class="navbar-header navHeader">
            <div class='navbar-brand brand'>
              Twitter Aplication
            </div>
            <button type="button" style="text-align:center" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="navbar" class="nav navbar-nav navbar-right">
                @if (Auth::guest())

                @else
                  <li><a href="/beranda">Beranda</a></li>
                  <li><a href="/profil">Profil</a></li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                @endif
            </ul>
          </div>

        </div>

      </nav>
        @yield('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
       <script src="js/bootstrap.min.js"></script>
  </body>
</html>

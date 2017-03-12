<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twitter aplication</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/master.css">
    @yield('js')
  </head>
  <body>
    <nav class='navbar navbar-fixed-top'>
        <div class='container'>
          <div class="col-sm-12 col-md-12">
            <div class="navbar-header col-sm-4 col-sm-offset-4">
              <div class='navbar-brand center'>
                Twitter Aplication
              </div>
            </div>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
              <span class='sr-only'>Toggle navigation</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
              <ul id="navbar" class="nav navbar-nav navbar-right col-sm-4 col-md-4">
                  @if (Auth::guest())

                  @else
                    <li><a href="/beranda">Beranda</a></li>
                    <li><a href="/Profil">Profil</a></li>
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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="{{asset('css/app.css')}}" rel=stylesheet type="text/css">
    <link href="{{asset('css/main.css')}}" rel=stylesheet type="text/css">
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>

    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <a class="navbar-brand"><h2>Pink Web Shop</h2></a>
          @if(Auth::check())
            <span>{{Auth::user()->name}}</span>

          @endif
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/">Home</a></li>
              <li><a href="contact">Contact</a></li>
              <li><a href="magasin">Magasin</a></li>
              {{-- --}}
              @if(Auth::check())
              <li><a href="logout">Logout</a></li>
                <li><a href="panier">Panier</a></li>
              @else
              <li><a href="login">Login</a></li>
              <li><a href="register">Register</a></li>
              @endif
            </ul>
      </div>
    </div>
  </nav>
  </header>
          <div class="container">@yield('content')</div>

        <footer class="text-center">
          <p>Copyright : ITAkademy 2017</p>
          <a href="/contact">contact us</a>
        </footer>

  </body>
</html>

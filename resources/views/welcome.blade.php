<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
  <title>Homepage</title>
</head>



<body>
  <div class="bg-main">
    <nav class="navbar fixed-top navbar-custom navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand logo" href="/"><img src="/Images/logo.svg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="ourPhotographers">Find a Photographer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ Route('viewTour') }}">Tour List</a>
            </li>
            {{-- @if() --}}
            @guest                    
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
            @endguest
            @auth
                    <li class="nav-item">
                      <a class="nav-link"href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                    </li>
            @endauth

          </ul>
        </div>
      </div>
    </nav>


    <div class="row align-items-center h-100">
      <div class="container">
        <div class="col mt-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ session('success') }}</strong>
            </div>
        @endif
          <p class="maintext text-center" style="font-size: 70pt;">Graphy House</p>
          <p class="maintext text-center" style="font-size: 30pt;">フォトグラフィー</p>
          <div class="text-center mt-5">
            <a href="ourTours"><button type="button" class="btn btn-secondary">Plan a Tour!</button></a>
            <a href="ourPhotographers"> <button type="button" class="btn btn-outline-secondary">Book a Photographer</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </div>
</body>

</html>
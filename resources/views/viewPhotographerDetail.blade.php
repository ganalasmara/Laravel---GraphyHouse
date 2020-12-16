<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">

    <title>Document</title>
</head>
<body>
    <div class="bg-photo">
    <nav class="navbar fixed-top navbar-custom navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand logo" href="/"><img src="/Images/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{url('/ourPhotographers')}}">Find a Photographer</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ Route('viewTour') }}">Tour List</a>
                </li>
                <li class="n  av-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>

            </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container " style="padding-top: 100px">
        <div class="row">
            
            <div class="col-md-3 ml-5">
                <img class="img-thumbnail" src="{{$data->photographer_image}}" style="width:200px; height:300px;">
                
            </div>

            <div class="col-md-6">
                <p class="mt-3">{{$data->name}}</p>
                <p>{{$data->description}}</p>
                <a href="{{ url($data->portofolio_link)}}"><img src="../Images/ig.svg" style="width:20px; height:20px;"></a>
            </div>

            <div class="col-md-2">
                <p class="mt-3">Starts from</p>
                <p>Rp. {{$data->book_price}}</p>
                @if (Auth::check())
                    <a href="{{ route('checkout',$data->photographer_id) }}">Book a Date</a>
                    <br>
                @endif
            </div>

            </div>
            <div class="row" style="padding-top: 50px">
                <div class="col">
                <h1 class="text-center">Portfolio</h1>
                </div>
            </div>
            <div class="row" >
            @foreach($imgList as $img)
                <div class="col-md-4 mt-2 d-flex justify-content-center">
                <img class="img-thumbnail"src="{{$img->photo}}" alt="" style="width:300px; height:250px;">
                <br>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</body>
</html>

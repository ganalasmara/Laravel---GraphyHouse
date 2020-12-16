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
    <title>Our Tours</title>
</head>
<body>
<div class="bg-tour">
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

    
        <div class="container" style="padding-top: 150px">
            <div class="row">
                <div class="col-md-12">
                    <p class="maintext-photo">Tour Package</p>
                </div>
                @foreach($tours  as $tour)
                <div class="col-4">
                    <div class="card mb-3" >
                        <img class="card-img-top-tour" src="{{$tour->tour_image}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$tour->name}}</h5>
                                <p class="card-text">{{$tour->description}}</p>
                                <a href="{{ Route('viewTourDetail', $tour->tour_id) }}" class="btn btn-primary">View Me</a>
                            </div>
                    </div>
                </div>
                @endforeach
                {{ $tours->links() }}
                
            </div>
        </div>
</div>
</body>
</html>
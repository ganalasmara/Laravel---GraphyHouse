<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title>Checkout</title>
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
                    <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                    </li>

                </ul>
                </div>
            </div>
        </nav>

    
        <div class="container" style="padding-top: 150px">
            <div class="row">
                
                <div class="col-md-12">
                    <h1 class="tour-detail-title"><b>{{ $tour->name }}</b></h1>
                    <div>
                        <img src="{{$tour->tour_image}}" class="img-tour-detail" >
                    </div>
                    <div class="tour-detail-sec1">
                        <div class="tour-detail-desc">
                            {{$tour->description}} <br>
                            <b>
                                Lama tour:{{$tour->days}} hari
                            </b>
                        </div>
                        <div>
                            <p class="tour-detail-price">
                                <b>Starts from Rp.{{ $tour->price }}/pax</b><br><br>
                            </p>
                        </div>
                    </div>
                    <div class="tour-detail-date">
                        <form method="POST" action="">
                        @csrf
                            <span>Start Date: </span>
                            <input type="date" id="startdate" name="startdate" class="@error('startdate') is-invalid @enderror" required value="{{old('startdate')}}">
                            @error('startdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <br>
                            <button class="btn btn-info" type="submit">Check out</button>
                        </form>
                    </div>
                    
                    <br>
                    
                </div>
                </div>
            </div>
        </div>
</body>
</html>

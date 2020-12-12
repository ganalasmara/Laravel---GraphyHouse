<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
</head>
<body>
    <a href="{{url('/ourPhotographers')}}">Find a Photographer</a>
    <a href="{{ Route('viewTour') }}">Tour list</a>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
    <br>
    <br>
    <h1><b>{{ $tour->name }}</b></h1>
    <img src="{{$tour->tour_image}}">
    <h4>{{$tour->description}}</h4>
    <h4>Starts from Rp.{{ $tour->price }}/pax <b></b><h4>
     <br>
    <form method="POST" action="">
    @csrf
        <span>Start Date: </span>
        <input type="date" id="startdate" name="startdate" class="@error('startdate') is-invalid @enderror" value="{{old('startdate')}}">
        @error('startdate')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <span>End Date: </span>
        <input type="date" id="enddate" name="enddate" class="@error('enddate') is-invalid @enderror" value="{{old('enddate')}}">
        @error('enddate')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <button class="bg-dark text-white" type="submit">Check out</button>
    </form>
</body>
</html>

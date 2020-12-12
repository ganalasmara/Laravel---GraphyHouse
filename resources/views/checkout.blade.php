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
    <img src="{{$photographer->photographer_image}}">
    <p>{{$photographer->name}}</p>
    <p>{{$photographer->description}}</p>
    <p>Starts from</p>
    <p>{{$photographer->book_price}}</p>
    <form method="POST" action="">
    @csrf
        <span>Work Date: </span>
        <input type="date" id="workdate" name="workdate" class="@error('workdate') is-invalid @enderror" value="{{old('workdate')}}">
        @error('workdate')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <button class="bg-dark text-white" type="submit">Check out</button>
    </form>
</body>
</html>

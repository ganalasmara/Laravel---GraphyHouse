<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url('/ourPhotographers')}}">Find a Photographer</a>
    <a href="{{ Route('viewTour') }}">Tour list</a>
    <a href="">Login</a>
    <a href="">Register</a>
    <br>
    <img src="{{$data->photographer_image}}" style="width:300px; height:250px;">
    <p>{{$data->name}}</p>
    <p>{{$data->description}}</p>
    <p>Starts from</p>
    <p>{{$data->book_price}}</p>
    @if (Auth::check())
        <a href="{{ route('checkout',$data->photographer_id) }}">Book a Date</a>
        <br>
    @endif
    @foreach($imgList as $img)
        <img src="{{$img->photo}}" alt="" style="width:300px; height:250px;">
        <br>
    @endforeach
</body>
</html>

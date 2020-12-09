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
    <a href="">Tour list</a>
    <a href="">Login</a>
    <a href="">Register</a>
    <img src="{{$data->photographer_image}}">
    <p>{{$data->name}}</p>
    <p>{{$data->description}}</p>
    <p>Starts from</p>
    <p>{{$data->book_price}}</p>
    <a href="#">Book a Date</a>
    @foreach($imgList as $img)
        <img src="{{$img->photo}}" alt="">
    @endforeach
</body>
</html>

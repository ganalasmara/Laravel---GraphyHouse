<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Tours</title>
</head>
<body>
    <a href="{{url('/ourPhotographers')}}">Find a Photographer</a>
    <a href="{{ Route('viewTour') }}">Tour List</a>
    <a href="">Login</a>
    <a href="">Register</a>
    <br>
    <br>
    @foreach($details as $detail)
        <h1><b>{{ $detail->name }}</b></h1>
        <img src="{{$detail->tour_image}}" style="height:400px; width:600px;">
        <h4>{{$detail->description}}</h4>
        <h4>Starts from Rp.{{ $detail->price }}/pax <b></b><h4>
        <a href="#">Book a Date!</a>
        <br>
    @endforeach
</body>
</html>
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
    @foreach($tours as $tour)
        <img src="{{$tour->tour_image}}" style="height:180px; width:286px;">
        <p>{{$tour->name}}</p>
        <p>{{$tour->description}}</p>
        <a href="{{ Route('viewTourDetail', $tour->tour_id) }}">View Tour Details</a>
        <br>
        <br>
    @endforeach
    {{ $tours->links() }}
</body>
</html>
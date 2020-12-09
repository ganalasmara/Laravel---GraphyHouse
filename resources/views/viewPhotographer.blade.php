<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Photographers</title>
</head>
<body>
    <a href="{{url('/ourPhotographers')}}">Find a Photographer</a>
    <a href="">Tour list</a>
    <a href="">Login</a>
    <a href="">Register</a>
    @foreach($photographerList as $list)
        <img src="{{$list->photographer_image}}">
        <p>{{$list->name}}</p>
        <p>{{$list->description}}</p>
        <a href="{{url('/detailPhotographer/' . $list->photographer_id)}}">View Me</a>
    @endforeach
</body>
</html>

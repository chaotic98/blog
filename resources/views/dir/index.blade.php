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
@foreach($x as $i)
    <h1>{{$i->id}}</h1>
    <h1>{{$i->title}}</h1>
    <h1>{{$i->image}}</h1>
    <h1>{{$i->description}}</h1>
    @foreach($i->comments as $y)
        <h3 style="background-color: darkgreen">{{$y->name}}</h3>
        <h3 style="background-color: darkgreen">{{$y->mail}}</h3>
        <h3 style="background-color: darkgreen">{{$y->dir_id}}</h3>
        <hr "height=50px">
        @endforeach
    <hr color="red">
    @endforeach
</html>

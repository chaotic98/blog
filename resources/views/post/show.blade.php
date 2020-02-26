@extends('layouts.Master')
@section('content')
    @foreach($query as $i)
        <h1>{{$i->id}}</h1>
        <h1>{{$i->title}}</h1>
        <h1>{{$i->image}}</h1>
        <h1>{{$i->description}}</h1>
    @endforeach
    @endsection

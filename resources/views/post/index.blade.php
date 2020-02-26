@extends('layouts.Master')
@section('content')
    <style>
        .maintbl{
            width:800px;
            margin: 0 auto;
            border:solid 1px #84cc6d;
            border-radius: 5px;
        }
        .maintbl td{
            background-color: #ffffff;
            padding: 4px;
            height: 30px;
            line-height:30px;
            font-family: verdana;
            font-size: 12px;
            color: #333;
            text-align: center;
            border-radius: 5px;
        }
        .maintbl th{
            padding: 5px;
            background-color: #005bcc;
            height: 50px;
            line-height:50px;
            text-align: center;
            border-radius: 5px;
        }
        .alert{
            width: 40%;
            height: 30px;
            background-color: coral;
            color: #f00;
            font-family: verdana;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            line-height: 30px;
            margin: 30px auto;
            opacity: 0.7;
        }
        .a{

            border-radius: 5px;
            text-decoration: none;
            padding: 5px;
            color: #cccccc;
            background-color: #ff2a27;
            width: 100%;
            height: 50px;
            text-align: center;
            margin: 0 auto;
        }
        .edit{
            border-radius: 5px;
            text-decoration: none;
            padding: 5px;
            color: #000000;
            background-color: #36ff39;
            width: 40px;
            height: 50px;
            text-align: center;
            margin: 0 auto;
        }
        button {
            border-radius: 20px;
            border: 1px solid #cc2138;
            background-color: #ff2a27;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            box-sizing: border-box;
            cursor: pointer;
        }
    </style>
    <table class="maintbl">
        <tr>
            <th>id</th>
            <th>FullName</th>
            <th>image</th>
            <th>description</th>
            <th>active</th>
            <th>created_at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    @foreach ($x as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->FullName}}</td>
                <td><img src="{{asset('images/post'.$i->image)}}" width="50px" height="50px"></td>
                <td>{{$i->description}}</td>
                <td>{{$i->active}}</td>
                <td>{{$i->created_at}}</td>
                <td><a href="{{route('post.edit',$i->id)}}" class="edit">Edit</a></td>
                ‌<td>
                    <form action="{{route('post.destroy',$i->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="" value="Delete">Delete</button>
                    </form></td>

            </tr>

    @endforeach

        </table>

    <br>
  <a href="{{route('post.create')}}" class="a">بازگشت به ثبت نام</a>
@endsection

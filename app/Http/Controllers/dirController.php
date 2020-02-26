<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Dir;
use App\Post;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dirController extends Controller
{
    public function index()
    {
        $z=Role::findorfail(1)->Users;
        return $z;
      // $x=Dir::with('comments')->get();
      // return view('dir.index',compact('x'));


       //$y=Comment::find(1)->Dir;
       //return $y;

    }

    public function create()
    {
        $dir=new Dir();
        $dir->title='title1';
        $dir->image='dir.png';
        $dir->description='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis ';
        $dir->save();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $i=DB::select('select * from dirs');
        dd($i);

    }


    public function edit($id)
    {
        DB::update("update dirs set  image='edit.png' where id=1");
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

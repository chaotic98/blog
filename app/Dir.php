<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Dir extends Model
{
    use softDeletes;
    protected $dates=['deleted_at'];
    //protected $table='dirs';
    protected  $guarded=['id'];
    public function  comments(){
        return $this->hasMany(Comment::class);
    }
}

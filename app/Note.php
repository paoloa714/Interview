<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title' , 'note' , 'create_time' , 'update_time'];

}

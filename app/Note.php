<?php
/**
 * Created by PhpStorm.
 * User: paoloaquino
 * Date: 6/1/18
 * Time: 1:50 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $fillable = ['title' , 'note' , 'create_time' , 'update_time'];

}

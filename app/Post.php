<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table = 'user_request';
    // P Key
    public $PKey = 'id';
    //timestamps
    public $timestamps = false;
}

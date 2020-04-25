<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'tblusers';
    protected $primaryKey = 'User_ID';
    public $timestamps = false;
}

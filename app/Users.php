<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'User_ID';
    protected $table = 'tblusers';
    
    public $timestamps = false;
}

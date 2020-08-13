<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $table = 'tbl_likes';
    protected $primaryKey = 'Like_ID';
    public $timestamps = false;
}

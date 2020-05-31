<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'tbl_news';
    protected $primaryKey = 'News_ID';
    public $timestamps = false;
}

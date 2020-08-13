<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'tbl_images';
    protected $primaryKey = 'Image_ID';
    public $timestamps = false;
}

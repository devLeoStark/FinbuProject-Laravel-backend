<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_Accounts extends Model
{
    protected $table = 'tbl_administrator_accounts';
    protected $primarykey = 'Admin_ID';
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = [
    	'user_id','parent_id','name','sh_name',
    	'used_storge','added_star','lock','hide',
    	'permission','path','download',
    ];

    //protected $hidden=[];
}


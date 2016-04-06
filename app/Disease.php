<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $table = 'diseases';

    protected $fillable = [
    	'id',
    	'name',
    	'desc',
    	'affected_by'
    ];
}

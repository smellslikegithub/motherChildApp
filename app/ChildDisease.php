<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildDisease extends Model
{
    protected $table = 'child_disease';

	protected $fillable = [
		'child_id',
		'disease_id',
		'situation',
		'date_diagnosed'
	];
}

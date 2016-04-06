<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotherDisease extends Model
{
    protected $table = 'mother_disease';

	protected $fillable = [
		'mother_id',
		'disease_id',
		'situation',
		'date_diagnosed'
	];	
}

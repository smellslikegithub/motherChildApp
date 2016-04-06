<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
	protected $table = 'mothers';

	protected $fillable = [
		'id',
		'address',
		'latitude',
		'longitude',
		'nIdNumber',
		'alt_nc_id',
		'nc_holders_name',
		'nc_holders_phone',
		'no_of_children',
		'days_pregnant',
		'blood_group',
		'weight',
		'picture'
	];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
	protected $table = 'children';

	protected $fillable = [
	'id',
	'mothers_id',
	'name',
	'dob',
	'weight',
	'birthCertNo',
	'blood_group'
	];
}
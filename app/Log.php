<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'mothers';

	protected $fillable = [
		'mother_id',
		'child_id',
		'notif_id',
		'notif_msg',
		'notif_category',
		'notif_priority',
		'send_date',
		'institute_id',
		'institute_conf',
		'mother_conf',
	];
}

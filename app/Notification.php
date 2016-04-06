<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //

	protected $table = 'notifications';

	protected $fillable = [
	'category',
	'priority',
	'notif_msg',
	'notif_day'
	];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
	use SoftDeletes;
    protected $fillable = [
        'date', 'status',
    ];

	protected $dates = ['deleted_at'];
}

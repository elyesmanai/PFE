<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	protected $table = 'appointments';

    public $primaryKey = 'apointment_id';
    protected $fillable = ['date','object','message','comment','status','sender','receiver'];
}
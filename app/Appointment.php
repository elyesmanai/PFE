<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	protected $table = 'appointments';

    public $primaryKey = 'id_appointment';
    protected $fillable = ['date','object','message','comment','status','sender_id','receiver_id'];
}
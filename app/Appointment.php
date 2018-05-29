<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	protected $table = 'appointments';

    public $primaryKey = 'apointment_id';
    protected $fillable = ['date','objet','message','commentaire','etat','de','a'];

}

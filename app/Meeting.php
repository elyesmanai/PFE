<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
   protected $table = 'meetings';

    public $primaryKey = 'id_meeting';
    protected $fillable = ['name','date'];
}

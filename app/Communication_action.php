<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communication_action extends Model
{
    protected $table = 'communication_actions';

    public $primaryKey = 'id_action';
    protected $fillable = ["year","object","target","validated","deadline"];
}

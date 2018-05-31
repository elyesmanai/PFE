<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comaction extends Model
{
    protected $table = 'communication_actions';

    public $primaryKey = 'id_action';
    protected $fillable = ["year","object","target_id","validated","deadline","zone"];
}

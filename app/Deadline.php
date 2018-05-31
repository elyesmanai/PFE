<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    protected $table = 'deadlines';

    public $primaryKey = 'id_deadline';
    protected $fillable = ['name','date'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    public $primaryKey = 'id_project';
    protected $fillable = ['name','zone','group','step','completion','year'];
}

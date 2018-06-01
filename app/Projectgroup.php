<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projectgroup extends Model
{
    protected $table = 'projectgroups';

    public $primaryKey = 'id_type';
    protected $fillable = ['type','total_amount','self_monetization','loan','assistance','year'];
}

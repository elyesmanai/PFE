<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';

    public $primaryKey = 'id_media';
    protected $fillable = ['path','author_id','feedback_id','type'];
}

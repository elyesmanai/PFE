<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    public $primaryKey = 'id_feedback';
    protected $fillable = ['sender_id','receiver_id','object','type',"meeting"];
}

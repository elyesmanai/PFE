<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaltable extends Model
{
    protected $table = 'evaluation_tables';

    public $primaryKey = 'id_table';
    protected $fillable = [
    	"year",
    	"code11_11","code11_21","code11_22","code11_23","code11_24",
    	"code12_11","code12_21","code12_22","code12_23","code12_24",
    	"code13_11","code13_21","code13_22","code13_23","code13_24",
    	"code21_11","code21_21","code21_31","code21_32","code21_33","code21_34","code21_35","code21_36","code21_37","code21_38",
    	"code21_39","code21_40","code21_41","code21_42","code21_43",
		"code22_11","code22_21","code22_22","code22_23","code22_24"
    ];
}

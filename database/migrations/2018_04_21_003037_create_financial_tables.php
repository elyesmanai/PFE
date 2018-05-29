<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('financial_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prog_type');
            $table->string('proj_type');
            $table->integer('amount');
            $table->integer('total_amount');
            $table->integer('loan');
            $table->integer('assistance');
            $table->integer('self-monetization');
            $table->integer('year');
            $table->string('validates');
            $table->rememberToken();
            $table->timestamps();
        });
       
        //year
        //completed
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_tables');
    }
}

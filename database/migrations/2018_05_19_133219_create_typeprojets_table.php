<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeprojetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeprojets', function (Blueprint $table) {
            $table->increments('id_type');
            $table->string('type');
            $table->integer('total_amount');
            $table->integer('self_monetization');
            $table->integer('loan');
            $table->integer('assistance');
            $table->integer('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typeprojets');
    }
}

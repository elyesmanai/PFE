<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('zone');
            $table->year('year');
            $table->integer('budget');
            $table->string('place');
            $table->string("step");
            $table->integer("completion");
            $table->string('validated');
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
        Schema::dropIfExists('technical_tables');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Medicoscitas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('Medicos_id')->unsigned();
            $table->bigInteger('Citas_id')->unsigned();
            $table->timestamps();
            $table->foreign('Medicos_id')->references('id')->on('Medicos')->onDelete("cascade");
            $table->foreign('Citas_id')->references('id')->on('Citas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

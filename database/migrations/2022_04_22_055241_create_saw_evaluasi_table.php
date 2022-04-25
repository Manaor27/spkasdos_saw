<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSawEvaluasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saw_evaluasi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_alternatif');
            $table->unsignedBigInteger('id_kriteria');
            $table->string('value');
            $table->foreign('id_kriteria')->references('id')->on('saw_kriteria')->onDelete('CASCADE');
            $table->foreign('id_alternatif')->references('id')->on('saw_alternatif')->onDelete('CASCADE');
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
        Schema::dropIfExists('saw_evaluasi');
    }
}

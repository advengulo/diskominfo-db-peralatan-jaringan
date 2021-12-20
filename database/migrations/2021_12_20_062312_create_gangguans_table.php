<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGangguansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangguans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peralatan')->unsigned();
            $table->string('ciri_ciri_gangguan');
            $table->string('dampak_gangguan');
            $table->date('tanggal_pengajuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gangguans');
    }
}

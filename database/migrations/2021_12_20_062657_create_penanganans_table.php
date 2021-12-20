<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenanganansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penanganans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_gangguan')->unsigned();
            $table->datetime('waktu_penanganan');
            $table->string('nama');
            $table->text('tindakan');
            $table->string('hasil');
            $table->string('rekomendasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penanganans');
    }
}

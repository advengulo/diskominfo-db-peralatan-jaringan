<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoAlatTambahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_alat_tambahans', function (Blueprint $table) {
            $table->id();
            $table->string('port')->nullable();
            $table->string('ip')->nullable();
            $table->string('frekuensi')->nullable();
            $table->string('lebar_frekuensi')->nullable();
            $table->string('nama_wifi')->nullable();
            $table->string('ram')->nullable();
            $table->string('storage')->nullable();
            $table->string('prosesor')->nullable();
            $table->text('desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_alat_tambahans');
    }
}

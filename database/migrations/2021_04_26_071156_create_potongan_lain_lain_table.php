<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotonganLainLainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potongan_lain_lain', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomor_induk', 10);
            $table->string('bulan', 50);
            $table->string('tahun', 50);
            $table->float('jumlah');
            $table->string('keterangan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potongan_lain_lain');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryKenaikanGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_kenaikan_gaji', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomor_induk', 10);
            $table->string('bulan', 50);
            $table->string('tahun', 50);
            $table->float('gaji_pokok_lama');
            $table->float('persentase_kenaikan');
            $table->float('gaji_pokok_baru');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_kenaikan_gaji');
    }
}

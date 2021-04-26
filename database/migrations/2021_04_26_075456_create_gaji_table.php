<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomor_induk', 10);
            $table->string('bulan', 50);
            $table->string('tahun', 50);
            $table->float('gaji_pokok');
            $table->float('tunjangan_jabatan');
            $table->float('tunjangan_keluarga');
            $table->float('uang_makan');
            $table->float('uang_lembur');
            $table->float('persen_pot_pph');
            $table->float('ptkp');
            $table->float('persen_pot_jamsostek');
            $table->float('pot_lain_lain');
            $table->string('nama_jabatan', 100);
            $table->string('nama_cabang', 100);
            $table->string('nama_departemen', 100);
            $table->string('nama_bank', 100);
            $table->string('nomor_rekening', 100);
            $table->string('rekening_atas_nama', 100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaji');
    }
}

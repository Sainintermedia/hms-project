<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomor_induk',10,);
            $table->string('nik',30,);
            $table->string('nama', 50);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 20);
            $table->string('agama', 20 );
            $table->string('status_pernikahan',20);
            $table->string('jumlah_anak');
            $table->string('alamat', 200);
            $table->string('nomor_telepon', 50);
            $table->string('pendidikan_terakhir', 50);
            $table->string('kode_jabatan', 10);
            $table->string('kode_cabang', 10);
            $table->string('kode_departemen', 10);
            $table->float('gaji_pokok');
            $table->date('tanggal_diangkat');
            $table->date('tanggal_keluar');
            $table->string('nama_bank', 50);
            $table->string('nomor_rekening', 25);
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
        Schema::dropIfExists('karyawan');
    }
}

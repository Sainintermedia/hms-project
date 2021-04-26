<?php

use Illuminate\Support\Facades\DB;

function convertdate()
{
        date_default_timezone_set('Asia/Jakarta');
        $date = date('dmy');
        return $date;
}
function autonumber($table,$primary,$prefix)
{
        $q=DB::table($table)->select(DB::raw('MAX(RIGHT('.$primary.',5)) as kd_max' ));
        $prx=$prefix;
        if($q->count()>0)
        {
            foreach($q->get() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = $prx.sprintf("%05s", $tmp);
            }
        }
        else
        {
            $kd = $prx."00001";
        }

        return $kd;
}

function autonumber_date($table,$primary,$prefix,$whereMonth,$whereYear)
{
        $q=DB::table($table)->select(DB::raw('MAX(RIGHT('.$primary.',5)) as kd_max'))
               ->whereYear($whereYear, '=', date('Y'))
               ->whereMonth($whereMonth, '=', date('m'));
        $prx=$prefix.convertdate();
        if($q->count()>0)
        {
            foreach($q->get() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = $prx.sprintf("%05s", $tmp);
            }
        }
        else
        {
            $kd = $prx."00001";
        }

        return $kd;
}

function bulan($tgl, $tampil_hari=true) {

    $nama_hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");

    $nama_bulan = array(1=>"Januari","Februari","Maret","April","Mei",

    "Juni","Juli","Agustus","September","Oktober","November","Desember");

    $bulan = $nama_bulan[(int)substr($tgl,5,2)];
    $text = "";	if($tampil_hari){

    $urutan_hari = date('w', mktime(0,0,0, substr($tgl,5,2),

     ));

    $text;}

    $text .=$bulan ;	return $text;
}


function tahun($tgl, $tampil_hari=true) {

    $nama_hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");

    $nama_bulan = array(1=>"Januari","Februari","Maret","April","Mei",

    "Juni","Juli","Agustus","September","Oktober","November","Desember");

    $tahun = substr($tgl,0,4);

    $bulan = $nama_bulan[(int)substr($tgl,5,2)];

    $tanggal = substr($tgl,8,2);

    $text = "";	if($tampil_hari){

    $urutan_hari = date('w', mktime(0,0,0, substr($tgl,5,2),

    $tanggal, $tahun));

    $hari = $nama_hari[$urutan_hari];

    $text;	}

    $text .=$tahun;	return $text;
}

@extends('layouts.master')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 class="text-primary">
                                        {{ $karyawan->nama }}  
                                    </h5>
                                    <h6>
                                        Nomor Rgistrasi : {{ $karyawan->nomor_induk}}
                                    </h6>
                                    <p class="proile-rating">NIK : <span>{{ $karyawan->nik}}</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Detil Karyawan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Selanjutnya</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-button-action">
                        <a href="/karyawanedit/{{$karyawan->id}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                            <i class="fa fa-edit"></i>
                        </a>
                    </div>
                    <div class="form-button-action">
                        <a href="/karyawanhapus/{{$karyawan->id}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-lg" data-original-title="Remove">
                            <i class="fa fa-times" ></i>
                        </a>
                    </div>
                </div>
            
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tempat Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->tempat_lahir}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->tanggal_lahir}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->jenis_kelamin}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Agama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->agama}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Status Pernikahan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->status_pernikahan}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jumlah Anak</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->jumlah_anak}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->alamat}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nomor Telepon</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->nomor_telepon}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pendidikan Terakhir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $karyawan->pendidikan_terakhir}}</p>
                                            </div>
                                        </div>
                                
                    </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kode Jabatan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->kode_jabatan}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kode Cabang</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->kode_cabang}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kode Departemen</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->kode_departemen}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Gaji Pokok</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->gaji_pokok}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tanggal Diangkat</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->tanggal_diangkat}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tanggal Keluar</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->tanggal_keluar}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Bank</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->nama_bank}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor Rekening</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->nomor_rekening}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Rekening Atas Nama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $karyawan->rekening_atas_nama}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- <div class="col-md-12">
                                        <label>Data Karyawan</label><br/>
                                        <p>Detil Data Karyawan</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
@endsection


@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Karyawan</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Tambah</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/karyawan">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Karyawan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Nomor Induk</label>
                                    <input id="nomor_induk" type="text" class="form-control" placeholder="Input Nomor Induk" @error('nomor_induk') is-invalid @enderror name="nomor_induk" value="{{ $nomor_induk }}" readonly>
                                    @error('nomor_induk')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>NIK</label>
                                    <input id="nik" type="text" class="form-control" placeholder="Input NIK" @error('nik') is-invalid @enderror name="nik" value="{{ old('nik') }}">
                                    @error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Lengkap</label>
                                    <input id="nama" type="text" class="form-control" placeholder="Input Nama Lengkap" @error('nama') is-invalid @enderror name="nama" value="{{ old('nama') }}">
                                    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tempat Lahir</label>
                                    <input id="tempat_lahir" type="text" class="form-control" placeholder="Input Tempat Lahir" @error('tempat_lahir') is-invalid @enderror name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                                    @error('tempat_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tanggal Lahir</label>
                                    <input id="tanggal_lahir" type="date" class="form-control" placeholder="" @error('tanggal_lahir') is-invalid @enderror name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                    @error('tanggal_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Jenis Kelamin</label>
                                    <select id="jenis_kelamin" type="text" class="form-control" placeholder="Input Jenis Kelamin" @error('jenis_kelamin') is-invalid @enderror name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                                        <option placeholder>Pilih satu..</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        @error('jenis_kelamin')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </select>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Agama</label>
                                    <select id="agama" type="text" class="form-control" placeholder="Input Agama" @error('agama') is-invalid @enderror name="agama" value="{{ old('agama') }}">
                                        <option placeholder>Pilih satu..</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        @error('agama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </select>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Status Pernikahan</label>
                                    <select id="status_pernikahan" type="text" class="form-control" placeholder="Input Status Pernikahan" @error('status_pernikahan') is-invalid @enderror name="status_pernikahan" value="{{ old('status_pernikahan') }}">
                                        <option placeholder>Pilih satu..</option>
                                        <option value="Sudah Kawin">Sudah Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    @error('status_pernikahan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </select>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Jumlah Anak</label>
                                    <input id="jumlah_anak" type="text" class="form-control" placeholder="Input Jumlah Anak" @error('jumlah_anak') is-invalid @enderror name="jumlah_anak" value="{{ old('jumlah_anak') }}">
                                    @error('jumlah_anak')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Alamat</label>
                                    <input id="alamat" type="text" class="form-control" placeholder="Input alamat" @error('alamat') is-invalid @enderror name="alamat" value="{{ old('alamat') }}">
                                    @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nomor Telepon</label>
                                    <input id="nomor_telepon" type="text" class="form-control" placeholder="Input NOmer Telepon" @error('nomor_telepon') is-invalid @enderror name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                                    @error('nomor_telepon')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Pendidikan Terakhir</label>
                                    <select id="pendidikan_terakhir" type="text" class="form-control" placeholder="Input pendidikan_terakhir" @error('pendidikan_terakhir') is-invalid @enderror name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}">
                                        <option placeholder>Pilih satu..</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP/SLTP">SMP/SLTP</option>
                                        <option value="SMA/SLTA Sederajat">SMA/SLTA Sederajat</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        @error('pendidikan_terakhir')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </select>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Jabatan</label>
                                    <select class="form-control" name="kode_jabatan" id="kode_jabatan">
                                            <option selected>Cari Jabatan</option>
                                        @foreach ($jab as $jb)
                                            <option value="{{ $jb->kode_jabatan }}"> {{ $jb->nama_jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Cabang</label>
                                    <select class="form-control" name="kode_cabang" id="kode_cabang">
                                            <option selected>Cari Cabang</option>
                                        @foreach ($cab as $c)
                                            <option value="{{ $c->kode_cabang }}">{{ $c->nama_cabang }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Departemen</label>
                                    <select class="form-control" name="kode_departemen" id="kode_departemen">
                                            <option selected>Cari Departemen</option>
                                        @foreach ($dep as $dp)
                                            <option value="{{ $dp->kode_departemen }}">{{ $dp->nama_departemen }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Gaji Pokok</label>
                                    <input id="gaji_pokok" type="text" class="form-control" placeholder="Input gaji_pokok" @error('gaji_pokok') is-invalid @enderror name="gaji_pokok" value="{{ old('gaji_pokok') }}">
                                    @error('gaji_pokok')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>tanggal daingkat</label>
                                    <input id="tanggal_diangkat" type="date" class="form-control" placeholder="Input tanggal_diangkat" @error('tanggal_diangkat') is-invalid @enderror name="tanggal_diangkat" value="{{ old('tanggal_diangkat') }}">
                                    @error('tanggal_diangkat')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tanggal Keluar</label>
                                    <input id="tanggal_keluar" type="date" class="form-control" placeholder="Input tanggal_keluar" @error('tanggal_keluar') is-invalid @enderror name="tanggal_keluar" value="{{ old('tanggal_keluar') }}">
                                    @error('tanggal_keluar')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Bank</label>
                                    <input id="nama_bank" type="text" class="form-control" placeholder="Input nama_bank" @error('nama_bank') is-invalid @enderror name="nama_bank" value="{{ old('nama_bank') }}">
                                    @error('nama_bank')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nomor Rekening</label>
                                    <input id="nomor_rekening" type="text" class="form-control" placeholder="Input nomor_rekening" @error('nomor_rekening') is-invalid @enderror name="nomor_rekening" value="{{ old('nomor_rekening') }}">
                                    @error('nomor_rekening')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Rekening Atas Nama</label>
                                    <input id="rekening_atas_nama" type="text" class="form-control" placeholder="Input rekening_atas_nama" @error('rekening_atas_nama') is-invalid @enderror name="rekening_atas_nama" value="{{ old('rekening_atas_nama') }}">
                                    @error('rekening_atas_nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/karyawan"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

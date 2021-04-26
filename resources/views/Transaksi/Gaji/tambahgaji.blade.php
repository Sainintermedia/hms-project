@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Gaji</h4>
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
                <form method="POST" action="/gaji">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Gaji</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Nomor Induk</label>
                                    <input id="nomor_induk" type="text" class="form-control" placeholder="Input Nomor Induk" @error('nomor_induk') is-invalid @enderror name="nomor_induk" value="{{ old('nomor_induk')  }}">
                                    @error('nomor_induk')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Bulan</label>
                                    <input id="bulan" type="text" class="form-control" placeholder="" @error('bulan') is-invalid @enderror name="bulan" value="{{ old('bulan') }}">
                                    @error('bulan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tahun</label>
                                    <input id="tahun" type="text" class="form-control" placeholder="Input Tahun" @error('tahun') is-invalid @enderror name="tahun" value="{{ old('tahun') }}">
                                    @error('tahun')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Gaji Pokok</label>
                                    <input id="gaji_pokok" type="text" class="form-control" placeholder="Input gaji_pokok" @error('gaji_pokok') is-invalid @enderror name="gaji_pokok" value="{{ old('gaji_pokok') }}">
                                    @error('gaji_pokok')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tunjangan Jabatan</label>
                                    <input id="tunjangan_jabatan" type="text" class="form-control" placeholder="Input tunjangan_jabatan" @error('tunjangan_jabatan') is-invalid @enderror name="tunjangan_jabatan" value="{{ old('tunjangan_jabatan') }}">
                                    @error('tunjangan_jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tunjanagan keluarga</label>
                                    <input id="tunjangan_keluarga" type="text" class="form-control" placeholder="Input Tunjangan Keluarga" @error('tunjangan_keluarga') is-invalid @enderror name="tunjangan_keluarga" value="{{ old('tunjangan_keluarga') }}">
                                    @error('tunjangan_keluarga')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Uang Makan</label>
                                    <input id="uang_makan" type="text" class="form-control" placeholder="Input uang_makan" @error('uang_makan') is-invalid @enderror name="uang_makan" value="{{ old('uang_makan') }}">
                                    @error('uang_makan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Uang Lembur</label>
                                    <input id="uang_lembur" type="text" class="form-control" placeholder="Input uang_lembur" @error('uang_lembur') is-invalid @enderror name="uang_lembur" value="{{ old('uang_lembur') }}">
                                    @error('uang_lembur')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Persen Pot Pph</label>
                                    <input id="persen_pot_pph" type="text" class="form-control" placeholder="Input Persen" @error('persen_pot_pph') is-invalid @enderror name="persen_pot_pph" value="{{ old('persen_pot_pph') }}">
                                    @error('persen_pot_pph')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>PTKP</label>
                                    <input id="ptkp" type="text" class="form-control" placeholder="Input ptkp" @error('ptkp') is-invalid @enderror name="ptkp" value="{{ old('ptkp') }}">
                                    @error('ptkp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Persen Pot Jamsostek</label>
                                    <input id="persen_pot_jamsostek" type="text" class="form-control" placeholder="Input Jamsostek" @error('persen_pot_jamsostek') is-invalid @enderror name="persen_pot_jamsostek" value="{{ old('persen_pot_jamsostek') }}">
                                    @error('persen_pot_jamsostek')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Pot Lain-lain</label>
                                    <input id="pot_lain_lain" type="text" class="form-control" placeholder="Input Pot Lain-Lain" @error('pot_lain_lain') is-invalid @enderror name="pot_lain_lain" value="{{ old('pot_lain_lain') }}">
                                    @error('pot_lain_lain')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>nama Jabatan</label>
                                    <input id="nama_jabatan" type="text" class="form-control" placeholder="Input Nama Jabatan" @error('nama_jabatan') is-invalid @enderror name="nama_jabatan" value="{{ old('nama_jabatan') }}">
                                    @error('nama_jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Cabang</label>
                                    <input id="nama_cabang" type="text" class="form-control" placeholder="Input Cabang" @error('nama_cabang') is-invalid @enderror name="nama_cabang" value="{{ old('nama_cabang') }}">
                                    @error('nama_cabang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Departemen</label>
                                    <input id="nama_departemen" type="text" class="form-control" placeholder="Input Departemen" @error('nama_departemen') is-invalid @enderror name="nama_departemen" value="{{ old('nama_departemen') }}">
                                    @error('nama_departemen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Bank</label>
                                    <input id="nama_bank" type="text" class="form-control" placeholder="Input Nama Bank" @error('nama_bank') is-invalid @enderror name="nama_bank" value="{{ old('nama_bank') }}">
                                    @error('nama_bank')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nomor Rekening</label>
                                    <input id="nomor_rekening" type="text" class="form-control" placeholder="Input Nomor Rekening" @error('nomor_rekening') is-invalid @enderror name="nomor_rekening" value="{{ old('nomor_rekening') }}">
                                    @error('nomor_rekening')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Rekening Atas Nama</label>
                                    <input id="rekening_atas_nama" type="text" class="form-control" placeholder="Input Rekening Atas Nama" @error('rekening_atas_nama') is-invalid @enderror name="rekening_atas_nama" value="{{ old('rekening_atas_nama') }}">
                                    @error('rekening_atas_nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/gaji"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

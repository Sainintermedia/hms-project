@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Standar</h4>
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
                <form method="POST" action="/standar">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Data Standar</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Bulan</label>
                                    <input id="bulan" type="text" class="form-control" placeholder="Input Bulan" @error('bulan') is-invalid @enderror name="bulan" value="{{ old('bulan') }}">
                                    @error('bulan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tahun</label>
                                    <input id="tahun" type="text" class="form-control" placeholder="Input Tahun" @error('tahun') is-invalid @enderror name="tahun" value="{{ old('tahun') }}">
                                    @error('tahun')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Jumlah Hari Kerja</label>
                                    <input id="jumlah_hari_kerja" type="text" class="form-control" placeholder="Input Jumlah Hari Kerja" @error('jumlah_hari_kerja') is-invalid @enderror name="jumlah_hari_kerja" value="{{ old('jumlah_hari_kerja') }}">
                                    @error('jumlah_hari_kerja')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/standar"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

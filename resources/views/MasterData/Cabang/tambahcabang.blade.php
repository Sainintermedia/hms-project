@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Cabang</h4>
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
                <form method="POST" action="/cabang">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Cabang</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Kode Cabang</label>
                                    <input id="kode_cabang" type="text" class="form-control" placeholder="Input Kode Cabang" @error('kode_cabang') is-invalid @enderror name="kode_cabang" value="{{ old('kode_cabang') }}">
                                    @error('kode_cabang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Cabang</label>
                                    <input id="nama_cabang" type="text" class="form-control" placeholder="Input Nama Cabang" @error('nama_cabang') is-invalid @enderror name="nama_cabang" value="{{ old('nama_cabang') }}">
                                    @error('nama_cabang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Uang Makan</label>
                                    <input id="uang_makan" type="text" class="form-control" placeholder="Input Uang Makan" @error('uang_makan') is-invalid @enderror name="uang_makan" value="{{ old('uang_makan') }}">
                                    @error('uang_makan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/cabang"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

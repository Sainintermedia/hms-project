@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Departemen</h4>
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
                <form method="POST" action="/departemen">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Departemen</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Kode Departemen</label>
                                    <input id="kode_departemen" type="text" class="form-control" placeholder="Input Kode Departemen" @error('kode_departemen') is-invalid @enderror name="kode_departemen" value="{{ old('kode_departemen') }}">
                                    @error('kode_departemen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Departemen</label>
                                    <input id="nama_departemen" type="text" class="form-control" placeholder="Input Nama Departemen" @error('nama_departemen') is-invalid @enderror name="nama_departemen" value="{{ old('nama_departemen') }}">
                                    @error('nama_departemen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/departemen"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

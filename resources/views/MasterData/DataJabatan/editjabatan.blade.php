@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Jabatan</h4>
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
                <form method="POST" action="/jabatanupdate/{{$jaba->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Jabatan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Kode Jabatan</label>
                                    <input id="kode_jabatan" type="text" class="form-control" placeholder="Input kode_jabatan" @error('kode_jabatan') is-invalid @enderror name="kode_jabatan" value="{{$jaba->kode_jabatan}}">
                                    @error('kode_jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Jabatan</label>
                                    <input id="nama_jabatan" type="text" class="form-control" placeholder="Input Nama Jabatan" @error('nama_jabatan') is-invalid @enderror name="nama_jabatan" value="{{$jaba->nama_jabatan}}">
                                    @error('nama_jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tunjangan Jabatan</label>
                                    <input id="tunjangan_jabatan" type="text" class="form-control" placeholder="Input tunjangan_jabatan" @error('tunjangan_jabatan') is-invalid @enderror name="tunjangan_jabatan" value="{{$jaba->tunjangan_jabatan}}">
                                    @error('tunjangan_jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Level Jabatan</label>
                                    <input id="level_jabatan" type="text" class="form-control" placeholder="Input TUnjangan Jabatan" @error('level_jabatan') is-invalid @enderror name="level_jabatan" value="{{$jaba->level_jabatan}}">
                                    @error('level_jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/jabatan"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

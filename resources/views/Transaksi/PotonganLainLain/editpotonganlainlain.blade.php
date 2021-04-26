@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Potongan lain Lain</h4>
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
                <form method="POST" action="/potonganlainlainupdate/{{$ptl->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Lembur</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Nomor Induk</label>
                                    <input id="nomor_induk" type="text" class="form-control" placeholder="Input Nomor Induk" @error('nomor_induk') is-invalid @enderror name="nomor_induk" value="{{$ptl->nomor_induk}}">
                                    @error('nomor_induk')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Bulan</label>
                                    <input id="bulan" type="text" class="form-control" placeholder="Input Bulan" @error('bulan') is-invalid @enderror name="bulan" value="{{$ptl->bulan}}">
                                    @error('bulan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tahun</label>
                                    <input id="tahun" type="text" class="form-control" placeholder="Input Tahun" @error('tahun') is-invalid @enderror name="tahun" value="{{$ptl->tahun}}">
                                    @error('tahun')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Jumlah</label>
                                    <input id="jumlah" type="text" class="form-control" placeholder="Input Jumlah" @error('jumlah') is-invalid @enderror name="jumlah" value="{{$ptl->jumlah}}">
                                    @error('jumlah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Keterangan</label>
                                    <input id="keterangan" type="text" class="form-control" placeholder="Input Keterangan" @error('keterangan') is-invalid @enderror name="keterangan" value="{{$ptl->keterangan}}">
                                    @error('keterangan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/potonganlainlain"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

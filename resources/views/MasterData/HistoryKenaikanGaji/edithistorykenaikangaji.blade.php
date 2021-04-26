@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">History Kenaikan Gaji</h4>
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
                    <a href="#">Edit</a>
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
                <form method="POST" action="/historykenaikangajiupdate/{{$his->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit History Kenaikan gaji</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Nomor Induk</label>
                                    <input id="nomor_induk" type="text" class="form-control" placeholder="Ubah Nomor Induk" @error('nomor_induk') is-invalid @enderror name="nomor_induk" value="{{$his->nomor_induk}}">
                                    @error('nomor_induk')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Bulan</label>
                                    <input id="bulan" type="text" class="form-control" placeholder="Uabah Bulan" @error('bulan') is-invalid @enderror name="bulan" value="{{$his->bulan}}">
                                    @error('bulan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tahun</label>
                                    <input id="tahun" type="text" class="form-control" placeholder="Uabah Tahun" @error('tahun') is-invalid @enderror name="tahun" value="{{$his->tahun}}">
                                    @error('tahun')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Gaji Pokok Lama</label>
                                    <input id="gaji_pokok_lama" type="text" class="form-control" placeholder="Ubah Gajih Pokok Lama" @error('gaji_pokok_lama') is-invalid @enderror name="gaji_pokok_lama" value="{{$his->gaji_pokok_lama}}">
                                    @error('gaji_pokok_lama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Persentase Kenaikan</label>
                                    <input id="persentase_kenaikan" type="text" class="form-control" placeholder="Ubah Persentase kenaikan" @error('persentase_kenaikan') is-invalid @enderror name="persentase_kenaikan" value="{{$his->persentase_kenaikan}}">
                                    @error('persentase_kenaikan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Gaji Pokok Baru</label>
                                    <input id="gaji_pokok_baru" type="text" class="form-control" placeholder="Ubah Bulan" @error('gaji_pokok_baru') is-invalid @enderror name="gaji_pokok_baru" value="{{$his->gaji_pokok_baru}}">
                                    @error('gaji_pokok_baru')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/historykenaikangaji"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.master')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Option</h4>
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
                <form method="POST" action="/option/{{$op->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Option</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-8">

                                <div class="form-group form-group-default">
                                    <label>Persen PPH</label>
                                    <input id="persen_pph" type="text" class="form-control" placeholder="Input Persen PPH" @error('persen_pph') is-invalid @enderror name="persen_pph" value="{{$op->persen_pph}}">
                                    @error('persen_pph')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>PTKP</label>
                                    <input id="ptkp" type="text" class="form-control" placeholder="Input ptkp" @error('ptkp') is-invalid @enderror name="ptkp" value="{{$op->ptkp}}">
                                    @error('ptkp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>persen Jamsostek</label>
                                    <input id="persen_jamsostek" type="text" class="form-control" placeholder="Input Persen Jmasostek" @error('persen_jamsostek') is-invalid @enderror name="persen_jamsostek" value="{{$op->persen_jamsostek}}">
                                    @error('persen_jamsostek')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tunjangan Keluarga</label>
                                    <input id="tunjangan_keluarga" type="text" class="form-control" placeholder="Input Tunjangan Keluarga" @error('tunjangan_keluarga') is-invalid @enderror name="tunjangan_keluarga" value="{{$op->tunjangan_keluarga}}">
                                    @error('tunjangan_keluarga')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/option"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

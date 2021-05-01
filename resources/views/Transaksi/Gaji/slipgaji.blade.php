@extends('layouts.master')
@section('content')

            <div class="card" style="width: 18rem;">
                {{-- @foreach( $Slipgaji as $slip) --}}
                {{-- @foreach ($collection as $object)
        {{ $object->title }}
    @endforeach --}}

@if ($Bulan== ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember' ])

I have multiple records!
@elseif  ($Bulan=="Mei")
                <img class="card-img-top" img src="../assets/img/profile.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">	{{ $Slipgaji->nama }}</h5>
                <p class="card-text">Nomor Induk : {{ $Slipgaji->nomor_induk }}</p>
                <p class="card-text">Jabatan : {{ $Slipgaji->nama_jabatan }}</p>
                <p class="card-text">Depsrtemen : {{ $Slipgaji->nama_departemen }}</p>
                <p class="card-text">Bulan : {{ $Slipgaji->bulan }}</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Gaji Pokok : {{ $Slipgaji->gaji_pokok }}</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                <a href="#" type="button" class="btn btn-primary btn-round">Cetak</a>
                </div>
                {{-- @endforeach --}}
            </div>
@else
Data gaji belum tersedia.
@endif


  @endsection

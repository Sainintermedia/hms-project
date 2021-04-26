@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">DETIL DATA KARYAWAN </h1>
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-bold"> {{ $karyawan->nomor_induk }} </h4><br>
                        <h5 class="card-title mb-4 text-left"> {{ $karyawan->nama }}</h5>
                        <h6 class="card-text mb-3 "><a class="text-bold">Tempat Lahir</a><span>:</span>{{ $karyawan->tempat_lahir }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Tanggal Lahir</a>: {{ $karyawan->tanggal_lahir }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Jenis Kelamin</a>: {{ $karyawan->jenis_kelamin }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Agama</a>: {{ $karyawan->agama }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Status Pernikahan</a>: {{ $karyawan->status_pernikahan }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Jumlah Anak</a>: {{ $karyawan->jumlah_anak }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Alamat</a>: {{ $karyawan->alamat }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">No Handphone</a>: {{ $karyawan->nomor_telepon }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Pendidikan Terakhir</a>: {{ $karyawan->pendidikan_terakhir }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Kode Jabatan</a>: {{ $karyawan->kode_jabatan }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Kode Cabang</a>: {{ $karyawan->kode_cabang }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Kode Departemen</a>: {{ $karyawan->kode_departemen }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Gaji Pokok</a>: {{ $karyawan->gaji_pokok }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Tanggal Diangkat</a>: {{ $karyawan->tanggal_diangkat }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Tanggal Keluar</a>: {{ $karyawan->tanggal_keluar }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Nama Bank</a>: {{ $karyawan->nama_bank }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Nomor Rekening</a>: {{ $karyawan->nomor_rekening }} </h6>
                        <h6 class="card-text mb-3"><a class="text-bold">Rekening Atas Nama</a>: {{ $karyawan->rekening_atas_nama }} </h6>

                        <a href=" {{ $karyawan->id }}/editkaryawan" class="btn btn-primary">Edit</a>

                        <form action="/karyawan/{{ $karyawan->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <a href="/karyawan" class="card-link">Kembali</a>
                    </div>
                    </div>  

        </div>
</div>
{{-- <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="plan-name">
              Lite </div>
            <div class="plan-description">
              <div class="plan-price month">
                $19<sub> / month</sub></div>
              <p>Great for personal users and the self-employed who are considering analytics and need branding.</p>
            </div>
            <div class="plan-description specs">

              1,000 Branded Links<br> 1+ User Seats<br> 1+ Custom Domains </div>
            <div class="plan-cta">
              <p><a class="button" href="#" data-open="get-pro-modal" aria-controls="get-pro-modal" aria-haspopup="true" tabindex="0">Get Started</a></p>
            </div>
          </div>
        </div>
      </div> --}}

@endsection
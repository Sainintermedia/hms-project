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
                                    <input id="nomor_induk" type="text" class="form-control Dsnomor_induk" @error('nomor_induk') is-invalid @enderror  placeholder="Input Nomor Induk" name="nomor_induk" value="{{ old('nomor_induk')  }}"
                                    data-toggle="modal" data-target="#exampleModal">
                                    @error('nomor_induk')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Bulan</label>
                                    <input id="bulan" type="text" class="form-control" placeholder="" @error('bulan') is-invalid @enderror name="bulan" value="{{ $Bulan }}">
                                    @error('bulan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tahun</label>
                                    <input id="tahun" type="text" class="form-control" placeholder="Input Tahun" @error('tahun') is-invalid @enderror name="tahun" value="{{ $Tahun }}">
                                    @error('tahun')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Gaji Pokok</label>
                                    <input id="gaji_pokok" type="text" class="form-control Dsgaji_pokok" @error('gaji_pokok') is-invalid @enderror placeholder="Input gaji_pokok" name="gaji_pokok" value="{{ old('gaji_pokok') }}">
                                    @error('gaji_pokok')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tunjangan Jabatan</label>
                                    <input id="tunjangan_jabatan" type="text" class="form-control Dstunjangan_jabatan" @error('tunjangan_jabatan') is-invalid @enderror placeholder="Input tunjangan_jabatan" name="tunjangan_jabatan" value="{{ old('tunjangan_jabatan') }}">
                                    @error('tunjangan_jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Tunjanagan keluarga</label>
                                    <input id="tunjangan_keluarga" type="text" class="form-control" placeholder="Input Tunjangan Keluarga" @error('tunjangan_keluarga') is-invalid @enderror name="tunjangan_keluarga" value="{{ old('tunjangan_keluarga') }}">
                                    @error('tunjangan_keluarga')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Uang Makan</label>
                                    <input id="uang_makan" type="text" class="form-control Dsuang_makan" @error('uang_makan') is-invalid @enderror placeholder="Input uang_makan" name="uang_makan" value="{{ old('uang_makan') }}">
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
                                    <input id="nama_jabatan" type="text" class="form-control Dsnama_jabatan" @error('nama_jabatan') is-invalid @enderror placeholder="Input Nama Jabatan" name="nama_jabatan" value="{{ old('nama_jabatan') }}">
                                    @error('nama_jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Cabang</label>
                                    <input id="nama_cabang" type="text" class="form-control Dsnama_cabang" @error('nama_cabang') is-invalid @enderror placeholder="Input Cabang" name="nama_cabang" value="{{ old('nama_cabang') }}">
                                    @error('nama_cabang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Departemen</label>
                                    <input id="nama_departemen" type="text" class="form-control Dsnama_departemen" @error('nama_departemen') is-invalid @enderror placeholder="Input Departemen" name="nama_departemen" value="{{ old('nama_departemen') }}">
                                    @error('nama_departemen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nama Bank</label>
                                    <input id="nama_bank" type="text" class="form-control Dsnama_bank" @error('nama_bank') is-invalid @enderror placeholder="Input Nama Bank" name="nama_bank" value="{{ old('nama_bank') }}">
                                    @error('nama_bank')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Nomor Rekening</label>
                                    <input id="nomor_rekening" type="text" class="form-control Dsnomor_rekening" @error('nomor_rekening') is-invalid @enderror placeholder="Input Nomor Rekening" name="nomor_rekening" value="{{ old('nomor_rekening') }}">
                                    @error('nomor_rekening')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group form-group-default">
                                    <label>Rekening Atas Nama</label>
                                    <input id="rekening_atas_nama" type="text" class="form-control Dsrekening_atas_nama" @error('rekening_atas_nama') is-invalid @enderror placeholder="Input Rekening Atas Nama" name="rekening_atas_nama" value="{{ old('rekening_atas_nama') }}">
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

<script>
    const tombol = document.querySelector('#tombol');
    tombol.addEventListener('click',function()
    swal("Good job!", "You clicked the button!", {
	icon : "success",
	buttons: {
		confirm: {
			className : 'btn btn-success'
		}
	},
});
);

</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DATA KARYAWAN</h5>
              <input type="text" class="form-control  @error('nomor_induk') is-invalid @enderror" id="nomor_induk" placeholder="Cari No Induk" name="nomor_induk" >
            @error('nomor_induk')<div class="invalid-feedback">{{ $message }}</div>@enderror

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table-responsive table-hover table-sm">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col" class="nomor_induk">No Induk</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Departemen</th>
                    <th scope="col">Cabang</th>
                </tr>
                </thead>
                            <tbody>
                            @foreach($Gj as $g)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><button class="btnreg btn btn-primary btn-xs" data-id="{{$g->nomor_induk}}"
                                        data-uang_makan="{{$g->uang_makan}}"
                                        data-gaji_pokok="{{$g->gaji_pokok}}"
                                        data-tunjangan_jabatan="{{$g->tunjangan_jabatan}}"
                                        data-nama_jabatan="{{$g->nama_jabatan}}"
                                        data-nama_cabang="{{$g->nama_cabang}}"
                                        data-nama_departemen="{{$g->nama_departemen}}"
                                        data-nama_bank="{{$g->nama_bank}}"
                                        data-nomor_rekening="{{$g->nomor_rekening}}"
                                        data-rekening_atas_nama="{{$g->rekening_atas_nama}}"
                                        data-dismiss="modal">{{$g->nomor_induk}}</button></td>

                                    <td>{{$g->nama}}</td>
                                    <td>{{$g->nama_jabatan}}</td>
                                    <td>{{$g->nama_departemen}}</td>
                                    <td>{{$g->nama_cabang}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('footer')

<script type="text/javascript">
	$(document).ready(function(){
		$('.btnreg').click(function(){
			var $nomor_induk = $(this).data("id");
			var $uang_makan = $(this).data("uang_makan");
			var $gaji_pokok = $(this).data("gaji_pokok");
			var $tunjangan_jabatan = $(this).data("tunjangan_jabatan");
			var $nama_jabatan = $(this).data("nama_jabatan");
			var $nama_cabang = $(this).data("nama_cabang");
			var $nama_departemen = $(this).data("nama_departemen");
			var $nama_bank = $(this).data("nama_bank");
			var $nomor_rekening = $(this).data("nomor_rekening");
			var $rekening_atas_nama = $(this).data("rekening_atas_nama");
      console.log($(this).data("id"))
      $('.Dsnomor_induk').val($nomor_induk)
      $('.Dsuang_makan').val($uang_makan)
      $('.Dsgaji_pokok').val($gaji_pokok)
      $('.Dstunjangan_jabatan').val($tunjangan_jabatan)
      $('.Dsnama_jabatan').val($nama_jabatan)
      $('.Dsnama_cabang').val($nama_cabang)
      $('.Dsnama_departemen').val($nama_departemen)
      $('.Dsnama_bank').val($nama_bank)
      $('.Dsnomor_rekening').val($nomor_rekening)
      $('.Dsrekening_atas_nama').val($rekening_atas_nama)
		});
	});
</script>

@endsection


@extends('layouts.master')
@section('content')
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Transaksi</h4>
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
								<a href="#">Gaji</a>
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
							<div class="card">
								<div class="card-header">

									<a href="/gajitambah" type="button" class="btn btn-primary btn-round">+ Data Gaji</a>
									@if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
										<button type="button" class="close" data-dismiss="alert">×</button>
									</div>
								@endif
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Nomor Induk</th>
													<th>Bulan</th>
													<th>Tahun</th>
													<th>Gaji Pokok</th>
													<th>Tunjangan Jabatan</th>
													<th>Tunjangan Keluarga</th>
													<th>Uang Makan</th>
													<th>Uang Lembur</th>
													<th>Persen Pot Pph</th>
													<th>Ptkp</th>
													<th>Persen Pot Jamostek</th>
													<th>Pot Lain-lain</th>
													<th>Nama Jabatan</th>
													<th>Nama Cabang</th>
													<th>Nama Departemen</th>
													<th>Nama Bank</th>
													<th>Nomor Rekening</th>
													<th>Rekening Atas Nama</th>
													<th>Tanggal Dibuat</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tfoot>
                                                <tr>
                                                    <th>No</th>
													<th>Nomor Induk</th>
													<th>Bulan</th>
													<th>Tahun</th>
													<th>Gaji Pokok</th>
													<th>Tunjangan Jabatan</th>
													<th>Tunjangan Keluarga</th>
													<th>Uang Makan</th>
													<th>Uang Lembur</th>
													<th>Persen Pot Pph</th>
													<th>Ptkp</th>
													<th>Persen Pot Jamostek</th>
													<th>Pot Lain-lain</th>
													<th>Nama Jabatan</th>
													<th>Nama Cabang</th>
													<th>Nama Departemen</th>
													<th>Nama Bank</th>
													<th>Nomor Rekening</th>
													<th>Rekening Atas Nama</th>
													<th>Tanggal Dibuat</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
											<tbody>
												@foreach($Gaj as $gj)
												<tr>
													<th scope="row">{{ $loop->iteration }}</th>
													<td>{{$gj->nomor_induk}}</td>
													<td>{{$gj->bulan}}</td>
													<td>{{$gj->tahun}}</td>
													<td>{{$gj->gaji_pokok}}</td>
													<td>{{$gj->tunjangan_jabatan}}</td>
													<td>{{$gj->tunjangan_keluarga}}</td>
													<td>{{$gj->uang_makan}}</td>
													<td>{{$gj->uang_lembur}}</td>
													<td>{{$gj->persen_pot_pph}}</td>
													<td>{{$gj->ptkp}}</td>
													<td>{{$gj->persen_pot_jamsostek}}</td>
													<td>{{$gj->pot_lain_lain}}</td>
													<td>{{$gj->nama_jabatan}}</td>
													<td>{{$gj->nama_cabang}}</td>
													<td>{{$gj->nama_departemen}}</td>
													<td>{{$gj->nama_bank}}</td>
													<td>{{$gj->nomor_rekening}}</td>
													<td>{{$gj->rekening_atas_nama}}</td>
													<td>{{ date('d M Y',strtotime($gj->created_at)) }}</td>
													<td>
														<div class="form-button-action">
															<a href="/gajiedit/{{$gj->id}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															    <i class="fa fa-edit"></i>
                                                            </a>
                                                        </div>
														    <div href="/gajihapus/{{$gj->id}}" type="button" data-toggle="tooltip"   title="" class="btn btn-link btn-danger delete-confirm"  data-original-title="Remove">
															    <i class="fa fa-times" ></i>
														    </div>
														</div>
													</td>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection
@section('footer')
<script type="text/javascript">
	$(document).ready(function() {
		$('#basic-datatables').DataTable({
		});
	});
</script>

<script type="text/javascript">
    $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Yakin Hapus Data?',
        text: 'Data yang sudah di hapus tidak bisa di Kembalikan!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>
@endsection

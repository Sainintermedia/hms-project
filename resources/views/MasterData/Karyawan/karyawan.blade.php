
@extends('layouts.master')
@section('content')
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Master Data</h4>
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
								<a href="#">Karyawan</a>
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

									<a href="/karyawantambah" type="button" class="btn btn-primary btn-round">+ Data Karyawan</a>
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
													<th>No Induk</th>
													<th>Nama</th>
													<th>Tempat Lahir</th>
													<th>Tanggal Lahir</th>
													<th>Jenis Kelamin</th>
													<th>Agama</th>
													<th>Status Pernikahan</th>
													<th>Jumlah Anak</th>
													<th>Alamat</th>
													<th>Nomor Telepon</th>
													<th>Pendidikan Terakhir</th>
													<th>Kode Jabatan</th>
													<th>Kode Cabang</th>
                                                    <th>Kode Departemen</th>
													<th>Gaji Pokok</th>
													<th>Tanggal Diangkat</th>
													<th>Tanggal Keluar</th>
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
                                                    <th>No Induk</th>
													<th>Nama</th>
													<th>Tempat Lahir</th>
													<th>Tanggal Lahir</th>
													<th>Jenis Kelamin</th>
													<th>Agama</th>
													<th>Status Pernikahan</th>
													<th>Jumlah Anak</th>
													<th>Alamat</th>
													<th>Nomor Telepon</th>
													<th>Pendidikan Terakhir</th>
													<th>Kode Jabatan</th>
													<th>Kode Cabang</th>
													<th>Kode Departemen</th>
													<th>Gaji Pokok</th>
													<th>Tanggal Diangkat</th>
													<th>Tanggal Keluar</th>
													<th>Nama Bank</th>
													<th>Nomor Rekening</th>
													<th>Rekening Atas Nama</th>
                                                    <th>Tanggal Dibuat</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
											<tbody>
												@foreach( $Karya as $kry)
												<tr>
													<th scope="row">{{ $loop->iteration }}</th>
													<td>{{$kry->nomor_induk}}</td>
													<td>{{$kry->nama}}</td>
													<td>{{$kry->tempat_lahir}}</td>
													<td>{{$kry->tanggal_lahir}}</td>
													<td>{{$kry->jenis_kelamin}}</td>
													<td>{{$kry->agama}}</td>
													<td>{{$kry->status_pernikahan}}</td>
													<td>{{$kry->jumlah_anak}}</td>
													<td>{{$kry->alamat}}</td>
													<td>{{$kry->nomor_telepon}}</td>
													<td>{{$kry->pendidikan_terakhir}}</td>
													<td>{{$kry->nama_jabatan}}</td>
													<td>{{$kry->nama_cabang}}</td>
													<td>{{$kry->nama_departemen}}</td>
													<td>{{$kry->gaji_pokok}}</td>
													<td>{{$kry->tanggal_diangkat}}</td>
													<td>{{$kry->tanggal_keluar}}</td>
													<td>{{$kry->nama_bank}}</td>
													<td>{{$kry->nomor_rekening}}</td>
													<td>{{$kry->rekening_atas_nama}}</td>
													<td>{{ date('d M Y',strtotime($kry->created_at)) }}</td>
													<td>
														<div class="form-button-action">
															<a href="/karyawanedit/{{$kry->id}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															    <i class="fa fa-edit"></i>
                                                            </a>
                                                        </div>
														    <div href="/karyawanhapus/{{$kry->id}}" type="button" data-toggle="tooltip"   title="" class="btn btn-link btn-danger delete-confirm"  data-original-title="Remove">
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

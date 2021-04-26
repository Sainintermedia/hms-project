
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
								<a href="#">Lembur</a>
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

									<a href="/lemburtambah" type="button" class="btn btn-primary btn-round">+ Data Lembur</a>
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
													<th>Jumlah Jam Lembur</th>
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
													<th>Jumlah Jam Lembur</th>
													<th>Tanggal Dibuat</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
											<tbody>
												@foreach($Lem as $lm)
												<tr>
													<th scope="row">{{ $loop->iteration }}</th>
													<td>{{$lm->nomor_induk}}</td>
													<td>{{$lm->bulan}}</td>
													<td>{{$lm->tahun}}</td>
													<td>{{$lm->jumlah_jam_lembur}}</td>
													<td>{{ date('d M Y',strtotime($lm->created_at)) }}</td>
													<td>
														<div class="form-button-action">
															<a href="/lemburedit/{{$lm->id}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
															    <i class="fa fa-edit"></i>
                                                            </a>
                                                        </div>
														    <div href="/lemburhapus/{{$lm->id}}" type="button" data-toggle="tooltip"   title="" class="btn btn-link btn-danger delete-confirm"  data-original-title="Remove">
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

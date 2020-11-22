@extends('template.admin')
@section('content')
	<div class="card-box pd-20 height-100-p mb-30">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4" style="text-align: center;">Data produk</h4>
					</div>
					<div class="pd-5">
						<h4 class="text-blue h4" >
							<a class="btn btn-primary" href="" data-toggle="modal" data-target="#modal" type="button"><i class="fa fa-user-plus login-icon"> Tambah Data</i></a>
						</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">No</th>
									<th>Nama Kategori</th>
									<th>Nama Produk</th>
									<th>Harga</th>
									<th>Gambar</th>
									<th class="datatable-nosort">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($list_produk as $key => $produk)
								<tr>
									<td class="table-plus">{{$key+1}}</td>
									<td>{{$produk->kategori->nama}}</td>
									<td>{{$produk->nama_produk}}</td>
									<td>{{$produk->harga}}</td>
									<td>
										<img src="{{url('public/produk', $produk->gambar)}}" width="300px" height="200px" style="margin-left:0px;">
									</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-primary" href="{{url("produk/$produk->id_produk")}}" >
												<i class="dw dw-check" style="color:black;"> Lihat</i>
											</a>
											<a class="btn btn-primary" href="{{url("produk/edit/$produk->id_produk")}}">
												<i class="dw dw-pencil"> Edit</i>
											</a>
											<a class="btn btn-primary" href="{{url("produk/delete/$produk->id_produk")}}">
												<i class="dw dw-trash"> Hapus</i>
											</a>
											
										</div>
									</td>
								</tr>
								@endforeach
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade bs-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel" style="text-align: center;">Tambah Data Produk</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<form action="{{url('produk/store')}}" method="post" data-toggle="validator" role="form" enctype="multipart/form-data"> 
				@csrf
					<div class="modal-body">		
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama Kategori</label>
							<div class="col-sm-12 col-md-10">
								<select name="id_kategori" class="form-control">
									<option></option>
									@foreach($list_kategori as $kategori)
									<option value="{{$kategori->id_kategori}}">{{$kategori->nama}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama produk</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="nama_produk" placeholder="Nama produk" type="text">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Harga Produk</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="harga" placeholder="Harga Produk" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Gambar Produk</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="gambar" type="file" accept=".jpg, .png, .jpeg">
							</div>
						</div>							
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
			
@endsection
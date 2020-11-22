@extends('template.admin')
@section('content')
	<div class="card-box pd-20 height-100-p mb-30">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="">
					<div class="pd-20">
						<h4 class="text-blue h4" style="text-align: center;">Data Produk</h4>
					</div>
					
					<div>
						<form action="{{url('produk/update', $produk->id_produk)}}" method= "post" enctype="multipart/form-data">
							@csrf
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Nama Kategori</label>
								<div class="col-sm-12 col-md-10">
									<select name="id_kategori" class="form-control">
										<option></option>
										@foreach($list_kategori as $kategori)
										<option @if($kategori->id_kategori == $produk->id_kategori) selected @endif
										value="{{$kategori->id_kategori}}">{{$kategori->nama}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Nama produk</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" name="nama_produk" value="{{$produk->nama_produk}}" type="text">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Harga Produk</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" name="harga" value="{{$produk->harga}}" type="text">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
								<div class="col-sm-12 col-md-2">
									<img class="img-responsive" src='{{url("public/produk/$produk->gambar")}}' width="150px" height="150px"/> <br>
								</div>
								<div class="col-sm-12 col-md-8">
									<input class="form-control" type="file" name="poto" accept=".jpg, .png, .jpeg" value="{{$produk->gambar}}">
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
		</div>
	</div>
			
@endsection
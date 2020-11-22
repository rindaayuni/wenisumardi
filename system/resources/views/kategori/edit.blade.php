@extends('template.admin')
@section('content')
	<div class="card-box pd-20 height-100-p mb-30">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="">
					<div class="pd-20">
						<h4 class="text-blue h4" style="text-align: center;">Data Kategori</h4>
					</div>
					
					<div>
						<form action="{{url('kategori/update', $kategori->id_kategori)}}" method= "post">
							@csrf
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Nama Kategori</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" name="nama" value="{{$kategori->nama}}" type="text">
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
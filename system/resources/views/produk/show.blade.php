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
					@csrf
						<table class="table hover multiple-select-row data-table-export nowrap">
							<tbody>
								
								<tr>
									<td>Nama Kategori</td>
									<td>{{$produk->kategori->nama}}</td>
								</tr>
								<tr>
									<td>Nama Produk</td>
									<td>{{$produk->nama_produk}}</td>
								</tr>
								<tr>
									<td>Harga Produk</td>
									<td>{{$produk->harga}}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
			
@endsection
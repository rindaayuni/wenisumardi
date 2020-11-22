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
									<td>Nama Produk</td>
									<td>{{$kategori->nama}}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
			
@endsection
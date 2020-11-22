@extends('template.admin')
@section('content')
	<div class="card-box pd-20 height-100-p mb-30">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4" style="text-align: center;">Data Client</h4>
					</div>
					
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">NIK</th>
									<th>Nama Lengkap</th>
									<th>Alamat</th>
									<th>Username</th>
									<th>Password</th>
								</tr>
							</thead>
							<tbody>
								@foreach($list_pembeli as $key => $pembeli)
								<tr>
									<td class="table-plus">{{$pembeli->nik}}</td>
									<td>{{$pembeli->nama_lengkap}}</td>
									<td>{{$pembeli->alamat}}</td>
									<td>{{$pembeli->username}}</td>
									<td>{{$pembeli->password}}</td>
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
<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\pembeli;
use App\Models\kategori;

/**
 * 
 */
class registerController extends Controller{
	
	public function index()
	{
		return view ("register.index");
	}

	public function store(Request $req){

		$pembeli = pembeli::find($req->nik);
		if($pembeli) return back()->with('success', 'NIK Sudah Terdaftar Sudah Ada'); 

		$user = new User;
		$user->nik = $req->nik;
		$user->username = $req->username;
		$user->password = bcrypt($req->password);
		$user->level = 2;
		$user->save();


		$pembeli = new pembeli;
		$pembeli->nik = $req->nik;
		$pembeli->id_user = $user->id;
		$pembeli->nama_lengkap = $req->nama_lengkap;
		$pembeli->alamat = $req->alamat;
		$pembeli->username = $req->username;
		$pembeli->password = bcrypt($req->password);
		
		$pembeli->save();
		
		return  redirect('login')->with('success', 'Data Berhasil di Simpan');
	}

}

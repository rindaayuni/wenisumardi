<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\kategori;

/**
 * 
 */
class KategoriController extends Controller{
	
	public function index()
	{
		$data['list_kategori'] = kategori::all();
		return view ("kategori.index", $data);
	}

	public function store(Request $req){

		$kategori = kategori::find($req->nama);
		if($kategori) return back()->with('success', 'Nama Kategori Sudah Ada'); 

		$kategori = new kategori;
		$kategori->nama = $req->nama;
		$kategori->save();
		return  redirect('kategori')->with('success', 'Data Berhasil di Simpan');
	}

	public function edit($id){
		$data['kategori'] = kategori::find($id); 
		return view ("kategori.edit",$data);
	}

	public function update(Request $req,$id){

	
		$kategori = kategori::find($id);
		$kategori->nama = $req->nama;
		$kategori->save();
	
		return  redirect('kategori')->with('success', 'Data Berhasil di Edit');
		
	}

	public function show($id){
		$data['kategori'] = kategori::find($id); 
		return view ("kategori.show",$data);
	}

	public function delete($id){
		kategori::destroy($id);
		return redirect('kategori')->with('success', 'Data Berhasil di Hapus');
		
	}

}

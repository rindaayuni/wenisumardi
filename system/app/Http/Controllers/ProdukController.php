<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\produk;
use App\Models\kategori;

/**
 * 
 */
class ProdukController extends Controller{
	
	public function index()
	{
		$data['list_produk'] = produk::all();
		$data['list_kategori'] = kategori::all();
		return view ("produk.index", $data);
	}

	public function store(Request $req){

		$produk = produk::find($req->nama_produk);
		if($produk) return back()->with('success', 'Nama Produk Sudah Ada'); 

		$produk = new produk;
		$produk->id_kategori = $req->id_kategori;
		$produk->nama_produk = $req->nama_produk;
		$produk->harga = $req->harga;
		if($req->hasFile('gambar')){
		$filename = $produk->nama_produk.".".$req->gambar->getClientOriginalExtension();
			$req->gambar->move('public/produk', $filename);
			$produk->gambar= $filename;
			$produk->save();
		} 
		
		return  redirect('produk')->with('success', 'Data Berhasil di Simpan');
	}

	public function edit($id){
		$data['produk'] = produk::find($id); 
		$data['list_kategori'] = kategori::all();
		return view ("produk.edit",$data);
	}

	public function update(Request $req,$id){
		$produk = produk::find($id);
		$produk->id_kategori = $req->id_kategori;
		$produk->nama_produk = $req->nama_produk;
		$produk->harga = $req->harga;

		if($req->hasFile('gambar')){
		$filename = $produk->nama_produk.".".$req->gambar->getClientOriginalExtension();
			$req->gambar->move('public/produk', $filename);
			$produk->gambar= $filename;
		} 
		$produk->save();
	
		return  redirect('produk')->with('success', 'Data Berhasil di Edit');
		
	}

	public function show($id){
		$data['produk'] = produk::find($id); 
		return view ("produk.show",$data);
	}

	public function delete($id){
		produk::destroy($id);
		return redirect('produk')->with('success', 'Data Berhasil di Hapus');
		
	}

}

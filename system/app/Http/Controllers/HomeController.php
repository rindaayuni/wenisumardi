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
class HomeController extends Controller{
	
	public function index()
	{

		

		$data['list_produk'] = produk::all();
		$data['list_kategori'] = kategori::all();
		return view ("home.index", $data);
	}
	
}
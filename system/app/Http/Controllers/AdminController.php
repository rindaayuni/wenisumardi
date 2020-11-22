<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembeli;
use Auth;

/**
 * 
 */
class AdminController extends Controller{
	
	public function index()
	{
		$user = Auth::user();
			if ($user->level !=1) return abort(404);

		return view ("admin.index");
	}

	public function client()
	{
		$data['list_pembeli'] = pembeli::all();
		return view ("admin.client", $data);
	}
	
}
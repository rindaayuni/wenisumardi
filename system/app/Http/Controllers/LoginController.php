<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

/**
 * 
 */
class LoginController extends Controller{
	
	public function login()
	{
		return view ("login");
	}

	public function loginproses(Request $req)
	{
		$this->validate(request(),[
			'username' => 'required',
			'password' => 'required',
		]);

		if (Auth::attempt (['username' => $req->username, 'password' => $req->password])) {
			if (Auth::user()->level ==1 ) {
				return redirect ('admin');
			}else if (Auth::user()->level == 2) {
				return redirect ('home');
			}

			return redirect('login');
		}else {
			return redirect ('login');
		}
	}
	
	public function logout()
	{
		Auth::logout();
		return redirect('/home');
	}

	function test()
	{
	 	$user= new user;
	 	$user->username = 'admin';
	 	$user->password = bcrypt('admin');
	 	$user->level = 1;
	 	$user->save();

	 	return "Berhasil";
	}
}


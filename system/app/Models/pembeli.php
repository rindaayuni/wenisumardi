<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\model;

/**
* 
*/
class pembeli extends model
{
	
	public $table = "pembeli";
	protected $primaryKey = 'nik';
	public $incrementing = false;

}

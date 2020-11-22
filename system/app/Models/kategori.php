<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\model;

/**
* 
*/
class kategori extends model
{
	
	public $table = "kategori";
	protected $primaryKey = 'id_kategori';
	public $incrementing = false;

	function produk(){
		return $this->belongsTo('\App\Models\produk', 'id_kategori');
	}

}

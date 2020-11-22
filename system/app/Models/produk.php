<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\model;

/**
* 
*/
class produk extends model
{
	
	public $table = "produk";
	protected $primaryKey = 'id_produk';
	public $incrementing = false;

	function kategori(){
		return $this->belongsTo('\App\Models\kategori', 'id_kategori');
	}

}

<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    protected $table = 'tabel_produk';

    protected $fillable = ['nama_produk', 'harga', 'image', 'description'];

    // public function scopeSelectBox($query)
    // {
    // 	$return = array();
    //     $data = $query->orderBy('id')->get()->toArray();
    //     foreach ($data as $key => $value) {
    //     	$return[$value['id']] = $value['nama_produk'];
    //     }
    //     return $return;
    // }
}

<?php

namespace App\Model;

use Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tabel_produk';

    protected $fillable = ['nama_produk', 'slug_produk', 'harga', 'image', 'description'];

    public function visits()
    {
        return visits($this);
    }

    public function setNamaProdukAttribute($value)
    {
        $this->attributes['nama_produk']  = $value;
        $this->attributes['slug_produk']   = str_slug($value);
    }

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

<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    protected $table = 'tabel_produk';

    protected $fillable = ['nama_produk', 'harga', 'image', 'description'];

    public function stock()
    {
        return $this->hasOne('App\Model\Stock');
    }
}

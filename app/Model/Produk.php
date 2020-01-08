<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tabel_produk';

    public function stock()
    {
        return $this->hasOne('App\Model\Stock');
    }
}

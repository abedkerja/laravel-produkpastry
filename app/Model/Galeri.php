<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'tabel_galeri';

    protected $fillable = ['judul_galeri', 'image_galeri', 'deskripsi_galeri'];
}

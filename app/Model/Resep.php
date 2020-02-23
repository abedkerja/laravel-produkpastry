<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'tabel_resep';

    protected $fillable = ['judul_resep', 'image_resep', 'deskripsi_resep', 'author', 'created_by'];
}

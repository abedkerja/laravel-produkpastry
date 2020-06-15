<?php

namespace App\Model;

use Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'tabel_galeri';

    protected $fillable = ['judul_galeri', 'slug_galeri', 'image_galeri', 'deskripsi_galeri'];

    public function visits()
    {
        return visits($this);
    }

    public function setJudulGaleriAttribute($value)
    {
        $this->attributes['judul_galeri']  = $value;
        $this->attributes['slug_galeri']   = str_slug($value);
    }
}

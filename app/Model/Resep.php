<?php

namespace App\Model;

use Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'tabel_resep';

    protected $fillable = ['judul_resep', 'slug_resep', 'image_resep', 'deskripsi_resep', 'author', 'created_by'];

    public function visits()
    {
        return visits($this);
    }

    public function setJudulResepAttribute($value)
    {
        $this->attributes['judul_resep']  = $value;
        $this->attributes['slug_resep']   = str_slug($value);
    }
}

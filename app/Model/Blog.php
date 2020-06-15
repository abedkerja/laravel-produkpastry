<?php

namespace App\Model;

use Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "tabel_blog";

    protected $fillable = ['judul_blog', 'slug_blog', 'image_blog', 'deskripsi_blog', 'author', 'created_by'];

    public function visits()
    {
        return visits($this);
    }

    public function setJudulBlogAttribute($value)
    {
        $this->attributes['judul_blog']     = $value;
        $this->attributes['slug_blog']       = str_slug($value);
    }
}

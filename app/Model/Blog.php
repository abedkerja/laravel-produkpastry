<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "tabel_blog";

    protected $fillable = ['judul_blog', 'image_blog', 'deskripsi_blog', 'author', 'created_by'];
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = "tabel_testimonial";

    protected $fillable = ['nama_testi', 'image_testi', 'deskripsi_testi'];
}

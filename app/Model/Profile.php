<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "tabel_profile";

    protected $fillable = ["nama_usaha", "logo_usaha", "alamat", "nomor_hp", "nama_bank", "logo_bank",
                            "nama_rekening", "nomor_rekening", "deskripsi_profile"];

}

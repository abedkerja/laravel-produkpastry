<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class HubungiKami extends Model
{
    protected $table = 'tabel_hubungi-kami';

    protected $fillable = ['nama', 'alamat', 'nomor_hp', 'email', 'isi_pertanyaan'];
}

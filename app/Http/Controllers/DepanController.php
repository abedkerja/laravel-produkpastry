<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model;

class DepanController extends Controller
{
    public function __construct()
    {
        $this->data['produks']  = Model\Produk::orderBy('id')->get();
    }

    public function index()
    {
        return view ('frontend.dashboard', $this->data);
    }

    public function produklist()
    {
        # code...
    }

    public function produk($id)
    {
        # code...
    }
}

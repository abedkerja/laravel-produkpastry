<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model;

class DepanController extends Controller
{
    public function index()
    {
        return view ('frontend.dashboard');
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

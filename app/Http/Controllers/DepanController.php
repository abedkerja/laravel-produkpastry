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
        $this->data['produks']          = Model\Produk::orderBy('id')->get();
        $this->data['profiles']          = Model\Profile::orderBy('id')->get();
        $this->data['testimonials']  	= Model\Testimoni::orderBy('id')->get();
        $this->data['reseps']            = Model\Resep::orderBy('id')->get();
    }

    public function index()
    {
        $this->data['navbar']  = Model\Profile::orderBy('id')->get();
        return view ('frontend.dashboard', $this->data);
    }

    public function produklist()
    {
        $this->data['title'] = 'Produk Kami';
        $this->data['navbar']  = Model\Profile::orderBy('id')->get();
        $this->data['produklist'] = Model\Produk::orderBy('id','asc')->paginate(8);
        return view('frontend.produk.list', $this->data);
    }

    public function produk($id)
    {
        $this->data['title'] = 'Detail Product';
        $this->data['navbar']  = Model\Profile::orderBy('id')->get();
        $this->data['produkdetail'] = Model\Produk::find($id);
        return view('frontend.produk.detail', $this->data);
    }

    public function profile()
    {
        $this->data['title']    = 'Profile Kami';
        $this->data['profile']  = Model\Profile::get();
        $this->data['navbar']  = Model\Profile::orderBy('id')->get();
        return view('frontend.profile.index', $this->data);
    }

    public function resep()
    {
        $this->data['title']    = 'Daftar Blog';
        $this->data['navbar']  = Model\Profile::orderBy('id')->get();
        $this->data['resep']  = Model\Resep::get();
        return view('frontend.resep.index', $this->data);
    }

    public function testimonial()
    {
        $this->data['title']    = 'Daftar Blog';
        $this->data['navbar']  = Model\Profile::orderBy('id')->get();
        $this->data['testimonial']  = Model\Testimoni::get();
        return view('frontend.testimonial.index', $this->data);
    }
}

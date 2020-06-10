<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent;

// use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent;
use App\Model;
use Redis;

class DepanController extends Controller
{
    public function __construct()
    {
        $this->data['produks']              = Model\Produk::orderBy('id')->limit(12)->get();
        $this->data['profiles']             = Model\Profile::orderBy('id')->get();
        $this->data['testimonials']  	    = Model\Testimoni::orderBy('id')->get();
        $this->data['reseps']               = Model\Resep::orderBy('id')->get();
        $this->data['blogs']                = Model\Blog::orderBy('id')->get();
        $this->data['galeries']              = Model\Galeri::orderBy('id')->get();
        $this->data['hubungi-kami']          = Model\HubungiKami::orderBy('id')->get();
    }

    public function index()
    {
        return view ('frontend.dashboard', $this->data);
    }

    public function produklist()
    {
        $this->data['title'] = 'Produk Kami';
        $this->data['produklist'] = Model\Produk::orderBy('id','asc')->paginate(8);

        return view('frontend.produk.list', $this->data);
    }

    public function produkdetail($id)
    {
        $this->data['title'] = 'Detail Produk';

        $this->data['produkdetail'] = Model\Produk::find($id);
        
        // $this->data['produkvisits'] = Model\Produk::find($id);
        $this->data['sub_visits'] = Model\Produk::where('id', $id)->first();
        $this->data['sub_visits']->visits()->increment();
        $this->data['sub_visits']->visits()->count();

        $this->data['produklain'] = Model\Produk::where('id', '<>' , $id)->get();

        return view('frontend.produk.detail', $this->data);
    }

    // public function showSlug($id, $slug)
    // {
    //     $tampilkan = Model\Produk::where('slug_produk', $slug)->first();
    //     dd($tampilkan);
    //     return view('frontend.produk.detail')->with('tampilkan', $tampilkan);
    // }

    public function profile()
    {
        $this->data['title']    = 'Profile Kami';
        $this->data['profile']  = Model\Profile::orderBy('id')->get();

        return view('frontend.profile.index', $this->data);
    }

    public function reseplist()
    {
        $this->data['title']    = 'Daftar Resep';
        $this->data['resep']    = Model\Resep::where('status', 'PUBLISH')->orderBy('id','asc')->get();

        return view('frontend.resep.list', $this->data);
    }

    public function resepdetail($id)
    {
        $this->data['title'] = 'Detail Resep';
        $this->data['resepdetail'] = Model\Resep::find($id);
        
        return view('frontend.resep.detail', $this->data);
    }

    public function blog()
    {
        $this->data['title']    = 'Daftar Blog';
        return view('frontend.blog.index', $this->data);
    }

    public function galeri()
    {
        $this->data['title']    = 'Daftar Galeri';
        return view('frontend.galeri.index', $this->data);
    }

    public function testimonial()
    {
        $this->data['title']    = 'Daftar Testimoni';
        return view('frontend.testimonial.index', $this->data);
    }

    public function hubungi_kami()
    {
        $this->data['title']    = 'Hubungi Kami';
        return view('frontend.hubungi-kami.index', $this->data);
    }

    public function hubungikami_store(Request $request)
    {
        \Validator::make($request->all(), [
            "nama"              => 'required',
            'alamat'            => 'required',
            "nomor_hp"          => 'required|numeric|digits_between:8,13',
            'email'             => 'required|email',
            "isi_pertanyaan"    => 'required'
        ])->validate();

        $new_hubungikami                        = new Model\HubungiKami();
        $new_hubungikami->nama                  = $request->get('nama');
        $new_hubungikami->alamat                = $request->get('alamat');
        $new_hubungikami->nomor_hp              = $request->get('nomor_hp');
        $new_hubungikami->email                 = $request->get('email');
        $new_hubungikami->isi_pertanyaan        = $request->get('isi_pertanyaan');
        $new_hubungikami->save();
        
        // Alert::success('Data Anda Berhasil Ditambahkan!')->html()->persistent("OKE");

        return redirect()->route('hubungi-kami')->with('message', 'Data Anda telah Kami Rekap, Mohon menunggu follow up dari Kami');
    }
}

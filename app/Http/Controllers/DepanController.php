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
        $this->data['produks']               = Model\Produk::orderBy('id')->limit(12)->get();
        $this->data['profiles']              = Model\Profile::orderBy('id')->get();
        $this->data['testimonials']  	     = Model\Testimoni::orderBy('id')->get();
        $this->data['reseps']                = Model\Resep::orderBy('id')->get();
        $this->data['blogs']                 = Model\Blog::orderBy('id')->get();
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

    public function produkdetail($slug)
    {
        $this->data['title'] = 'Detail Produk';

        $this->data['produkdetail'] = Model\Produk::where('slug_produk', $slug)->first();
        
        // $produkvisits = Model\Produk::find($id);
        // $this->data['produkvisits'] = Model\Produk::where('id', $id)->first();
        // dd($produkvisits);
        $this->data['produkdetail']->visits()->increment();
        $this->data['produkdetail']->visits()->count();

        $this->data['produklain'] = Model\Produk::where('slug_produk', '<>' , $slug)->limit(4)->get();

        return view('frontend.produk.detail', $this->data);
    }

    // public function show($slugproduk)
    // {
    //     $this->data['title'] = 'Detail Produk';

    //     $this->data['produkdetail'] = Model\Produk::where('slug_produk', $slugproduk)->first();
    //     dd($this->data['produkdetail']);

    //     $produkvisits = Model\Produk::find($slugproduk);
    //     $this->data['produkvisits'] = Model\Produk::where('slug_produk', $slugproduk)->first();
    //     $this->data['produkvisits']->visits()->increment();
    //     $this->data['produkvisits']->visits()->count();
    //     dd($produkvisits);
    //     $this->data['produklain'] = Model\Produk::where('id', '<>' , $id)->get();

    //     $this->data['tampilkan'] = Model\Produk::where('slug_produk', $slugproduk)->first();
    //     return view('frontend.produk.detail')->with($this->data);
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
        $this->data['resep']    =  Model\Resep::where('status', 'PUBLISH')->orderBy('id','asc')->get();

        return view('frontend.resep.list', $this->data);
    }

    public function resepdetail($slug)
    {
        $this->data['title'] = 'Detail Resep';

        $this->data['resepdetail'] = Model\Resep::where('slug_resep', $slug)->first();
        
        // $produkvisits = Model\Produk::find($id);
        // $this->data['produkvisits'] = Model\Produk::where('id', $id)->first();
        // dd($produkvisits);
        $this->data['resepdetail']->visits()->increment();
        $this->data['resepdetail']->visits()->count();

        // $this->data['reseplain'] = Model\Resep::where('slug_resep', '<>' , $slug)->limit(4)->get();

        // $this->data['resepdetail'] = Model\Resep::find($id);
        
        return view('frontend.resep.detail', $this->data);
    }

    public function blog()
    {
        $this->data['title']    = 'Daftar Blog';
        $this->data['blog']    =  Model\Blog::where('status', 'PUBLISH')->orderBy('id','asc')->get();
        return view('frontend.blog.index', $this->data);
    }

    public function blogdetail($slug)
    {
        $this->data['title'] = 'Detail Blog';

        $this->data['blogdetail'] = Model\Blog::where('slug_blog', $slug)->first();
        
        $this->data['blogdetail']->visits()->increment();
        $this->data['blogdetail']->visits()->count();

        // $this->data['bloglain'] = Model\Blog::where('slug_blog', '<>' , $slug)->limit(4)->get();

        return view('frontend.blog.detail', $this->data);
    }

    public function galeri()
    {
        $this->data['title']    = 'Daftar Galeri';
        $this->data['galeri']    = Model\Galeri::where('status', 'PUBLISH')->orderBy('id','asc')->get();

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

<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Testimoni;
use App\Model\Produk;

use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class TestimonialCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        // $this->data['produk'] = Produk::orderBy(['id','asc'])->get();

        if ($request->ajax()) {
            $testimonials = Testimoni::select(['id', 'nama_testi', 'image_testi', 'deskripsi_testi']);
            // $stoks = Stock::select('id, tabel_stock.produk_id as produk, tabel_stock.jumlah_stok as stok')->from(tabel_produk)->join('tabel_produk', 'tabel_stock.nama = tabel_produk.nama_produk');
            // dd($stoks);
            // $produk = Produk::orderBy(['id','asc'])->get();
                return DataTables::of($testimonials)
                ->addColumn('action', function($testimonials){
                    return view('backend.testimonial._action', [
                        'model' => $testimonials,
                        'form_url' => route('testimonial.destroy', $testimonials->id),
                        'edit_url' => route('testimonial.edit', $testimonials->id)]);
                })
                ->addColumn('deskripsi_testi', function($testimonials){
                    return strip_tags($testimonials->deskripsi_testi);
                })->make(true);
        }

        // dd($produk);

        $html = $htmlBuilder
        ->addColumn(['data'=>'nama_testi', 'name'=>'nama_testi', 'title'=>'Testimoni Dari'])
        // ->addColumn(['data'=> 'nama_produk', 'name'=>'nama_produk', 'title'=>'Nama Produk'])
        ->addColumn(['data'=>'image_testi', 'name'=>'image_testi', 'title'=>'Gambar Pentestimoni'])
        ->addColumn(['data'=>'deskripsi_testi', 'name'=>'deskripsi_testi', 'title'=>'Deskripsi Testimoni'])
        ->addColumn(['data' => 'action', 'name'=>'action','title' =>'Aksi', 'orderable'=>false, 'searchable'=>false]);

        return view('backend.testimonial.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->data['produk'] = Produk::orderBy('id','asc')->get();
        // dd($this->data['produk']);
        // $this->data['produk'] = Produk::SelectBox();
        // dd($this->data['produk']);

        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "nama_testi"        => 'required',
            'image_testi'       => 'required',
            "deskripsi_testi"   => "required|min:20|max:10000"
        ])->validate();

        $new_testi                      = new \App\Model\Testimoni;
        $new_testi->nama_testi          = $request->get('nama_testi');

        $image_testi = $request->file('image_testi');

        if ($image_testi) {
            $image_path = $image_testi->store('image-testi', 'public');

            $new_testi->image_testi = $image_path;
        }

        $new_testi->deskripsi_testi         = $request->get('deskripsi_testi');
        $new_testi->save();

        return redirect()->route('testimonial.index')->with('status', 'Testimonial Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonials = Testimoni::findOrFail($id);
        return view('backend.testimonial.edit', ['testimonials'=> $testimonials]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(), [
            "nama_testi"        => 'required|min:3|max:100',
            "deskripsi_testi"   => "required|min:20|max:10000"
        ])->validate();

        $update_testi             = \App\Model\Testimoni::findOrFail($id);

        $update_testi->nama_testi      = $request->get('nama_testi');
        $update_testi->deskripsi_testi    = $request->get('deskripsi_testi');

        if($request->file('image_testi')){
            if ($update_resep->image_testi && file_exists(storage_path('app/public/' . $update_testi->image_testi))) {
                \Storage::delete('public/' . $update_testi->image_testi);
            }
            $file = $request->file('image_testi')->store('image-testi', 'public');
            $update_testi->image_testi = $file;
        }

        $update_testi->save();

        return redirect()->route('testimonial.index', $update_testi->id)->with('status', 'Testimoni Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials = Testimoni::findOrFail($id);
        $testimonials->delete();
        return redirect()->route('testimonial.index')->with('status', 'Data stock berhasil dihapus');
    }
}

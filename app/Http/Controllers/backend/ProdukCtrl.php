<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Crypt;

use App\Http\Requests\reqProduk;

use App\Http\Controllers\Controller;
use App\Model\Produk;

use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

use DB;

class ProdukCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $produks = Produk::select(['id','nama_produk','image','harga','description']);
                return DataTables::of($produks)
                ->addColumn('action', function($produks){
                    return view('backend.produk._action', [
                        'model'         => $produks,
                        'form_url'    => route('produk.destroy', $produks->id),
                        'edit_url'      => route('produk.edit', $produks->id)]);
                })
                ->addColumn('description', function($produks){
                    return strip_tags($produks->description);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data'=>'nama_produk', 'name'=>'nama_produk', 'title'=>'Nama Produk'])
            ->addColumn(['data'=>'image', 'name'=>'image', 'title'=>'Gambar Produk'])
            ->addColumn(['data'=>'harga', 'name'=>'harga', 'title'=>'Harga Produk'])
            ->addColumn(['data'=>'description', 'name'=>'description', 'title'=>'Deskripsi Produk'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);
        
        return view('backend.produk.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(reqProduk $request)
    {
        $new_produk                 = new Produk();
        $new_produk->nama_produk    = $request->get('nama_produk');
        // Nama Produk kita jadikan slug
        // $new_produk->slug_produk = Str::slug($request->get('nama_produk'));

        // $encrypted = Crypt::encryptString($new_produk->slug_produk);
        // $decrypted = Crypt::decryptString($encrypted);

        // dd($encrypted);
        // dd($decrypted);
        
        // echo "Hasil Enkripsi : " . $encrypted;
		// echo "<br/>";
		// echo "<br/>";
		// echo "Hasil Dekripsi : " . $decrypted;
        
        $image = $request->file('image');

        if ($image) {
            $image_path = $image->store('image-produk', 'public');

            $new_produk->image = $image_path;
        }

        $new_produk->harga          = $request->get('harga');
        $new_produk->description    = $request->get('description');

        $new_produk->save();
        return redirect()->route('produk.index')->with('status', 'Produk Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampilkan = Produk::where('slug_produk', $slug)->first();
        dd($tampilkan);
        return view('frontend.produk.detail')->with('tampilkan', $tampilkan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('backend.produk.edit', ['produk' => $produk]);
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
            "nama_produk"           => "required|min:3|max:100",
            "harga"                 => "required|numeric",
            "description"           => "required|min:20|max:1000"
        ])->validate();

        $update_produk = Produk::findOrFail($id);

        $update_produk->nama_produk = $request->get('nama_produk');
        $update_produk->harga = $request->get('harga');
        $update_produk->description = $request->get('description');

        if($request->file('image')){
            if ($update_produk->image && file_exists(storage_path('app/public/' . $update_produk->image))) {
                \Storage::delete('public/' . $update_produk->image);
            }
            $file = $request->file('image')->store('image-produk', 'public');
            $update_produk->image = $file;
        }

        $update_produk->save();

        return redirect()->route('produk.edit', $update_produk->id)->with('status', 'Data Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('status', 'Data produk berhasil dihapus');
    }
}

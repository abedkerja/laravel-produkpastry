<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\reqGaleri;

use App\Model\Galeri;

use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

// use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
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
            $galeries = Galeri::select(['id', 'judul_galeri', 'image_galeri', 'status' ,'views','deskripsi_galeri']);
                return DataTables::of($galeries)
                ->addColumn('action', function($galeries){
                    return view('backend.galeri._action', [
                        'model' => $galeries,
                        'form_url' => route('galeri.destroy', $galeries->id),
                        'edit_url' => route('galeri.edit', $galeries->id)]);
                })
                ->addColumn('deskripsi_galeri', function($galeries){
                    return strip_tags($galeries->deskripsi_galeri);
                })
                // ->addColumn('PUBLISH', function ($galeries){
                //     return ;
            ->make(true);
        }

        // dd($produk);

        $html = $htmlBuilder
        ->addColumn(['data'=>'judul_galeri', 'name'=>'judul_galeri', 'title'=>'Judul Gambar'])
        ->addColumn(['data'=>'image_galeri', 'name'=>'image_galeri', 'title'=>'Gambar'])
        // ->addColumn(['data'=>'views', 'name'=>'views', 'title'=>'Jumlah Dilihat'])
        ->addColumn(['data'=>'status', 'name'=>'status', 'title'=>'Status Publish'])
        ->addColumn(['data'=>'deskripsi_galeri', 'name'=>'deskripsi_galeri', 'title'=>'Deskripsi Galeri'])
        ->addColumn(['data' => 'action', 'name'=>'action','title' =>'Aksi', 'orderable'=>false, 'searchable'=>false]);

        return view('backend.galeri.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(reqGaleri $request)
    {
        // \Validator::make($request->all(), [
        //     "judul_galeri"        => 'required',
        //     'image_galeri'       => "required|mimes:jpg,jpeg,png|max:4000",
        //     "deskripsi_galeri"   => "required|min:20|max:10000"
        // ])->validate();

        $new_galeri                             = new \App\Model\Galeri;
        $new_galeri->judul_galeri               = $request->get('judul_galeri');

        $image_galeri = $request->file('image_galeri');

        if ($image_galeri) {
            $image_path = $image_galeri->store('image-galeri', 'public');

            // $image_path = \Storage::putFileAs('image-galeri', new File('/public'));

            $new_galeri->image_galeri = $image_path;
        }

        $new_galeri->deskripsi_galeri     = $request->get('deskripsi_galeri');
        $new_galeri->status               = $request->get('save_action');
        $new_galeri->save();

        if ($request->get('save_action') == 'PUBLISH'){
            return redirect()->route('galeri.create')->with('status', 'Galeri Berhasil disimpan dan dipublikasikan');
        } else  {
            return redirect()->route('galeri.create')->with('status', 'Galeri disimpan sebagai Draft');
        }  

        return redirect()->route('galeri.index')->with('status', 'Galeri Berhasil ditambahkan');
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
        $galeries = Galeri::findOrFail($id);
        return view('backend.galeri.edit', ['galeries'=> $galeries]); 
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
            "judul_galeri"              => 'required|min:3|max:100',
            "deskripsi_galeri"          => "required|min:20|max:10000"
        ])->validate();

        $update_galeri                          = \App\Model\Galeri::findOrFail($id);

        $update_galeri->judul_galeri            = $request->get('judul_galeri');
        $update_galeri->deskripsi_galeri        = $request->get('deskripsi_galeri');

        if($request->file('image_galeri')){
            if ($update_galeri->image_galeri && file_exists(storage_path('app/public/' . $update_galeri->image_galeri))) {
                \Storage::delete('public/' . $update_galeri->image_galeri);
            }
            $file = $request->file('image_galeri')->store('image-galeri', 'public');
            $update_galeri->image_galeri = $file;
        }

        $update_galeri->status   = $request->get('status');

        $update_galeri->save();

        return redirect()->route('galeri.edit', $update_galeri->id)->with('status', 'Galeri Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeries = Galeri::findOrFail($id);
        $galeries->delete();
        return redirect()->route('galeri.index')->with('status', 'Data Galeri Berhasil Dihapus');
    }
}

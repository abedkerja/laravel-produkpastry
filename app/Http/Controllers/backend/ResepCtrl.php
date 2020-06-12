<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Resep;
use Illuminate\Validation\Rule;

use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class ResepCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $reseps = Resep::select(['id','judul_resep','image_resep','status','deskripsi_resep', 
            'author', 'created_by']);
                return DataTables::of($reseps)
                ->addColumn('action', function($reseps){
                    return view('backend.resep._action', [
                        'model'         => $reseps,
                        'form_url'      => route('resep.destroy', $reseps->id),
                        'edit_url'      => route('resep.edit', $reseps->id)]);
                })
                ->addColumn('deskripsi_resep', function($reseps){
                    return strip_tags($reseps->deskripsi_resep);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data'=>'judul_resep', 'name'=>'judul_resep', 'title'=>'Judul'])
            ->addColumn(['data'=>'image_resep', 'name'=>'image_resep', 'title'=>'Gambar'])
            ->addColumn(['data'=>'status', 'name'=>'status', 'title'=>'Status'])
            // ->addColumn(['data'=>'deskripsi_blog', 'name'=>'deskripsi_blog', 'title'=>'Deskripsi'])
            ->addColumn(['data'=> 'author', 'name'=>'author', 'title'=> 'Author'])
            ->addColumn(['data'=> 'created_by', 'name'=>'created_by', 'title'=> 'Created By'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);

            // $status = $request->get('status');

            // if($status){
            //     $books = Blog::where('status', strtoupper($status));
            // } else {
            //     $books = Blog::paginate(10);    
            // }

        return view('backend.resep.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resep.create');
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
            "judul_resep"        => "required|min:3|max:1000",
            "image_resep"        => "required",
            "author"            => "required",
            "deskripsi_resep"    => "required|min:20|max:10000"
        ])->validate();

        $new_resep                 = new \App\Model\Resep;
        $new_resep->judul_resep    = $request->get('judul_resep');

        $image_resep = $request->file('image_resep');

        if ($image_resep) {
            $image_path = $image_resep->store('image-resep', 'public');

            $new_resep->image_resep = $image_path;
        }

        $new_resep->author               = $request->get('author');
        $new_resep->deskripsi_resep       = $request->get('deskripsi_resep');

        $new_resep->created_by           = \Auth::user()->name;
        $new_resep->status               = $request->get('save_action');
        $new_resep->save();

        if ($request->get('save_action') == 'PUBLISH'){
            return redirect()->route('resep.create')->with('status', 'Resep Berhasil disimpan dan dipublikasikan');
        } else  {
            return redirect()->route('resep.create')->with('status', 'Resep disimpan sebagai Draft');
        }  

        return redirect()->route('resep.index')->with('status', 'Resep Berhasil ditambahkan');
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
        $resep = Resep::findOrFail($id);
        return view('backend.resep.edit', ['resep' => $resep]);
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
            "judul_resep"            => "required|min:3|max:100",
            "author"                => "required",
            "deskripsi_resep"           => "required|min:20|max:1000"
        ])->validate();

        $update_resep = \App\Model\Resep::findOrFail($id);

        $update_resep->judul_resep = $request->get('judul_resep');
        $update_resep->author = $request->get('author');
        $update_resep->deskripsi_resep = $request->get('deskripsi_resep');

        if($request->file('image_resep')){
            if ($update_resep->image_resep && file_exists(storage_path('app/public/' . $update_resep->image_resep))) {
                \Storage::delete('public/' . $update_resep->image_resep);
            }
            $file = $request->file('image_resep')->store('image-resep', 'public');
            $update_resep->image_resep = $file;
        }

        $update_resep->status   = $request->get('status');
        // $book->status = $request->get('status');

        $update_resep->save();

        return redirect()->route('resep.edit', $update_resep->id)->with('status', 'Data Resep berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resep   = Resep::findOrFail($id);
        $resep->delete();
        return redirect()->route('resep.index')->with('status', 'Data Resep berhasil dihapus');
    }
}

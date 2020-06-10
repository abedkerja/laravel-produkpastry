<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\HubungiKami;

use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class HubungiKamiCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $hubungikami = HubungiKami::select(['id', 'nama', 'alamat', 'nomor_hp','email','isi_pertanyaan']);
                return DataTables::of($hubungikami)
                ->addColumn('action', function($hubungikami){
                    return view('backend.hubungi-kami._action', [
                        'model' => $hubungikami,
                        'form_url' => route('hubungi-kami.destroy', $hubungikami->id)]);
                        // 'edit_url' => route('hubungi-kami.edit', $hubungikami->id)]);
                })->make(true);
                // ->addColumn('isi_pertanyaan', function($hubungikami){
                //     return strip_tags($hubungikami->isi_pertanyaan);
                // })
        }

        $html = $htmlBuilder
        ->addColumn(['data'=>'nama', 'name'=>'nama', 'title'=>'Nama Pengguna'])
        ->addColumn(['data'=>'alamat', 'name'=>'alamat', 'title'=>'Alamat Pengguna'])
        ->addColumn(['data'=>'nomor_hp', 'name'=>'nomor_hp', 'title'=>'Nomor HP'])
        ->addColumn(['data'=>'email', 'name'=>'email', 'title'=>'Email Pengguna'])
        ->addColumn(['data'=>'isi_pertanyaan', 'name'=>'isi_pertanyaan', 'title'=>'Pertanyaan Pengguna'])
        ->addColumn(['data' => 'action', 'name'=>'action','title' =>'Aksi', 'orderable'=>false, 'searchable'=>false]);

        return view('backend.hubungi-kami.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ora Perlu
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // \Validator::make($request->all(), [
        //     "nama"              => 'required',
        //     'alamat'            => 'required',
        //     "nomor_hp"          => 'required|numeric|digits_between:8,13',
        //     'email'             => 'required|email',
        //     "isi_pertanyaan"    => 'required'
        // ])->validate();

        // $new_hubungikami                        = new HubungiKami();
        // $new_hubungikami->nama                  = $request->get('nama');
        // $new_hubungikami->alamat                = $request->get('alamat');
        // $new_hubungikami->nomor_hp              = $request->get('nomor_hp');
        // $new_hubungikami->email                 = $request->get('email');
        // $new_hubungikami->isi_pertanyaan        = $request->get('isi_pertanyaan');
        // $new_hubungikami->save();
        
        // Alert::success('Data Anda Berhasil Ditambahkan!')->html()->persistent("OKE");

        // return redirect()->route('hubungi-kami')->with('message', 'Data Anda telah Kami Rekap, Mohon menunggu follow up dari Kami');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Perlu
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Ora Perlu
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
        // Ora Perlu
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Perlu
    }
}

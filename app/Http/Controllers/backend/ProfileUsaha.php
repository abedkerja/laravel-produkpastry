<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Profile;

use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class ProfileUsaha extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $profiles = Profile::select(['id','nama_usaha','logo_usaha','alamat','nomor_hp',
            'deskripsi_profile']);
                return DataTables::of($profiles)
                ->addColumn('action', function($profiles){
                    return view('backend.profile._action', [
                        'model'         => $profiles,
                        'form_url'      => route('profile.destroy', $profiles->id),
                        'edit_url'      => route('profile.edit', $profiles->id)]);
                })
                ->addColumn('deskripsi_profile', function($profiles){
                    return strip_tags($profiles->deskripsi_profile);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data'=>'nama_usaha', 'name'=>'nama_usaha', 'title'=>'Nama Usaha'])
            // ->addColumn(['data'=>'logo_usaha', 'name'=>'logo_usaha', 'title'=>'Logo Usaha'])
            ->addColumn(['data'=>'alamat', 'name'=>'alamat', 'title'=>'Alamat'])
            ->addColumn(['data'=>'nomor_hp', 'name'=>'nomor_hp', 'title'=>'Nomor HP'])
            // ->addColumn(['data'=> 'nama_bank', 'name'=>'nama_bank', 'title'=> 'Nama Bank'])
            // ->addColumn(['data'=> 'logo_bank', 'name'=>'logo_bank', 'title'=> 'Logo Bank'])
            // ->addColumn(['data'=> 'nama_rekening', 'name'=>'nama_rekening', 'title'=> 'Nama Rekening'])
            // ->addColumn(['data'=> 'nomor_rekening', 'name'=>'nomor_rekening', 'title'=> 'Nomor Rekening'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);

        return view('backend.profile.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.profile.create');
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
            "nama_usaha"            => "required|min:3|max:25",
            "logo_usaha"            => "required|mimes:jpg,jpeg,png|max:2000",
            "alamat"                => "required|min:3|max:250",
            "nomor_hp"              => "required|numeric|min:10",
            "deskripsi_profile"     => "required|min:20|max:10000"
        ])->validate();

        $new_profile                 = new \App\Model\Profile;
        $new_profile->nama_usaha     = $request->get('nama_usaha');

        $logo_usaha = $request->file('logo_usaha');

        if ($logo_usaha) {
            $logo_usaha_path = $logo_usaha->store('logo-usaha', 'public');

            $new_profile->logo_usaha = $logo_usaha_path;
        }

        $new_profile->alamat                = $request->get('alamat');
        $new_profile->nomor_hp              = $request->get('nomor_hp');

        $logo_bank_1 = $request->file('logo_bank_1');
        $logo_bank_2 = $request->file('logo_bank_2');
        $logo_bank_3 = $request->file('logo_bank_3');

        if ($logo_bank_1) {
            $logo_bank_path_1 = $logo_bank_1->store('logo-bank-1', 'public');

            $new_profile->logo_bank_1 = $logo_bank_path_1;
        }

        if ($logo_bank_2) {
            $logo_bank_path_2 = $logo_bank_2->store('logo-bank-2', 'public');
            
            $new_profile->logo_bank_2 = $logo_bank_path_2;
        }

        if ($logo_bank_3) {
            $logo_bank_path_3 = $logo_bank_3->store('logo-bank-3', 'public');
            
            $new_profile->logo_bank_3 = $logo_bank_path_3;
        }

        $new_profile->nama_bank_1               = $request->get('nama_bank_1');
        $new_profile->nama_bank_2               = $request->get('nama_bank_2');
        $new_profile->nama_bank_3               = $request->get('nama_bank_3');

        $new_profile->nama_rekening_bank_1      = $request->get('nama_rekening_bank_1');
        $new_profile->nomor_rekening_bank_1     = $request->get('nomor_rekening_bank_1');
        $new_profile->nama_rekening_bank_2      = $request->get('nama_rekening_bank_2');
        $new_profile->nomor_rekening_bank_2     = $request->get('nomor_rekening_bank_2');
        $new_profile->nama_rekening_bank_3      = $request->get('nama_rekening_bank_3');
        $new_profile->nomor_rekening_bank_3     = $request->get('nomor_rekening_bank_3');
        
        $new_profile->deskripsi_profile         = $request->get('deskripsi_profile');

        $new_profile->save();
        return redirect()->route('profile.index')->with('status', 'Profile Berhasil ditambahkan');
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
        $profile = Profile::findOrFail($id);
        return view('backend.profile.edit', ['profile' => $profile]);
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
            "nama_usaha"            => "required|min:3|max:100",
            "alamat"                => "required|min:3|max:250",
            "nomor_hp"              => "required|numeric|min:10",
            // "nama_bank"             => "required|min:3|max:25",
            // "nama_rekening"         => "required|min:3|max:25",
            // "nomor_rekening"        => "required|numeric|min:5",
            "deskripsi_profile"     => "required|min:20|max:10000"
        ])->validate();

        $update_profile = \App\Model\Profile::findOrFail($id);

        $update_profile->nama_usaha = $request->get('nama_usaha');
        $update_profile->alamat = $request->get('alamat');
        $update_profile->nomor_hp = $request->get('nomor_hp');

        $update_profile->nama_bank_1 = $request->get('nama_bank_1');
        $update_profile->nama_bank_2 = $request->get('nama_bank_2');
        $update_profile->nama_bank_3 = $request->get('nama_bank_3');

        $update_profile->nama_rekening_bank_1 = $request->get('nama_rekening_bank_1');
        $update_profile->nama_rekening_bank_2 = $request->get('nama_rekening_bank_2');
        $update_profile->nama_rekening_bank_3 = $request->get('nama_rekening_bank_3');

        $update_profile->nomor_rekening_bank_1 = $request->get('nomor_rekening_bank_1');
        $update_profile->nomor_rekening_bank_2 = $request->get('nomor_rekening_bank_2');
        $update_profile->nomor_rekening_bank_3 = $request->get('nomor_rekening_bank_3');

        $update_profile->deskripsi_profile = $request->get('deskripsi_profile');

        if($request->file('logo_usaha')){
            if ($update_profile->logo_usaha && file_exists(storage_path('app/public/' . $update_profile->logo_usaha))) {
                \Storage::delete('public/' . $update_profile->logo_usaha);
            }
            $file = $request->file('logo_usaha')->store('logo-usaha', 'public');
            $update_profile->logo_usaha = $file;
        }

        if($request->file('logo_bank_1')){
            if ($update_profile->logo_bank_1 && file_exists(storage_path('app/public/' . $update_profile->logo_bank_1))) {
                \Storage::delete('public/' . $update_profile->logo_bank_1);
            }
            $file = $request->file('logo_bank_1')->store('logo-bank-1', 'public');
            $update_profile->logo_bank_1 = $file;
        }

        if($request->file('logo_bank_2')){
            if ($update_profile->logo_bank_2 && file_exists(storage_path('app/public/' . $update_profile->logo_bank_2))) {
                \Storage::delete('public/' . $update_profile->logo_bank_2);
            }
            $file = $request->file('logo_bank_2')->store('logo-bank-2', 'public');
            $update_profile->logo_bank_2 = $file;
        }

        if($request->file('logo_bank_3')){
            if ($update_profile->logo_bank_3 && file_exists(storage_path('app/public/' . $update_profile->logo_bank_3))) {
                \Storage::delete('public/' . $update_profile->logo_bank_3);
            }
            $file = $request->file('logo_bank_3')->store('logo-bank-3', 'public');
            $update_profile->logo_bank_3 = $file;
        }

        $update_profile->save();

        return redirect()->route('profile.edit', $update_profile->id)->with('status', 'Data Profile berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return redirect()->route('profile.index')->with('status', 'Data Profile berhasil dihapus');
    }
}

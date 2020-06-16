<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Model\Produk;
use App\Model\Testimoni;
use App\Model\Resep;
use App\Model\Profile;
use App\Model\Galeri;
use App\Model\Blog;
use App\Model\HubungiKami;

class DashboardCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['title']            = 'Dashboard';
        $this->data['produk']           = Produk::count();
        $this->data['testimoni']        = Testimoni::count();
        $this->data['resep']            = Resep::count();
        $this->data['profile']          = Profile::count();
        $this->data['galeri']           = Galeri::count();
        $this->data['blog']             = Blog::count();
        $this->data['hubungikami']      = HubungiKami::count();

        // Perhitungan Jumlah Pengunjung Per Hari
        $this->data['VisitsDayProduk']       = visits('App\Model\Produk')->period('day')->count();
        $this->data['VisitsDayResep']        = visits('App\Model\Resep')->period('day')->count();
        $this->data['VisitsDayBlog']         = visits('App\Model\Blog')->period('day')->count();
        $this->data['VisitsDayGaleri']         = visits('App\Model\Galeri')->period('day')->count();

        // Perhitungan Jumlah Pengunjung Per Minggu
        $this->data['VisitsWeekProduk']       = visits('App\Model\Produk')->period('week')->count();
        $this->data['VisitsWeekResep']        = visits('App\Model\Resep')->period('week')->count();
        $this->data['VisitsWeekBlog']         = visits('App\Model\Blog')->period('week')->count();
        $this->data['VisitsWeekGaleri']         = visits('App\Model\Galeri')->period('week')->count();

        // Perhitungan Jumlah Pengunjung Per Bulan
        $this->data['VisitsMonthProduk']       = visits('App\Model\Produk')->period('month')->count();
        $this->data['VisitsMonthResep']        = visits('App\Model\Resep')->period('month')->count();
        $this->data['VisitsMonthBlog']         = visits('App\Model\Blog')->period('month')->count();
        $this->data['VisitsMonthGaleri']         = visits('App\Model\Galeri')->period('month')->count();

        return view('backend.dashboard', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\detail_peminjaman;
use App\Http\Requests\Storedetail_peminjamanRequest;
use App\Http\Requests\Updatedetail_peminjamanRequest;

class DetailPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storedetail_peminjamanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetail_peminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_peminjaman  $detail_peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(detail_peminjaman $detail_peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail_peminjaman  $detail_peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_peminjaman $detail_peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetail_peminjamanRequest  $request
     * @param  \App\Models\detail_peminjaman  $detail_peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetail_peminjamanRequest $request, detail_peminjaman $detail_peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_peminjaman  $detail_peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_peminjaman $detail_peminjaman)
    {
        //
    }
}

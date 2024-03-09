<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kota;
use App\Http\Requests\StorekotaRequest;
use App\Http\Requests\UpdatekotaRequest;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kota', [
            "title" => 'kota',
            "data" => kota::all(),
            "lokasi" => 'Kota'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        kota::create($request->all());
        return redirect('/kota')->with('success', 'Sebuah negara telah ditambahkan!');
    }  

    /**
     * Display the specified resource.
     */
    public function show(kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kota $kota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekotaRequest $request, kota $kota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kota $kota)
    {
        //
    }
}
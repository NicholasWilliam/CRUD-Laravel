<?php

namespace App\Http\Controllers;

use App\Models\negara;
use App\Http\Requests\StorenegaraRequest;
use App\Http\Requests\UpdatenegaraRequest;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('negara', [
            "title" => 'negara',
            "data" => negara::all(),
            "lokasi" => 'Negara'
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
        $validatedData = $request->validate([
            'nama_negara' => 'required|unique:negaras',
            'deskripsi_negara' => 'required|max:255',
            'kodewarna_negara' => 'required',
            'gambar_negara' => 'required|image'
        ]);


        negara::create($validatedData);
        return redirect('/negara')->with('success', 'Sebuah negara telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(negara $negara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(negara $negara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenegaraRequest $request, $id)
    {
        $update = negara::findOrFail($id);
        $update->nama_negara = $request->nama_negara;
        $update->deskripsi_negara = $request->deskripsi_negara;
        $update->kodewarna_negara = $request->kodewarna_negara;
        $update->gambar_negara = $request->gambar_negara;
        $update->save();
        return redirect('/negara')->with('success', 'Sebuah negara telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(negara $negara)
    {
        $negara->delete();
        return redirect('/negara')->with('success', 'Sebuah negara telah dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\univ;
use App\Http\Requests\StoreunivRequest;
use App\Http\Requests\UpdateunivRequest;

class UnivController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/univ', [
            "title" => 'universitas',
            "data" => univ::all(),
            "lokasi" => 'Universitas'
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
    public function store(StoreunivRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(univ $univ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(univ $univ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateunivRequest $request, univ $univ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(univ $univ)
    {
        //
    }
}

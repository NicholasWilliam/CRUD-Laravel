<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class metronicController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'default',
            'lokasi' => 'default'
        ]);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kota;
use App\Models\univ;

class negara extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kota(){
        return $this->hasMany(kota::class);
    }

    public function universitas(){
        return $this->hasMany(univ::class);
    }
}
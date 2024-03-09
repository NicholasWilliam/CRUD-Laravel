<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\negara;
use App\Models\univ;

class kota extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    
    public function kota(){
        return $this->hasMany(univ::class);
    }

    public function negara(){
        return $this->belongsTo(negara::class);
    }
}
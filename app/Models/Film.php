<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany("App\Models\Comment")->get();

    }

    public function categorie()
    {
        return $this->belongTo("App\Models\Categorie")->first();

    }

}
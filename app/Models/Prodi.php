<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{


    protected $fillable = [
        "fakultas_id",
        "nama_prodi",
        "nama_kaprodi",
        "alias_prodi",
        "photo_kaprodi"
    ];
}

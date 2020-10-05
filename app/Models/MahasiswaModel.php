<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";

    protected $fillable = [
        "NIM",
        "NM_Mhs"
    ];
}

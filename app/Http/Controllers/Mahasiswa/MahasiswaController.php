<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        return response()->json(MahasiswaModel::get(), 200);
    }
}

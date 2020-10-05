<?php

namespace App\Http\Controllers\Fauna;

use App\Http\Controllers\Controller;
use App\Models\FaunaModel;
use Illuminate\Http\Request;

class FaunaController extends Controller
{
    public function fauna(){
        return response()->json(FaunaModel::get(), 200);
    }
}

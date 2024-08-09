<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilApiController extends Controller
{
    public function get()
    {
        $mobil = Mobil::all();
        return response()->json($mobil);
    }
}

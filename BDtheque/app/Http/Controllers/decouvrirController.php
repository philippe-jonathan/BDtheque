<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Picture;

class decouvrirController extends Controller
{
    public function show ()
    {
        $bd = Home::all();
        $bd2 = Picture::all();
        return view('decouvrir', 
        [
            'bd' => $bd,
            'bd2' => $bd2
        ]);
    }

}

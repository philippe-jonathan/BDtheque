<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Picture;

class infoBdController extends Controller
{
    public function show()
    {
        $bd = Home::all();
        $bd2 = Picture::all();
        return view('infoBd', 
        [
            'bd' => $bd,
            'bd2' => $bd2
        ]);
    }
}

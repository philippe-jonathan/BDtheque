<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Picture;

class mesBdController extends Controller
{
    public function show()
    {
        $bd = Home::all();
        $bd2 = Picture::all();
        return view('mesBd', 
        [
            'bd' => $bd,
            'bd2' => $bd2
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Picture;

class HomeController extends Controller
{
    public function show ()
    {
        return view('Home');
    }

    public function index() 
    {
        $bd = Home::all();
        $bd2 = Picture::all();
        return view('Home', 
        [
            'bd' => $bd,
            'bd2' => $bd2
        ]);
    }
    
  
}

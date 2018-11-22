<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Home;

class HomeController extends Controller
{
    public function show ()
    {
        return view('Home');
    }

    public function index() 
    {
        $bd = Home::all();
        return view('Home', compact('bd'));
    }
}

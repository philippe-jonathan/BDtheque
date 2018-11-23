<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;//model home = table bd
use App\Models\Picture;

class collectionController extends Controller
{
 

    public function tom ()
    {
        $pic = Picture::all();
        $one =  Home::where('tom_bd', '1')->get();
        return view('collection', 
        [
            'pic' => $pic,
            'one' => $one
        ]);
    }

    public function showCollection()
    {
        $bd2 = Picture::all();
        
        if(isset($_GET['namebut']))
        {
            $title = Home::where('title_bd', $_GET['namebut'])->get();
        }

        return view('infoBd',
        [
            'title' => $title,
            'bd2' => $bd2
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class TokoController extends Controller
{

    public function show()
    {
       $menus=Menu::all();
        return view('toko',compact('menus')); 
    }
}

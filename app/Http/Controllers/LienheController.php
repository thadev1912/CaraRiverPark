<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LienheController extends Controller
{
    function thongtinlienhe()
     {
        return view('lienhe.lienhe');
     }
}

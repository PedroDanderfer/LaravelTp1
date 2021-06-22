<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{

    public function comingSoon(){
        return view('comingSoon');
    }
}

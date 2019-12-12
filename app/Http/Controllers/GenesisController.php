<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenesisController extends Controller
{
    public function start(){
        return view('index');
    }
}

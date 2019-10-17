<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitController extends Controller
{
    public function index(){
        return view('kit.index');
    }
}

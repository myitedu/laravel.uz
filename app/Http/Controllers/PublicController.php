<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function uzbekiston(Request $request){
        //Sizning codlar
        //Model ulanasiz, DB ulanasiz
        return view('uzbekiston');
    }
}

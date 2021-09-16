<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class Dua extends Controller
{
    function look(){

        $list =movie::all();
        return view('tes',['movie'=>$list]);
    }
    //
}

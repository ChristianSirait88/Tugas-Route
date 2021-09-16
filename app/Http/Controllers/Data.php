<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar;

class Data extends Controller
{
    function show(){

        $data =daftar::all();
        return view('laman',['daftar'=>$data]);
    }
    //

}

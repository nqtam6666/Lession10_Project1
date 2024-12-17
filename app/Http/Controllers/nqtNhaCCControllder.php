<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nqtNhaCC;

class nqtNhaCCControllder extends Controller
{
    public function list(){
        $NhaCC = nqtNhaCC::all();
        return view('NqtNhaCC.List', ['NhaCC'=>$NhaCC]);
    }
}

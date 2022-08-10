<?php

namespace App\Http\Controllers;

use App\Models\Nhacungcap;
use App\Models\Tonkho;
use Illuminate\Http\Request;

class TonkhoController extends Controller
{
   
    public function index()
    {
        $tonkhos = Nhacungcap::orderBy('id','DESC')->get();
        return view('Tonkho.index')->with(compact('tonkhos'));
    }

    
 
 
 

}

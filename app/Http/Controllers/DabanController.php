<?php

namespace App\Http\Controllers;

use App\Models\Daban;
use Illuminate\Http\Request;

class DabanController extends Controller
{
    public function index()
    {
        $daban = Daban::paginate(5);
        return view( 'Daban.index' , compact('daban'))->with('i',(request()->input('page',1)-1)*5);

    }
}

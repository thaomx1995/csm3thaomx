<?php

namespace App\Http\Controllers\front;
use App\Models\Nhacungcap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nhacungcaps = Nhacungcap::get();
        // dd($nhacungcaps);
        return view('front.index' ,compact('nhacungcaps'));
    }
}

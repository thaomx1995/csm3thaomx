<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DangnhapController extends Controller
{
    public function index()
    {
        return view('auth.add');
    }

    public function store(Request $request)
    {
        if ($request -> isMethod('POST')) {
    $validator= Validator::make($request->all(),[
        'name'=> 'required|min:6|max:30|alpha',
        'email'=> 'required|email',
        'phone'=> 'required|size:10|numeric',
        'password'=> 'required|confirmed|min:6|max:30',
    ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        }
        // dd($validator);
    }
}

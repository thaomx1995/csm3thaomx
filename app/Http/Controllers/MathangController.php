<?php

namespace App\Http\Controllers;

use App\Models\Mathang;
use Illuminate\Http\Request;


class MathangController extends Controller
{
    public function index()
    {
        $mathang = Mathang::paginate(5);
        return view( 'Mathang.index' , compact('mathang'))->with('i',(request()->input('page',1)-1)*5);

    }

    public function create()
    {
        return view('Mathang.create');
    }

    public function store(Request $request)
    {
        Mathang::create($request->all());
        return redirect()->route('mathang.index')->with('status','them thanh cong');
    }

    public function edit(Mathang $mathang)
    {
        return view('Mathang.edit', compact('mathang'));
    }

    public function update(Request $request, Mathang $mathang)
    {
        $mathang->update($request->all());
        return redirect()->route('mathang.index')->with('status','cap nhat thanh cong');
    }

    public function destroy(Mathang $mathang)
    {
        $mathang->delete();
        return redirect()->route('mathang.index')->with('thongbao', 'xoa thanh cong');
    }
}

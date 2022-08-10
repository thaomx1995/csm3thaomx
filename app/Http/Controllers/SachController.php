<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sachtable;

class SachController extends Controller
{
    public function index()
    {
        $sachs =   Sachtable::paginate(5);
        return view( 'Sach.index' , compact('sachs'))->with('i',(request()->input('page',1)-1) * 5);

    }


    public function create()
    {
        return view('Sach.create');
    }

    public function store(Request $request)
    {
        Sachtable::create($request->all());
        return redirect()->route('sach.index')->with('status','them sach thanh cong');
    }


    public function edit(Sachtable $sach)
    {
        return view('Sach.edit', compact('sach'));
    }
    public function update(Request $request, Sachtable $sach)
    {

        $sach->update($request->all());
        return redirect()->route('sach.index')->with('status','cap nhat sach thanh cong');
    }

    public function destroy(Sachtable $sach)
    {
        $sach->delete();
        return redirect()->route('sach.index')->with('thongbao', 'xoa thanh cong');
    }
}

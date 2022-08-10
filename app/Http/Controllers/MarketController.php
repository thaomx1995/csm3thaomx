<?php

namespace App\Http\Controllers;
use App\Models\Mathang;

use App\Models\Nhacungcap;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        $nhacungcaps =   Nhacungcap::with('mathang')->paginate(5);
        return view( 'Nhacungcap.index' , compact('nhacungcaps'))->with('i',(request()->input('page',1)-1) * 5);

    }

    public function create()
    {
        $mathangs = Mathang::orderBy('id','DESC')->get();
        return view('Nhacungcap.create')->with(compact('mathangs'));
    }

    public function store(Request $request)
    {
        $nhacungcaps= new Nhacungcap();
        $nhacungcaps->ten_hang=$request['ten_hang'];
        $nhacungcaps->gia=$request['gia'];
        $nhacungcaps->so_luong_nhap=$request['so_luong_nhap'];
        $nhacungcaps->ten_cong_ty=$request['ten_cong_ty'];
        $nhacungcaps->mathang_id=$request['mathang_id'];

        $hinhanh=$request->hinh_anh;
        $path='public/uploads/nhacungcap/';
        $get_name_image=$hinhanh->getClientOriginalName();
        $name_image=current(explode('.',$get_name_image));
        $new_image=$name_image.rand(0,99).'.'.$hinhanh->getClientOriginalExtension();
        $hinhanh->move($path,$new_image);
        $nhacungcaps->hinh_anh=$new_image;
        $request['nhacungcap_image']=$new_image;
        $nhacungcaps->save();

        // Nhacungcap::create($request->all());
        return redirect()->route('nhacungcap.index')->with('status','them thanh cong');
    }

    public function edit(Nhacungcap $nhacungcap)
    {

        return view('Nhacungcap.edit', compact('nhacungcap'));
    }

    public function update(Request $request, Nhacungcap $nhacungcap)
    {
        $nhacungcap->update($request->all());
        return redirect()->route('nhacungcap.index')->with('status','cap nhat thanh cong');
    }

    public function destroy(Nhacungcap $nhacungcap)
    {
        $nhacungcap->delete();
        return redirect()->route('nhacungcap.index')->with('thongbao', 'xoa thanh cong');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Chucvu;
use App\Models\Nhanvien;
use Illuminate\Http\Request;

class NhanvienController extends Controller
{
    public function index()
    {
        $nhanviens =   Nhanvien::with('chucvu')->paginate(5);
        return view('Nhanvien.index', compact('nhanviens'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        $chucvuss = Chucvu::orderBy('id','DESC')->get();
        return view('Nhanvien.create')->with(compact('chucvuss'));
    }

    public function store(Request $request)
    {
        $nhanviens= new Nhanvien();
        $nhanviens->chuc_vu=$request['chuc_vu'];
        $nhanviens->ten=$request['ten'];
        $nhanviens->hinh_anh_nv=$request['hinh_anh_nv'];
        $nhanviens->sdt=$request['sdt'];
        $nhanviens->email=$request['email'];
        $nhanviens->dia_chi=$request['dia_chi'];
        $nhanviens->nam_sinh=$request['nam_sinh'];

        $hinhanh=$request->hinh_anh_nv;
        $path='public/uploads/nhanvien/';
        $get_name_image=$hinhanh->getClientOriginalName();
        $name_image=current(explode('.',$get_name_image));
        $new_image=$name_image.rand(0,99).'.'.$hinhanh->getClientOriginalExtension();
        $hinhanh->move($path,$new_image);
        $nhanviens->hinh_anh_nv=$new_image;
        $request['nhanvien_image']=$new_image;
        $nhanviens->save();

        // Nhacungcap::create($request->all());
        return redirect()->route('nhanvien.index')->with('status','them thanh cong');
    }
}

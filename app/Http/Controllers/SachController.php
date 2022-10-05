<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Sachtable;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Routing\Controller;

class SachController extends Controller
{
    public function index( Request $request)
    {
        $sachs =   Sachtable::search()->paginate(3);

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
        return redirect()->route('sach.index')->with('status', 'xoa thanh cong');
    }

    public function handle( Request $request)
    {
        $this->validate($request,
        [
            'ten_sach' => 'required|min:5|max:255',
            'lsbn' => 'required|integer|max:20',
            'tac_gia' => 'required|integer|max:3',
            'the_loai' => 'required|integer|max:3',
            'so_trang' => 'required|integer|max:3',
            'nam_xuat_ban' => 'required|integer|max:3',
        ],

        [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute Không được nhỏ hơn :min',
            'integer' => ':attribute Chỉ được nhập số',
        ],

        [
            'ten_sach' => 'Tiêu đề',
            'lsbn' => 'Tuổi',
            'tac_gia' => 'Tuổi',
            'the_loai' => 'the loai',
            'so_trang' => 'Tuổi',
            'nam_xuat_ban' => 'Tuổi',
        ]

        );
        }

}

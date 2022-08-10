<?php

namespace App\Http\Controllers;

use App\Models\Chucvu;
use Illuminate\Http\Request;

class ChucvuController extends Controller
{
    public function index()
    {
        $chucvus = Chucvu::paginate(5);
        return view( 'Chucvu.index' , compact('chucvus'))->with('i',(request()->input('page',1)-1)*5);

    }

    public function create()
    {
        return view('Chucvu.create');
    }
    public function store(Request $requet)
    {
        Chucvu::create($requet->all());
        return redirect()->route('chucvu.index')->with('status', 'Thêm thành công');
       
    }
}

@include('layout.admin.include.header')

@extends('layout')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>thêm</h3>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-md-6">
                <a href="{{route('nhacungcap.index')}}" class="btn btn-primary float-end">nhà cung cấp</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('nhacungcap.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>tên hàng</strong>
                        <input type="text" name="ten_hang"  class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" >Danh muc</label>
                        <select name="mathang_id"  class="form-select" id="inputGroupSelect02">
                        @foreach($mathangs as $mathang)
                            <option value="{{$mathang->id}}">{{$mathang->loai_hang}}</option>
                        @endforeach
                        </select>
                        </div>

                    <div class="form-group">
                        <strong>giá</strong>
                        <input type="text" name="gia"  class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" >Hình ảnh </label>
                        <input type="file" name="hinh_anh" class="form-control-file">
                        <span style="color:red;">@error("hinh_anh"){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <strong>Số lượng nhâp</strong>
                        <input type="text" name="so_luong_nhap"  class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>tên công ty</strong>
                        <input type="text" name="ten_cong_ty"  class="form-control" placeholder="">
                    {{-- </div> --}}<br>
                </div>
            </div><br>
            <button type="submit" class="btn btn-outline-danger" >cap nhat</button>
        </form>
    </div>
</div>
</div>
@endsection

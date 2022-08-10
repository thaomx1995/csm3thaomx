@include('layout.admin.include.header')

@extends('layout')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>sua hang hoa</h3>
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
        <form action="{{route('nhacungcap.update', $nhacungcap->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>tên hàng</strong>
                        <input type="text" name="ten_hang" value="{{$nhacungcap->ten_hang}}" class="form-control" placeholder="nhap ma hang">
                    </div>
                    {{-- <div class="form-group">
                        <strong>loại hàng</strong>
                        <input type="text" name="loai_hang" value="{{$nhacungcap->loai_hang	}}" class="form-control" placeholder="nhap ten hang">
                    </div> --}}
                    {{-- <select name="mathang_id"  class="form-select" id="inputGroupSelect02">
                        @foreach($mathangs as $mathang)
                            <option value="{{$mathang->id}}">{{$mathang->loai_hang}}</option>
                        @endforeach
                        </select> --}}
                    <div class="form-group">
                        <strong>giá</strong>
                        <input type="text" name="gia" value="{{$nhacungcap->gia}}" class="form-control" placeholder="nhap ngay">
                    </div>
                    <div class="form-group">
                        <strong>hình ảnh</strong>
                        <input type="text" name="hinh_anh" value="{{$nhacungcap->hinh_anh}}" class="form-control" placeholder="nhap nha cung cap">
                    </div>
                    <div class="form-group">
                        <strong>số lượng nhập </strong>
                        <input type="text" name="so_luong_nhap" value="{{$nhacungcap->so_luong_nhap}}" class="form-control" placeholder="nhap nha cung cap">
                    </div>
                    <div class="form-group">
                        <strong>tên công ty</strong>
                        <input type="text" name="ten_cong_ty" value="{{$nhacungcap->ten_cong_ty}}" class="form-control" placeholder="nhap nha cung cap">
                    {{-- </div> --}}<br>
                </div>
            </div><br>
            <button type="submit" class="btn btn-outline-danger" >cập nhật</button>
        </form>
    </div>
</div>
</div>
@endsection

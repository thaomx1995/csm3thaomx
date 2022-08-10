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
                <a href="{{route('mathang.index')}}" class="btn btn-primary float-end">Nhà Cung Cấp</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('mathang.update', $mathang->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Mã Qr</strong>
                        <input type="text" name="qr_code" value="{{$mathang->qr_code}}" class="form-control" placeholder="nhap ma hang">
                    </div>
                    <div class="form-group">
                        <strong>Loại Hàng</strong>
                        <input type="text" name="loai_hang" value="{{$mathang->loai_hang}}" class="form-control" placeholder="nhap ten hang">
                    {{-- </div> --}}<br>

                </div>
            </div><br>
            <button type="submit" class="btn btn-outline-danger" >cập nhật</button>
        </form>
    </div>
</div>
</div>
@endsection

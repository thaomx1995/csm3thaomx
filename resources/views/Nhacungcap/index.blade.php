


@extends('layout');
@section('content')
@include('layout.admin.include.header')
    <div class="container">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Nhà Cung Cấp</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('nhacungcap.create')}}" class="btn btn-primary float-end">Thêm</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>mã hàng</th>
                        <th>tên hàng</th>
                        <th>loại hàng</th>
                        <th>giá</th>
                        <th>hình ảnh</th>
                        <th>số lượng nhập</th>
                        <th>tên công ty</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nhacungcaps as $nhacungcap)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$nhacungcap->ten_hang}}</td>
                            <td>{{$nhacungcap->mathang->loai_hang}}</td>
                            <td>{{$nhacungcap->gia}}</td>
                            <td ><img src="{{asset('public/uploads/nhacungcap/'.$nhacungcap->hinh_anh)}} "height="100px" width="100px"></td>
                            <td>{{$nhacungcap->so_luong_nhap}}</td>
                            <td>{{$nhacungcap->ten_cong_ty}}</td>
                            <td>
                                <form action="{{route('nhacungcap.destroy', $nhacungcap->id)}}" method="POST">
                                    <a href="{{route('nhacungcap.edit', $nhacungcap->id)}}" class="btn btn-primary">Sửa</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$nhacungcaps->links()}}
        </div>
        </div>
@include('layout.admin.include.footer')
@endsection



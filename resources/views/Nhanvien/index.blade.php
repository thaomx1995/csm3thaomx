@extends('layout');
@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Nhân Viên</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('nhanvien.create')}}" class="btn btn-primary float-end">Thêm</a>
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
                        <th>Mã NV</th>
                        <th>Chức Vụ</th>
                        <th>Tên</th>
                        <th>Ảnh NV</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Địa Chỉ</th>
                        <th>Năm Sinh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nhanviens as $nhanvien)
                        <tr>
                            <td>{{$nhanvien->id}}</td>
                            <td>{{$nhanvien->chuc_vu}}</td>
                            <td>{{$nhanvien->ten}}</td>
                            <td ><img src="{{asset('public/uploads/nhanvien/'.$nhanvien->hinh_anh_nv)}} "height="100px" width="100px"></td>
                            <td>{{$nhanvien->sdt}}</td>
                            <td>{{$nhanvien->email}}</td>
                            <td>{{$nhanvien->dia_chi}}</td>
                            <td>{{$nhanvien->nam_sinh}}</td>
                            <td>
                                <form action="{{route('nhanvien.destroy', $nhanvien->id)}}" method="POST">
                                    <a href="{{route('nhanvien.edit', $nhanvien->id)}}" class="btn btn-primary">Sửa</a>
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
        {{$nhanviens->links()}}
    </div>
    </div>
@endsection

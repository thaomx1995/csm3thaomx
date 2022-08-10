@extends('layout');
@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>quan lý sách</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sach.create')}}" class="btn btn-primary float-end">thêm</a>
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
                        <th>STT</th>
                        <th>Tên sách</th>z
                        <th>LSBN</th>
                        <th>Tác giả</th>
                        <th>Thể loại</th>
                        <th>Số trang</th>
                        <th>Năm xuất bản</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sachs as $sach)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$sach->ten_sach}}</td>
                            <td>{{$sach->lsbn}}</td>
                            <td>{{$sach->tac_gia}}</td>
                            <td>{{$sach->the_loai}}</td>
                            <td>{{$sach->so_trang}}</td>
                            <td>{{$sach->nam_xuat_ban}}</td>
                            <td>
                                <form action="{{route('sach.destroy', $sach->id)}}" method="POST">
                                    <a href="{{route('sach.edit', $sach->id)}}" class="btn btn-primary">sửa</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$sachs->links()}}
    </div>
    </div>
@endsection

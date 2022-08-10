@extends('layout')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>them</h3>
            </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="col-md-6">
                <a href="{{route('sach.index')}}" class="btn btn-primary float-end">danh sach</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('sach.update',$sach->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>tên sách</strong>
                        <input type="text" name="ten_sach" value="{{$sach->ten_sach}}" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>LSBN</strong>
                        <input type="text" name="lsbn" value="{{$sach->lsbn}}" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>tác giả</strong>
                        <select name="tac_gia" class="form-select" >
                            <option value="">chọn tác giả</option>
                            <option value="1" {{$sach->tac_gia == "1" ? 'selected' : ''}}>tac gia 1</option>
                            <option value="2" {{$sach->tac_gia == "2" ? 'selected' : ''}}>tac gia 2</option>
                            <option value="3" {{$sach->tac_gia == "3" ? 'selected' : ''}}>tac gia 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <strong>thể loại</strong>
                        <select name="the_loai" class="form-select" >
                            <option value="">chọn thể loại</option>
                            <option value="1" {{$sach->the_loai == "1" ? 'selected' : ''}}>truyện tranh</option>
                            <option value="2" {{$sach->the_loai == "2" ? 'selected' : ''}}>trinh thám</option>
                            <option value="3" {{$sach->the_loai == "3" ? 'selected' : ''}}>kinh dị</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>số trang</strong>
                        <input type="text" name="so_trang" value="{{$sach->so_trang}}" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>năm xuất bản</strong>
                        <input type="text" name="nam_xuat_ban" value="{{$sach->nam_xuat_ban}}" class="form-control" placeholder="">
                    </div>
                </div>
            </div><br>
            <button type="submit" class="btn btn-outline-primary" >luu</button>
        </form>
    </div>
</div>
</div>
@endsection

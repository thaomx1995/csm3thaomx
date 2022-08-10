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
        <form action="{{route('sach.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>tên sách</strong>
                        <input type="text" name="ten_sach" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>LSBN</strong>
                        <input type="text" name="lsbn" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>tác giả</strong>
                        <select name="tac_gia" class="form-select" >
                            <option selected>chọn tác giả</option>
                            <option value="tac gia 1">tac gia 1</option>
                            <option value="tac gia 2">tac gia 2</option>
                            <option value="tac gia 3">tac gia 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <strong>thể loại</strong>
                        <select name="the_loai" class="form-select" >
                            <option selected>chọn thể loại</option>
                            <option value="1">truyện tranh</option>
                            <option value="2">trinh thám</option>
                            <option value="3">kinh dị</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>số trang</strong>
                        <input type="text" name="so_trang" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>năm xuất bản</strong>
                        <input type="text" name="nam_xuat_ban" class="form-control" placeholder="">
                    </div>
                </div>
            </div><br>
            <button type="submit" class="btn btn-outline-primary" >luu</button>
        </form>
    </div>
</div>
</div>
@endsection

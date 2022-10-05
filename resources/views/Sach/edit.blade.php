@extends('layout')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Thêm</h3>
            </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="col-md-6">
                <a href="{{route('sach.index')}}" class="btn btn-primary float-end">Danh sách</a>
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
                        <strong>Tên sách</strong>
                        <input type="text" name="ten_sach" value="{{$sach->ten_sach}}" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>ISBN</strong>
                        <input type="number" name="lsbn" value="{{$sach->lsbn}}" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>Tác giả</strong>
                        <select name="tac_gia" class="form-select" >
                            <option value="">Chọn tác giả</option>
                            <option value="Fujiko F. Fujio" {{$sach->tac_gia == "Fujiko F. Fujio" ? 'selected' : ''}}>Fujiko F. Fujio</option>
                            <option value="Aoyama Gōshō" {{$sach->tac_gia == "Aoyama Gōshō" ? 'selected' : ''}}>Aoyama Gōshō</option>
                            <option value="Toriyama Akira" {{$sach->tac_gia == "Toriyama Akira" ? 'selected' : ''}}>Toriyama Akira</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <strong>Thể loại</strong>
                        <select name="the_loai" class="form-select" >
                            <option value="">Chọn thể loại</option>
                            <option value="Truyện tranh" {{$sach->the_loai == "Truyện tranh" ? 'selected' : ''}}>Truyện tranh</option>
                            <option value="Trinh thám" {{$sach->the_loai == "Trinh thám" ? 'selected' : ''}}>Trinh thám</option>
                            <option value="Kinh dị" {{$sach->the_loai == "Kinh dị" ? 'selected' : ''}}>Kinh dị</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Số trang</strong>
                        <input type="number" name="so_trang" value="{{$sach->so_trang}}" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>Năm xuất bản</strong>
                        <input type="date" name="nam_xuat_ban" value="{{$sach->nam_xuat_ban}}" class="form-control" placeholder="">
                    </div>
                </div>
            </div><br>
            <button type="submit" class="btn btn-outline-primary" >luu</button>
        </form>
    </div>
</div>
</div>
@endsection

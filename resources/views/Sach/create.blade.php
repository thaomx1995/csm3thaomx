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
        <form action="{{route('sach.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>tên sách</strong>
                        <input type="text" name="ten_sach" class="form-control" placeholder="">
                    </div>
                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('ten_sach') }}</p>
                    @endif
                    <div class="form-group">
                        <strong>ISBN</strong>
                        <input type="number" name="lsbn" class="form-control" placeholder="">
                    </div>
                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('lsbn') }}</p>
                    @endif
                    <div class="form-group">
                        <strong>tác giả</strong>
                        <select name="tac_gia" class="form-select" >
                            <option selected>chọn tác giả</option>
                            <option value="Fujiko F. Fujio">Fujiko F. Fujio</option>
                            <option value="Aoyama Gōshō">Aoyama Gōshō</option>
                            <option value=" Toriyama Akira"> Toriyama Akira</option>
                        </select>
                    </div>
                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('tac_gia') }}</p>
                    @endif
                    <div class="form-group">
                        <strong>thể loại</strong>
                        <select name="the_loai" class="form-select" >
                            <option selected>chọn thể loại</option>
                            <option value="Truyện tranh">Truyện tranh</option>
                            <option value="Trinh thám">Trinh thám</option>
                            <option value="Kinh dị">Kinh dị</option>
                        </select>
                    </div>
                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('the_loai') }}</p>
                    @endif
                    <div class="form-group">
                        <strong>số trang</strong>
                        <input type="number" name="so_trang" class="form-control" placeholder="">
                    </div>
                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('so_trang') }}</p>
                    @endif
                    <div class="form-group">
                        <strong>năm xuất bản</strong>
                        <input type="date" name="nam_xuat_ban" class="form-control" placeholder="">
                    </div>
                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('nam_xuat_ban') }}</p>
                    @endif
                </div>
            </div><br>
            <button type="submit" class="btn btn-outline-primary" >luu</button>
        </form>
    </div>
</div>
</div>
@endsection

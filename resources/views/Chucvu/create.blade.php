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
                <a href="{{route('nhanvien.index')}}" class="btn btn-primary float-end">Nhân viên</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('chucvu.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>vị trí</strong>
                        <input type="text" name="ten_vi_tri"  class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>mức lương</strong>
                        <input type="text" name="muc_luong"  class="form-control" placeholder="">
                    {{-- </div> --}}<br>
                    </div>
            </div><br>
            <button type="submit" class="btn btn-outline-danger" >Cập Nhật</button>
        </form>
    </div>
</div>
</div>
@endsection

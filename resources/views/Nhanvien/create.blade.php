@extends('layout')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>thêm</h3>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-md-6">
                <a href="{{route('nhanvien.index')}}" class="btn btn-primary float-end">Nhân Viên</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('nhanvien.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1" >Chức Vụ</label>
                        <select name="chuc_vu"  class="form-select" id="inputGroupSelect02">
                        @foreach($chucvuss as $chucvu)
                            <option value="{{$chucvu->id}}">{{$chucvu->ten_vi_tri}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <strong>Tên</strong>
                        <input type="text" name="ten"  class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" >Hình ảnh </label>
                        <input type="file" name="hinh_anh_nv" class="form-control-file">
                        <span style="color:red;">@error("hinh_anh_nv"){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <strong>phone</strong>
                        <input type="text" name="sdt"  class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>email</strong>
                        <input type="text" name="email"  class="form-control" placeholder="">
                    <div class="form-group">
                        <strong>địa chỉ</strong>
                        <input type="text" name="dia_chi"  class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>năm sinh</strong>
                        <input type="text" name="nam_sinh"  class="form-control" placeholder="">
                    </div>
                        {{-- </div> --}}<br>
                </div>
            </div><br>
            <button type="submit" class="btn btn-outline-danger" >cap nhat</button>
        </form>
    </div>
</div>
</div>
@endsection

@extends('layout');
@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Chức Vụ</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('chucvu.create')}}" class="btn btn-primary float-end">Thêm</a>
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
                        <th>#</th>
                        <th>Vị Trí</th>
                        <th>Mức Lương</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chucvus as $chucvu)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$chucvu->ten_vi_tri}}</td>
                            <td>{{$chucvu->muc_luong}}</td>
                            <td>
                                <form action="{{route('nhacungcap.destroy', $chucvu->id)}}" method="POST">
                                    <a href="{{route('nhacungcap.edit', $chucvu->id)}}" class="btn btn-primary">Sửa</a>
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
        {{-- {{$chucvus->links()}} --}}
        </div>
        </div>
@endsection

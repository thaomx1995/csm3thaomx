@extends('layout');
@section('content')
@include('layout.admin.include.header')
<div class="container">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Đã Bán</h3>
                </div>
                <div class="col-md-6">
                    {{-- <a href="{{route('nhacungcap.create')}}" class="btn btn-primary float-end">Thêm</a> --}}
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
                        <th>hình ảnh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daban as $dabans)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$dabans->ma_hang}}</td>
                            <td>{{$dabans->ten_hang}}</td>
                            <td>{{$dabans->loai_anh}}</td>
                            <td>{{$dabans->hinh_anh}}</td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$daban->links()}}
    </div>
    </div>
    @include('layout.admin.include.footer')
    @endsection

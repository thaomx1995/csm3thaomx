@include('layout.admin.include.header')
@extends('layout');
@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Kho</h3>
                </div>
                <div class="col-md-6">
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
                        <th>tên công ty</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tonkhos as $tonkho)
                        <tr>
                            <td>{{$tonkho->id}}</td>
                            <td>{{$tonkho->ten_hang}}</td>
                            <td>{{$tonkho->ten_cong_ty}}</td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@include('layout.admin.include.footer')
@endsection

@extends('layout');
@section('content')
@include('layout.admin.include.header')

    <div class="container">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>loại Hàng</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('mathang.create')}}" class="btn btn-primary float-end">them</a>
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
                        <th>Mã QR</th>
                        <th>Loại hàng</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mathang as $mathangs)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$mathangs->qr_code}}</td>
                            <td>{{$mathangs->loai_hang}}</td>
                            <td>
                                <form action="{{route('mathang.destroy', $mathangs->id)}}" method="POST">
                                    <a href="{{route('mathang.edit', $mathangs->id)}}" class="btn btn-primary">sua</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">xoa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$mathang->links()}}
    </div>
    </div>
@include('layout.admin.include.footer')
@endsection

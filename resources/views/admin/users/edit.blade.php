@extends('adminlte::page')

@section('title', 'Chỉnh sửa người dùng')

@section('content_header')
    <h1 class="m-0 text-dark">Chỉnh sửa người dùng</h1>
@stop

@section('content')
    <form action="{{route('admin.users.update', $user)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputName">Tên</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="exampleInputName" placeholder="Tên" name="name"
                                   value="{{$user->name ?? old('name')}}">
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="exampleInputEmail" placeholder="Email" name="email"
                                   value="{{$user->email ?? old('email')}}">
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Mật khẩu</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   id="exampleInputPassword" placeholder="Mật khẩu" name="password">
                            @error('password') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" id="exampleInputPassword"
                                   placeholder="Xác nhận mật khẩu" name="password_confirmation">
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <div class="form-check">
                                <input type="hidden" value="0" name="status">
                                <input class="form-check-input" type="checkbox" name="status"  {{ $user->status == '1' ? 'checked' : '' }} id="status" value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Hoạt động
                                </label>
                            </div>
                            @error('status') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                        <a href="{{route('admin.users.index')}}" class="btn btn-default">
                            Danh sách người dùng
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop

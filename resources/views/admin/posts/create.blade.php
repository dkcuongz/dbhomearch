@extends('adminlte::page')

@section('title', 'Tạo mới bài viết')

@section('content_header')
    <h1 class="m-0 text-dark">Tạo mới bài viết</h1>
@stop

@section('content')
    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputName">Tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="exampleInputName" placeholder="Tiêu đề" name="title" value="{{old('title')}}">
                            @error('title') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Nội dung</label>
                            <textarea class="summernote form-control @error('description') is-invalid @enderror"
                                      id="text" cols="30" rows="10" placeholder="Mô tả" name="description">{{old('description')}}</textarea>
                            @error('description') <span class="text-danger">{{$message}}</span> @enderror
                            @include('ckfinder::setup')
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="status" id="status" value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Hoạt động
                                </label>
                            </div>
                            @error('status') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tạo mới</button>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-default">
                            Danh sách bài viết
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace('text', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
            filebrowserUploadUrl: '{{ route('ckfinder_connector') }}',
            filebrowserWindowWidth: '1000',
            filebrowserWindowHeight: '700',
            height: '1000'
        });
    </script>
    @include('ckfinder::setup')
@stop


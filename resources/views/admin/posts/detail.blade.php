@extends('adminlte::page')

@section('title', 'Chi tiết bài viết')

@section('content_header')
    <h1 class="m-0 text-dark">Chi tiết bài viết</h1>
@stop

@section('content')
    <form>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            @foreach ($categories as $subcategory)
                                @if($subcategory->id == $post->category_id)
                                    <lable>{{ $subcategory->name}}</lable>
                                @endif
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Tiêu đề</label>
                            <p>{{ $post->title}}</p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Nội dung</label>
                            <div>{!!$post->description!!}</div>
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ $post->status == '1' ? 'Hoạt động' : 'Ẩn' }}
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status">Nổi bật</label>
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ $post->is_out_standings == '1' ? 'Nổi bật' : 'Không' }}
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status">Công trình thực tế</label>
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ $post->is_reality == '1' ? 'Công trình thực tế' : 'Không' }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{route('admin.posts.index')}}" class="btn btn-default">
                            Danh sách bài viết
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop

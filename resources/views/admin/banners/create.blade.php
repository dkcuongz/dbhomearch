@extends('adminlte::page')

@section('title', 'Tạo mới Banner')

@section('content_header')
    <h1 class="m-0 text-dark">Tạo mới banners</h1>
@stop

@section('content')
    <form action="{{route('admin.banners.store')}}" method="post" enctype="multipart/form-data" id="upload-image">
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
                                      id="text" cols="30" rows="10" placeholder="Mô tả" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image" placeholder="Chọn ảnh" id="image">
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-2">
                            <img id="preview-image-before-upload"
                                 src="{{asset('images-UI/notfound.jpg')}}"
                                 alt="preview image" style="max-height: 250px;">
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
                        <a href="{{route('admin.banners.index')}}" class="btn btn-default">
                            Danh sách banner
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @push('js')
        <script type="text/javascript">

            $(document).ready(function (e) {


                $('#image').change(function () {

                    let reader = new FileReader();

                    reader.onload = (e) => {

                        $('#preview-image-before-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);

                });

            });

        </script>
    @endpush
@endsection

@extends('adminlte::page')

@section('title', 'Chỉnh sửa dự án')

@section('content_header')
    <h1 class="m-0 text-dark">Chỉnh sửa dự án</h1>
@stop

@section('content')
    <form action="{{route('admin.projects.update', $project)}}" method="post" enctype="multipart/form-data" id="upload-image">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $subcategory)
                                <!-- Include categories.blade.php file and pass the current category to it -->
                                    @include('admin.categories.categories', ['parent_id'=>$subcategory->parent_id,'category' => $subcategory, $level=''])
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="exampleInputName" placeholder="Tiêu đề" name="title"
                                   value="{{old('title') ?? $project->title}}">
                            @error('title') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Ảnh thumbnail</label>
                            <br>
                            <input type="file" name="image" placeholder="Chọn ảnh" id="image">
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-2">
                            <img id="preview-image-before-upload"
                                 src="{{asset($project->image->path ?? 'images-UI/notfound.jpg')}}"
                                 alt="preview image" style="max-height: 250px;">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Nội dung</label>
                            <textarea class="summernote form-control @error('description') is-invalid @enderror"
                                      id="text" cols="30" rows="10" placeholder="Mô tả"
                                      name="description">{{old('description') ?? $project->description}}</textarea>
                            @error('description') <span class="text-danger">{{$message}}</span> @enderror
                            @include('ckfinder::setup')
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <div class="form-check">
                                <input type="hidden" value="0" name="status">
                                <input class="form-check-input" type="checkbox"
                                       {{ $project->status == '1' ? 'checked' : '' }} name="status" id="status" value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Hoạt động
                                </label>
                            </div>
                            @error('status') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="status">Nổi bật</label>--}}
{{--                            <div class="form-check">--}}
{{--                                <input type="hidden" value="0" name="is_out_standings">--}}
{{--                                <input class="form-check-input" type="checkbox"--}}
{{--                                       {{ $project->is_out_standings == '1' ? 'checked' : '' }} name="is_out_standings" id="is_out_standings" value="1">--}}
{{--                                <label class="form-check-label">--}}
{{--                                    Nổi bật--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            @error('is_out_standings') <span class="text-danger">{{$message}}</span> @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="status">Công trình thực tế</label>--}}
{{--                            <div class="form-check">--}}
{{--                                <input type="hidden" value="0" name="is_reality">--}}
{{--                                <input class="form-check-input" type="checkbox"--}}
{{--                                       {{ $project->is_reality == '1' ? 'checked' : '' }} name="is_reality" id="is_reality" value="1">--}}
{{--                                <label class="form-check-label">--}}
{{--                                    Công trình thực tế--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            @error('is_reality') <span class="text-danger">{{$message}}</span> @enderror--}}
{{--                        </div>--}}
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <a href="{{route('admin.projects.index')}}" class="btn btn-default">
                            Danh sách dự án
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
            filebrowserWindowHeight: '700'
        });
    </script>
    @include('ckfinder::setup')
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
@stop

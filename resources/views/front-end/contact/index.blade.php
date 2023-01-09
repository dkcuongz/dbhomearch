@extends('layouts.frontend')

@section('title', 'Thông tin liên hệ')

@section('content_header')
    <h1 class="m-0 text-dark">Thông tin liên hệ</h1>
@stop

@section('content')
    <div id="content" role="main" class="content-area">
        <div id="gap-379839177" class="gap-element clearfix" style="display:block; height:auto;">
        </div>
        <div class="row" id="row-2105045357">
            <div id="col-920315272" class="col small-12 large-12">
                <div class="col-inner">
                    <h3 style="text-align: center;"><span
                            style="font-size: 120%; color: #ff6600;">THÔNG TIN LIÊN HỆ</span></h3>
                    <p><img class="aligncenter wp-image-109"
                            src="{{ asset('images-UI/line.png') }}" alt="" width="70"
                            height="5"/></p>
                </div>
            </div>
            <div id="col-954730215" class="col medium-6 small-12 large-6">
                <div class="col-inner">
                    <p><span style="font-size: 14px; color: #282828;">VN Luxury hoạt động với tiêu chí mang đến lợi ích tối đa cho khách hàng, lấy chữ TÍN làm tiền đề để phát triển.</span>
                    </p>
                    <ul>
                        <li><span style="color: #282828;">Trụ sở: Lô 13 ô DV 04 Khu đất dịch vụ trong Khu đô thị Tây Nam hồ Linh Đàm, Phường Hoàng Liệt, Quận Hoàng Mai, Thành phố Hà Nội.</span>
                        </li>
                        <li><span style="color: #282828;">VPGD: 39- Lê Văn Lương- Nhân Chính- Thanh Xuân- Hà Nội.</span>
                        </li>
                        <li><span style="color: #282828;">Hotline: </span><strong><span style="color: #ed1c24;">0986 359 515</span></strong>
                        </li>
                        <li><span style="color: #282828;">Email: cskh@noithatvnluxury.vn</span></li>
                    </ul>
                </div>
            </div>
            <div id="col-107069725" class="col medium-6 small-12 large-6">
                <div class="col-inner">
                    <p><span
                            style="font-size: 130%; color: #ff9900;">Nhập thông tin hỗ trợ của bạn vào các ô dưới đây:</span>
                    </p>
                    <div role="form" class="wpcf7" id="wpcf7-f399-p70-o1" lang="vi" dir="ltr">
                        <form action="{{route('front.lien-he.store')}}" method="post">
                            @csrf
                            <p>
                            <div class="form-group">
                                <span class="wpcf7-form-control-wrap" data-name="text-877">
                                    <input type="text"
                                           name="name"
                                           value="{{old('name')}}" size="40"
                                           class="form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required
                                           @error('name') is-invalid @enderror"
                                           placeholder="Nhập tên của bạn"/>
                                     @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </span>
                            </div>
                            <br/>
                            <div class="form-group">
                            <span class="wpcf7-form-control-wrap" data-name="text-885">
                                    <input type="text"
                                           name="phone"
                                           value="{{old('phone')}}" size="40"
                                           class="form-control wpcf7-form-control wpcf7-text
                                           @error('phone') is-invalid @enderror"
                                           aria-invalid="false"
                                           placeholder="SĐT và Địa chỉ"/>
                                     @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                                </span>
                            </div>
                            <br/>
                            <div class="form-group">
                            <span class="wpcf7-form-control-wrap" data-name="textarea-637">
                                    <textarea
                                        name="content" cols="40" rows="10"
                                        class=" form-control wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required
                                        @error('content') is-invalid @enderror"
                                        placeholder="Chi tiết yêu cầu">{{old('content')}}</textarea>
                                     @error('content') <span class="text-danger">{{$message}}</span> @enderror
                                </span>
                                <br/>
                            </div>
                            <input type="submit" value="Gửi yêu cầu"
                                   class="wpcf7-form-control has-spinner wpcf7-submit"/></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <p><code>
                <iframe loading="lazy" style="border: 0;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1840.1370384767836!2d105.80038802367397!3d20.99951838146216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1898445f4bb28d62!2zTuG7mWkgVGjhuqV0IFZOIEx1eHVyeQ!5e0!3m2!1svi!2s!4v1645631932505!5m2!1svi!2s"
                        width="600" height="450" allowfullscreen="allowfullscreen"></iframe>
            </code></p>
    </div>
@stop

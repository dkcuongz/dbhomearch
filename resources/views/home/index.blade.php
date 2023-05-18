@extends('layouts.frontend')

@section('title', 'Trang chủ - Nội Thất DBHome')
@section('content')
    <div id="content" role="main" class="content-area">
        @include('components.banner')
        <div class="page-main">
            <div class="about-page row pt-xl-5">
                <div class="content col-12 col-md-6">
                    <div class="contain wow"
                         style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <h3 class="title">CHÚNG TÔI LÀ AI?</h3>
                        <p>Với DBHOME, chúng tôi không chỉ xem mình là những người kể chuyện và mang những tình tiết
                            trong
                            “câu chuyện” ấy hiện hữu trong từng công trình,
                            yếu tố quan trọng nhất với DBHOME vẫn sẽ luôn là “con người”. Bởi sau cùng, tất cả những cảm
                            hứng,
                            những sáng tạo, một khi chúng xoay quanh “con người” thì tất cả đều là sẽ những ý tưởng tinh
                            tế
                            nhất, nhân văn nhất.
                            Một bản thiết kế chỉ thật sự có giá trị khi chúng sinh ra vì con người,
                            khi chúng cân bằng được giữa khao khát và hiện thực để từ đó tạo nên một công trình không
                            chỉ
                            còn là “trong mơ” cho từng gia chủ: đó có thể là nhà,
                            là nơi chốn đi về, hoặc cũng có thể là một nhà hàng, một quán cà phê,… nơi gia gia đủ đặt
                            viên
                            gạch đầu tiên trong sự nghiệp của mình. </p>

                        <p>Chính vì vậy, ngay từ khi mới bắt đầu những bước đầu tiên,
                            DBHOME đã luôn duy trì định hướng ấy cho đến tận hôm nay khi đã đồng hành cùng khách hàng
                            qua
                            hàng trăm công trình lớn nhỏ.</p></div>
                </div>
                <div class="about-image wow animate__fadeInRight col-12 col-md-6 mb-5" data-wow-duration=".5s"
                     style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInRight;">
                    <img src="{{asset('images-UI/what-we-do.png')}}" alt="Giới thiệu">
                </div>
                <div class="d-flex justify-center">
                    <button id="click-to-show" class="click-to-show">Xem thêm</button>
                </div>
                <div class="show-more hidden row">
                    <div class="about-image-multi wow col-12 col-md-6">
                        <div class="img-pos01">
                            <img src="{{asset('images-UI/about-09-1.png')}}" alt="Giới thiệu">
                        </div>
                        <div class="img-pos02">
                            <img src="{{asset('images-UI/about-10-1.png')}}" alt="Giới thiệu">
                        </div>
                    </div>
                    <div class="content ltr col-12 col-md-6">
                        <div class="contain wow" data-wow-duration=".5s" data-wow-delay=".3s"
                             style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <h3 class="title">VỀ CHÚNG TÔI</h3>
                            <p></p>
                            <p>Với đội ngũ giàu kinh nghiệm cùng với các bạn trẻ ham học hỏi và sáng tạo những cái mới,
                                DBHOME đi tiên phong trong việc nghiên cứu ứng dụng công nghệ và vật liệu mới trong công
                                cuộc
                                hành nghề của mình. Chúng tôi tin tưởng rằng, với thế mạnh nổi trội của
                                DBHOME thể hiện ở đội ngũ thiết kế sáng tạo và quy trình quản lý chặt chẽ sẽ cung cấp
                                dịch vụ
                                tốt nhất, đáp ứng mọi nhu cầu và mang lại sự hài lòng đến với mọi khách hàng.</p>
                            <p>Từ đó, DBHOME không chỉ là một người bạn đồng hành thuần tuý mà chúng tôi luôn đặt mục
                                tiêu để trở thành một người bạn đủ thông minh và thấu hiểu để mang đến những giải pháp,
                                những
                                lựa chọn tốt nhất cho từng khách hàng.</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-more hidden">
                <div class="about-waypoint row">
                    <div class="about-image wow animate__fadeInLeft col-12 col-md-6" data-wow-duration=".5s"
                         style="visibility: hidden; animation-duration: 0.5s; animation-name: none;">
                        <img src="{{asset('images-UI/about-07.png')}}" alt="">
                    </div>
                    <div class="waypoint-block col-12 col-md-6">
                        <div class="about-image pos wow animate__fadeInRight" data-wow-duration=".5s"
                             style="visibility: hidden; animation-duration: 0.5s; animation-name: none;">
                            <img src="{{asset('images-UI/about-08.png')}}" alt="">
                        </div>
                    </div>
                    <div class="team-profile">
                        <div class="content col-12 col-md-6">
                            <div class="contain wow animate__fadeInUp">
                                <h3 class="title">ĐỘI NGŨ CỦA CHÚNG TÔI</h3>
                                <p style="color: #282828;">Con người đóng vai trò quan trọng để làm nên thành công trong
                                    suốt
                                    gần một thập kỷ qua của <span class="font-weight-bold">DBHOME</span>.
                                    Đội ngũ nhân viên tại <span class="font-weight-bold">DBHOME</span> với chuyên môn
                                    giỏi
                                    về thiết kế và thi công công trình đã
                                    được công nhận năng lực đồng thời được xem là một công ty phát triển nhanh và uy
                                    tín.
                                </p></div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            @include('components.summary-content')
            <section class="section .cat-1" id="section_1670075441">
                <div class="bg section-bg fill bg-fill  ">
                    <div class="section-bg-overlay absolute fill"></div>
                </div>
                <div class="section-content relative">
                    <div class="row row-small" id="row-2119917499">
                        <div id="col-587202287" class="col small-12 large-12">
                            <div class="col-inner">
                                <h3 style="text-align: center;">
                                <span style="color: #daa520; font-size: 120%;">THIẾT KẾ TIÊU BIỂU<br/>
                                    <img loading="lazy"
                                         class="aligncenter wp-image-109"
                                         src="{{ asset('images-UI/line.png') }}"
                                         alt="" width="72"
                                         height="5"/>
                                </span>
                                </h3>
                                <div
                                    class="row large-columns-4 medium-columns-1 small-columns-2 row-small has-shadow row-box-shadow-1">
                                    @foreach($posts_out_standings as $posts_out_standing)
                                        <div class="col post-item" data-animate="fadeInUp">
                                            <div class="col-inner">
                                                <a href="{{route('front.du-an.detail', [$posts_out_standing->category->slug ?? '', $posts_out_standing->id])}}"
                                                   class="plain">
                                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            <div class="image-cover" style="padding-top:75%;">
                                                                <img width="300" height="225"
                                                                     src="{{asset($posts_out_standing->image->path ?? 'images-UI/notfound.jpg')}}"
                                                                     class="attachment-medium size-medium wp-post-image"
                                                                     sizes="(max-width: 300px) 100vw, 300px"/></div>
                                                        </div>
                                                        <div class="box-text text-center">
                                                            <div class="box-text-inner blog-post-inner">
                                                                <h5 class="post-title is-large ">{{$posts_out_standing->title}}</h5>
                                                                <div class="is-divider"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="gap-252482128" class="gap-element clearfix"
                                     style="display:block; height:auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section .cat-1" id="section_1670075441">
                <div class="bg section-bg fill bg-fill  ">
                    <div class="section-bg-overlay absolute fill"></div>
                </div>
                <div class="section-content relative">
                    <div class="row row-small" id="row-2119917499">
                        <div id="col-587202287" class="col small-12 large-12">
                            <div class="col-inner">
                                <h3 style="text-align: center;">
                                <span style="color: #daa520; font-size: 120%;">THIẾT KẾ MỚI<br/>
                                    <img loading="lazy"
                                         class="aligncenter wp-image-109"
                                         src="{{ asset('images-UI/line.png') }}"
                                         alt="" width="72"
                                         height="5"/>
                                </span>
                                </h3>
                                <div
                                    class="row large-columns-4 medium-columns-1 small-columns-2 row-small has-shadow row-box-shadow-1">
                                    @foreach($posts as $post)
                                        <div class="col post-item" data-animate="fadeInUp">
                                            <div class="col-inner">
                                                <a href="{{route('front.du-an.detail', [$post->category->slug ?? '', $post->id])}}"
                                                   class="plain">
                                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            <div class="image-cover" style="padding-top:75%;">
                                                                <img width="300" height="225"
                                                                     src="{{asset($post->image->path ?? 'images-UI/notfound.jpg')}}"
                                                                     class="attachment-medium size-medium wp-post-image"
                                                                     sizes="(max-width: 300px) 100vw, 300px"/></div>
                                                        </div>
                                                        <div class="box-text text-center">
                                                            <div class="box-text-inner blog-post-inner">
                                                                <h5 class="post-title is-large ">{{$post->title}}</h5>
                                                                <div class="is-divider"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="gap-252482128" class="gap-element clearfix"
                                     style="display:block; height:auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('components.form-contact')
            <section class="section .cat-1" id="section_1670075441">
                <div class="bg section-bg fill bg-fill  ">
                    <div class="section-bg-overlay absolute fill"></div>
                </div>
                <div class="section-content relative">
                    <div class="row row-small" id="row-2119917499">
                        <div id="col-587202287" class="col small-12 large-12">
                            <div class="col-inner">
                                <h3 style="text-align: center;">
                                <span style="color: #daa520; font-size: 120%;">CÔNG TRÌNH THỰC TẾ TIÊU BIỂU<br/>
                                    <img loading="lazy"
                                         class="aligncenter wp-image-109"
                                         src="{{ asset('images-UI/line.png') }}"
                                         alt="" width="72"
                                         height="5"/>
                                </span>
                                </h3>
                                <div
                                    class="row large-columns-4 medium-columns-1 small-columns-2 row-small has-shadow row-box-shadow-1">
                                    @foreach($posts_reality as $post_reality)
                                        <div class="col post-item" data-animate="fadeInUp">
                                            <div class="col-inner">
                                                <a href="{{route('front.du-an.detail', [$post_reality->category->slug ?? '', $post_reality->id])}}"
                                                   class="plain">
                                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            <div class="image-cover" style="padding-top:75%;">
                                                                <img width="300" height="225"
                                                                     src="{{asset($post_reality->image->path ?? 'images-UI/notfound.jpg')}}"
                                                                     class="attachment-medium size-medium wp-post-image"
                                                                     sizes="(max-width: 300px) 100vw, 300px"/></div>
                                                        </div>
                                                        <div class="box-text text-center">
                                                            <div class="box-text-inner blog-post-inner">
                                                                <h5 class="post-title is-large ">{{$post_reality->title}}</h5>
                                                                <div class="is-divider"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="gap-252482128" class="gap-element clearfix"
                                     style="display:block; height:auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('components.news')
        </div>
    </div>
    @push('js')
        <script type="text/javascript">
            $(document).ready(function (e) {
                $('#click-to-show').click(function () {
                    $('.show-more').removeClass('hidden')
                    $('#click-to-show').addClass('hidden')
                });
            });
        </script>
    @endpush
@stop

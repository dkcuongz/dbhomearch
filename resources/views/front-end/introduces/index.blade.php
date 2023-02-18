@extends('layouts.frontend')

@section('title', 'Giới thiệu')

@section('content_header')
    <h1 class="m-0 text-dark">Giới thiệu</h1>
@stop

@section('content')
    <div class="page-main">
        <div class="about-page row pt-xl-5">
            <div class="content col-12 col-md-6">
                <div class="contain wow animate__fadeInUp" data-wow-duration=".5s"
                     style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                    <h3 class="title">CHÚNG TÔI LÀ AI?</h3>
                    <!-- wp:paragraph -->
                    <p>Với DBHOME, chúng tôi không chỉ xem mình là những người kể chuyện và mang những tình tiết trong
                        “câu chuyện” ấy hiện hữu trong từng công trình,
                        yếu tố quan trọng nhất với DBHOME vẫn sẽ luôn là “con người”. Bởi sau cùng, tất cả những cảm
                        hứng,
                        những sáng tạo, một khi chúng xoay quanh “con người” thì tất cả đều là sẽ những ý tưởng tinh tế
                        nhất, nhân văn nhất.
                        Một bản thiết kế chỉ thật sự có giá trị khi chúng sinh ra vì con người,
                        khi chúng cân bằng được giữa khao khát và hiện thực để từ đó tạo nên một công trình không chỉ
                        còn là “trong mơ” cho từng gia chủ: đó có thể là nhà,
                        là nơi chốn đi về, hoặc cũng có thể là một nhà hàng, một quán cà phê,… nơi gia gia đủ đặt viên
                        gạch đầu tiên trong sự nghiệp của mình. </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>Chính vì vậy, ngay từ khi mới bắt đầu những bước đầu tiên,
                        DBHOME đã luôn duy trì định hướng ấy cho đến tận hôm nay khi đã đồng hành cùng khách hàng qua
                        hàng trăm công trình lớn nhỏ.</p>
                    <!-- /wp:paragraph -->            </div>
            </div>
            <div class="about-image wow animate__fadeInRight col-12 col-md-6" data-wow-duration=".5s"
                 style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInRight;">
                <img src="{{asset('images-UI/what-we-do.png')}}" alt="Giới thiệu">
            </div>
            <div class="about-image-multi wow animate__fadeInLeft col-12 col-md-6" data-wow-duration=".5s"
                 data-wow-delay=".5s"
                 style="visibility: hidden; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: none;">
                <div class="img-pos01">
                    <img src="{{asset('images-UI/about-09-1.png')}}" alt="Giới thiệu">
                </div>
                <div class="img-pos02">
                    <img src="{{asset('images-UI/about-10-1.png')}}" alt="Giới thiệu">
                </div>
            </div>
            <div class="content ltr col-12 col-md-6">
                <div class="contain wow animate__fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s"
                     style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h3 class="title">VỀ CHÚNG TÔI</h3>
                    <p></p>
                    <p>Với đội ngũ giàu kinh nghiệm cùng với các bạn trẻ ham học hỏi và sáng tạo những cái mới,
                        DBHOME đi tiên phong trong việc nghiên cứu ứng dụng công nghệ và vật liệu mới trong công cuộc
                        hành nghề của mình. Chúng tôi tin tưởng rằng, với thế mạnh nổi trội của
                        DBHOME thể hiện ở đội ngũ thiết kế sáng tạo và quy trình quản lý chặt chẽ sẽ cung cấp dịch vụ
                        tốt nhất, đáp ứng mọi nhu cầu và mang lại sự hài lòng đến với mọi khách hàng.</p>
                    <p>Từ đó, DBHOME không chỉ là một người bạn đồng hành thuần tuý mà chúng tôi luôn đặt mục
                        tiêu để trở thành một người bạn đủ thông minh và thấu hiểu để mang đến những giải pháp, những
                        lựa chọn tốt nhất cho từng khách hàng.</p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="about-waypoint row">
            <div class="about-image wow animate__fadeInLeft col-12 col-md-6" data-wow-duration=".5s"
                 style="visibility: hidden; animation-duration: 0.5s; animation-name: none;">
                <img src="{{asset('images-UI/about-07.png')}}" alt="">
            </div>
            <div class="waypoint-block col-12 col-md-6">
                {{--                <div class="content">--}}
                {{--                    <div class="box">--}}
                {{--                        <div class="number"><span class="counter">6</span><span>+</span></div>--}}
                {{--                        <div class="text">số năm kinh nghiệm của cty</div>--}}
                {{--                    </div>--}}
                {{--                    <div class="box">--}}
                {{--                        <div class="number"><span class="counter">120</span></div>--}}
                {{--                        <div class="text">tổng số dự án hoàn thành</div>--}}
                {{--                    </div>--}}
                {{--                    <div class="box">--}}
                {{--                        <div class="number"><span class="counter">60</span><span>+</span></div>--}}
                {{--                        <div class="text">tổng số clients/ partner</div>--}}
                {{--                    </div>--}}
                {{--                    <div class="box">--}}
                {{--                        <div class="number"><span class="counter">2016</span></div>--}}
                {{--                        <div class="text">năm thành lập cty</div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="about-image pos wow animate__fadeInRight" data-wow-duration=".5s"
                     style="visibility: hidden; animation-duration: 0.5s; animation-name: none;">
                    <img src="{{asset('images-UI/about-08.png')}}" alt="">
                </div>
            </div>
            <div class="team-profile">
                <div class="content col-12 col-md-6">
                    <div class="contain wow animate__fadeInUp" data-wow-duration=".5s"
                         style="visibility: hidden; animation-duration: 0.5s; animation-name: none;">
                        <h3 class="title">ĐỘI NGŨ CỦA CHÚNG TÔI</h3>
                        <p style="color: #282828;">Con người đóng vai trò quan trọng để làm nên thành công trong suốt
                            gần một thập kỷ qua của <span class="font-weight-bold">DBHOME</span>.
                            Đội ngũ nhân viên tại <span class="font-weight-bold">DBHOME</span> với chuyên môn giỏi về thiết kế và thi công công trình đã
                            được công nhận năng lực đồng thời được xem là một công ty phát triển nhanh và uy tín.
                        </p></div>
                </div>
                <div class="folio-slide pt-xl-5 col-12 col-md-12">
                    <div
                        class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-5549eaf3da6bcd64" aria-live="polite"
                             style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide wow animate__fadeInUp swiper-slide-active" data-wow-duration=".5s"
                                 data-wow-delay="0s" role="group" aria-label="1 / 1"
                                 style="width: 336.25px; visibility: hidden; animation-duration: 0.5s; animation-delay: 0s; animation-name: none; margin-right: 100px;">
                                <img src="{{asset('images-UI/team.png')}}" alt="NGUYỄN NHƯ Ý">
                                <div class="caption">
                                    <div style="font-size: 22px; color: #282828;" class="ceo">CEO</div>
                                    <div style="font-size: 22px; color: #282828;" class="name">ĐỖ ĐĂNG BÌNH</div>
                                    <div style="font-size: 22px; color: #282828;" class="level">Interior Designer</div>
                                    <div class="email">
                                        <a href="mailto:ynguyen.tdarch@gmail.com">noithatdbhome.arch@gmail.com</a>
                                    </div>
                                    <div class="phone">
                                        <a href="tel:0985530554">+ 094 310 24 68</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev-custom swiper-button swiper-button-disabled swiper-button-lock"
                         tabindex="-1" role="button" aria-label="Previous slide"
                         aria-controls="swiper-wrapper-5549eaf3da6bcd64" aria-disabled="true"></div>
                    <div class="swiper-button-next-custom swiper-button swiper-button-disabled swiper-button-lock"
                         tabindex="-1" role="button" aria-label="Next slide"
                         aria-controls="swiper-wrapper-5549eaf3da6bcd64"
                         aria-disabled="true"></div>
                </div>
            </div>
        </div>
@stop

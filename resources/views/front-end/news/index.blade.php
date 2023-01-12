@extends('layouts.frontend')

@section('title', 'Tin tức - Blog')

@section('content_header')
    <h1 class="m-0 text-dark">Tin tức - Blog</h1>
@stop

@section('content')
    <div id="content" class="blog-wrapper blog-archive page-wrapper">
        <div class="row align-center">
            <div class="large-10 col">
                <div id="row-623969400" class="row large-columns-3 medium-columns- small-columns-1 row-masonry">
                    @foreach($news as $new)
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="../../teambuilding-cam-trai-ngoai-troi-ho-dong-do-soc-son/index.html"
                                   class="plain">
                                    <div class="box box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56%;">
                                                <img width="300" height="135"
                                                     src="../../wp-content/uploads/2022/09/z3747465193455_589a95660dea9bc05e0b2070575eac17-300x135.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/></div>
                                        </div>
                                        <div class="box-text text-center">
                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Teambuilding: Cắm trại ngoài trời hồ
                                                    Đồng
                                                    Đò- Sóc Sơn</h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">Tháng 9-2022 vừa qua, toàn thể thành
                                                    viên
                                                    DBHome đã có buổi cắm trại </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="../../to-chuc-ngay-quoc-te-phu-nu-8-3-nam-2022/index.html" class="plain">
                                    <div class="box box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56%;">
                                                <img width="300" height="158"
                                                     src="../../wp-content/uploads/2022/03/z3243187804611_75c6a43b6638e8ee669386cd5108257f-1-300x158.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     loading="lazy"
                                                     srcset="https://noithatvnluxury.vn/wp-content/uploads/2022/03/z3243187804611_75c6a43b6638e8ee669386cd5108257f-1-300x158.jpg 300w, https://noithatvnluxury.vn/wp-content/uploads/2022/03/z3243187804611_75c6a43b6638e8ee669386cd5108257f-1-1024x539.jpg 1024w, https://noithatvnluxury.vn/wp-content/uploads/2022/03/z3243187804611_75c6a43b6638e8ee669386cd5108257f-1-768x404.jpg 768w, https://noithatvnluxury.vn/wp-content/uploads/2022/03/z3243187804611_75c6a43b6638e8ee669386cd5108257f-1.jpg 1263w"
                                                     sizes="(max-width: 300px) 100vw, 300px"/></div>
                                        </div>
                                        <div class="box-text text-center">
                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">Tổ chức ngày quốc tế phụ nữ 8-3 năm
                                                    2022</h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">Tổ chức ngày quốc tế phụ nữ 8-3 năm
                                                    2022
                                                    Nhân dịp ngày quốc tế </p>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop

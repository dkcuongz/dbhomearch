@extends('layouts.frontend')

@section('title', 'Trang chủ - Nội Thất DBHome')
@section('content')
    <div id="content" role="main" class="content-area">
        @include('components.banner')
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
                                            <a href="{{route('front.du-an.detail', $post->id)}}" class="plain">
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
                            <div id="gap-252482128" class="gap-element clearfix" style="display:block; height:auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('components.form-contact')
        @include('components.news')
    </div>
@stop

@extends('layouts.frontend')

@section('title', 'Thiết kế nội thất')

@section('content_header')
    <h1 class="m-0 text-dark">Thiết kế nội thất</h1>
@stop

@section('content')
    <div id="content" class="blog-wrapper blog-archive page-wrapper">

        <div class="row align-center">
            <div class="large-10 col">
                <div id="row-1983341037" class="row large-columns-3 medium-columns- small-columns-1 row-masonry">
                    @foreach($interiors as $interior)
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="{{route('front.thiet-ke-noi-that.detail',[$interior->category->slug ?? '', $interior->id])}}"
                                   class="plain">
                                    <div class="box box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56%;">
                                                <img width="300" height="188"
                                                     src="{{asset($interior->image->path ?? 'images-UI/notfound.jpg')}}"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/></div>
                                        </div>
                                        <div class="box-text text-center">
                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large">{{$interior->title}}</h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">&nbsp; </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $interiors->links('pagination.default') !!}
            </div>

        </div>

    </div>
@stop

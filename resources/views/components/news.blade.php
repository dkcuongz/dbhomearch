<section class="section tin-tuc-moi-nhat" id="section_547799504">
    <div class="bg section-bg fill bg-fill  ">
        <div class="section-bg-overlay absolute fill"></div>
    </div>
    <div class="section-content relative">
        <div class="row row-small" id="row-1533089032">
            <div id="col-2132860783" class="col small-12 large-12">
                <div class="col-inner">


                    <h3 style="text-align: center;"><span
                            style="color: #daa520; font-size: 120%;">TIN TỨC<br/><img
                                class="aligncenter wp-image-109"
                                src="{{ asset('images-UI/line.png') }}"
                                width="70" height="5"/></span></h3>
                    <div id="gap-72504431" class="gap-element clearfix" style="display:block; height:auto;">
                    </div>
                    <div
                        class="row large-columns-4 medium-columns-1 small-columns-3 has-shadow row-box-shadow-1 slider row-slider slider-nav-reveal slider-nav-push"
                        data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                        @foreach($news as $new)
                            <div class="col post-item">
                                <div class="col-inner">
                                    <a href="{{route('front.tin-tuc-blog.detail',[$new->category->slug ?? '', $new->id])}}" class="plain">
                                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                            <div class="box-image">
                                                <div class="image-cover" style="padding-top:75%;">
                                                    <img width="300" height="225"
                                                         src="{{asset($new->image->path ?? 'images-UI/notfound.jpg')}}"
                                                         class="attachment-medium size-medium wp-post-image" alt=""/></div>
                                            </div>
                                            <div class="box-text text-center">
                                                <div class="box-text-inner blog-post-inner">
                                                    <h5 class="post-title is-large ">{{$new->title}}</h5>
                                                    <div class="post-meta is-small op-8">{{$new->created_at}}</div>
                                                    <div class="is-divider"></div>
                                                    <p class="from_the_blog_excerpt "></p>
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
    </div>
</section>

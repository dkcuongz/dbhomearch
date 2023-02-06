<div class="slider-wrapper relative" id="slider-2066641688">
    <div class="slider slider-nav-simple slider-nav-normal slider-nav-light slider-style-normal"
         data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 3000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'
    >
        @foreach($banners as $banner)
            <div class="banner has-hover" id="banner-814651861">
                <img src="{{asset($banner->image->path ?? 'images-UI/notfound.jpg')}}"
                     alt="" style="position: absolute; top: 0%">
                <div class="banner-inner fill">
                    <div class="banner-bg fill">
                        <div class="bg fill bg-fill "></div>
                        <div class="overlay"></div>
                    </div>
                    <div class="banner-layers container">
                        <div class="fill banner-link"></div>
                        <div id="text-box-747700104"
                             class="text-box banner-layer x80 md-x80 lg-x80 y50 md-y50 lg-y50 res-text">
                            <div class="text-box-content text dark">
                                <div class="text-inner text-center">
                                    <h3 class="uppercase">{{$banner->title}}</h3>
                                    <p>{{$banner->description}}</p>
                                    <a href="{{route('front.thiet-ke-noi-that')}}" target="_self"
                                       class="button white is-outline">
                                        <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="loading-spin dark large centered"></div>
</div>

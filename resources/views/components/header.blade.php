<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="masthead" class="header-main nav-dark">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="{{route('front.home')}}" title="Nội Thất Dbhome - Đi đầu chất lượng" rel="home">
                        <img width="1020" height="515"
                             src="{{asset('images-UI/logo-01.png')}}"
                             class="header-logo-dark"
                             alt="Nội Thất Dbhome"/></a>
                </div>
                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color=""
                               class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-outline nav-size-medium nav-uppercase">
                        @foreach ($categories as $subcategory)
                            @include('front-end.categories.categories', ['parent_slug'=>$subcategory->slug,'category' => $subcategory, 'hasChildren' => count($subcategory->allLevelChildrenWithSubChild) > 0 ? true : false])
                        @endforeach
                    </ul>
                </div>
                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-outline nav-size-medium nav-uppercase">
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative is-normal">
                                    <form method="get" class="searchform" action="{{route('front.search.project')}}"
                                          role="search">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <input type="search" class="mb-0" name="search" value=""
                                                       id="search"
                                                       placeholder="Search&hellip;"/>
                                            </div>
                                            <div class="flex-col">
                                                <button type="submit"
                                                        class="ux-search-submit submit-button secondary button icon mb-0"
                                                        aria-label="Submit">
                                                    <i class="icon-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="live-search-results text-left z-top">
                                            <div class="autocomplete-suggestions" id="result-search"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="#" aria-label="Search" class="is-small"><i class="icon-search"></i></a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative is-normal">
                                            <form method="get" class="searchform" action="" role="search">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="mb-0" name="search" value=""
                                                               id="search" placeholder="Search&hellip;"/>
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit"
                                                                class="ux-search-submit submit-button secondary button icon mb-0"
                                                                aria-label="Submit">
                                                            <i class="icon-search"></i></button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="live-search-results text-left z-top">
                                                    <div class="autocomplete-suggestions" id="result-search"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>

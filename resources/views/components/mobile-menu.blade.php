<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
            @foreach ($categories as $subcategory)
                @include('front-end.categories.mobile-menu', ['parent_slug'=>$subcategory->slug,'category' => $subcategory, 'hasChildren' => count($subcategory->allLevelChildrenWithSubChild) > 0 ? true : false])
            @endforeach
            <li class="header-divider"></li>
        </ul>
    </div>
</div>

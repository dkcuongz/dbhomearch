<!-- Displaying the current category -->
<li id="menu-item"
    class="menu-item @if($hasChildren) {{'menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1369 menu-item-design-default has-dropdown'}}@endif">
    <a href="@if(!$hasChildren && $category->parent_id != 0) {{route("front.$parent_slug.child",$category->slug)}}
    @else{{route("front.$category->slug")}} @endif"
       aria-current="page" class="nav-top-link">{{ $category->name}}
        @if($hasChildren) <i class="icon-angle-down"></i> @endif</a>
    <!-- If category has children -->
    @if (count($category->allLevelChildrenWithSubChild) > 0)
        <ul class="sub-menu nav-dropdown nav-dropdown-default">
            @foreach ($category->allLevelChildrenWithSubChild as $sub)
                @include('front-end.categories.categories', ['parent_slug' => $parent_slug,'category' => $sub,'hasChildren' => count($sub->allLevelChildrenWithSubChild) > 0 ? true : false])
            @endforeach
        </ul>
    @endif

</li>

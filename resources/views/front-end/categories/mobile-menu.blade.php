<li id="menu-item"
    class="menu-item menu-item-type-post_type menu-item-object-page @if($hasChildren) {{'menu-item-has-children'}}@endif">
    <a href="@if(!$hasChildren && $category->parent_id != 0) {{route("front.$parent_slug.child",$category->slug)}}
    @else{{route("front.$category->slug")}} @endif"
       aria-current="page" class="nav-top-link">{{ $category->name}}
        @if($hasChildren) @endif</a>
    <!-- If category has children -->
    @if (count($category->allLevelChildrenWithSubChild) > 0)
        <ul class="sub-menu nav-sidebar-ul children">
            @foreach ($category->allLevelChildrenWithSubChild as $sub)
                @include('front-end.categories.categories', ['parent_slug' => $parent_slug,'category' => $sub,'hasChildren' => count($sub->allLevelChildrenWithSubChild) > 0 ? true : false])
            @endforeach
        </ul>
    @endif
</li>

<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li class="navigation-header"><span>Menu</span> <i class="icon-menu" title="Menu"></i></li>
                    <li class="@yield('home')"><a href="{{url('/')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    @foreach($menus as $menu)
                    <li class="@yield($menu->url)"><a href="{{url($menu->url)}}"><i class="{{$menu->class}}"></i><span>{{$menu->titulo}}</span></a></li>
                    @endforeach
                    <!-- /page kits -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>
<!-- /main sidebar -->

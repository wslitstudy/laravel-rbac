<aside class="sidebar collapsible canvas-left">
    <div class="scroll-menu">

        <nav class="main-navigation slimscroll" data-height="auto" data-size="4px" data-color="#ddd" data-distance="0">
            <ul id="left-menu">
                <li><a href="/admin/index"><i class="fa fa-home"></i><span>后台首页</span></a></li>
                @foreach($menus as $menu)
                    @if($menu->getLevel() == 1)
                        <li class="dropdown">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="{{ config('app.menu_icon')[$menu->getShrotName()] ?? '' }}"></i><span>{{ $menu->getShrotName() }}</span><i
                                        class="toggle-accordion"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($menus as $child)
                                    @if($child->getParentId() == $menu->getId())

                                        <li @if($child->getCurrutPath() == $child->getUrl()) class="active" @endif><a
                                                    href="{{ $child->getUrl() }}"><span>{{ $child->getShrotName() }}</span></a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
    <footer>
        <div class="footer-toolbar pull-left">
            <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                <i class="fa fa-angle-left"></i>
            </a>
        </div>
    </footer>
    <script>
        $(function () {
            $("#left-menu").find('.dropdown').each(function () {
                if ($(this).find('li').hasClass('active')) {
                    $(this).addClass('collapse-open open');
                }else{
                    $(this).removeClass('collapse-open open');
                }
            })
        })
    </script>
</aside>
<!-- main menu-->
<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
<div data-active-color="white" data-background-color="" data-image=""
     class="app-sidebar">
    <!-- main menu header-->
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
        <div class="logo clearfix"><a href="/" class="logo-text float-left">
                <div class="logo-img"><img src="/app-assets/img/logo.png"/></div>
                <span class="text align-middle">Pragbotix</span></a><a id="sidebarToggle" href="javascript:;"
                                                                       class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
                        data-toggle="collapsed" class="ft-toggle-left toggle-icon"></i></a><a id="sidebarClose"
                                                                                              href="javascript:;"
                                                                                              class="nav-close d-block d-md-block d-lg-none d-xl-none"><i
                        class="ft-x"></i></a></div>
    </div>
    <!-- Sidebar Header Ends-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content ps-container ps-theme-default" data-ps-id="78d5349b-4b72-e1cc-15d0-e0ba4f60cdef">
        <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

                <li class=" nav-item"><a href="{{route('home')}}"><i class="ft-home"></i><span data-i18n=""
                                                                                               class="menu-title">Overview</span></a>
                </li>

                {{--<li class=" nav-item"><a href="color-palette.php"><i class="ft-feather"></i><span data-i18n=""--}}
                {{--class="menu-title">Farm</span></a>--}}
                {{--</li>--}}
                {{--<li class="has-sub nav-item @if(Route::currentRouteName() == 'farms') open @endif"><a--}}
                <li class="has-sub nav-item"><a
                            href="#"><i
                                class="ft-aperture"></i><span data-i18n=""
                                                              class="menu-title">Farm</span></a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{route('farms')}}" class="menu-item">Overview</a>
                        </li>
                        @foreach($fields as $name => $field)
                            <li><a href="/farm/{{$name}}/info" class="menu-item">{{$name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class=" nav-item"><a href="{{route('aerial')}}"><i class="ft-disc"></i><span data-i18n=""
                                                                                                 class="menu-title">Aerial</span></a>
                </li>
                <li class="nav-item"><a href="/report"><i class="ft-crosshair"></i><span data-i18n=""
                                                                                         class="menu-title">Report</span></a>

                </li>
                <li class="has-sub nav-item"><a href="#"><i class="ft-heart"></i><span data-i18n=""
                                                                                       class="menu-title">Status</span></a>
                    <ul class="menu-content">

                        <li><a href="/status/MapView" class="menu-item">Map View</a>
                        </li>
                        <li><a href="/status/TableView" class="menu-item">Table View</a>
                        </li>

                    </ul>
                </li>
                <li class=" nav-item"><a href="/compliences"><i class="ft-clipboard"></i><span data-i18n=""
                                                                                               class="menu-title">Compliences</span></a>
                </li>
                <li class=" nav-item"><a href="/contactus"><i class="ft-phone"></i><span data-i18n=""
                                                                                         class="menu-title">Contact us</span></a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user()->admin)
                    <li class=" nav-item"><a href="{{route('acl')}}"><i class="ft-lock"></i><span data-i18n=""
                                                                                                  class="menu-title">Access Management</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{route('debug')}}"><i class="ft-server"></i><span data-i18n=""
                                                                                                      class="menu-title">Debug</span></a>
                    </li>
                @else
                    <li class=" nav-item"><a href="{{route('settings',\Illuminate\Support\Facades\Auth::user()->id)}}"><i class="ft-settings"></i><span data-i18n=""
                                                                                                           class="menu-title">Profile</span></a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>
    <!-- main menu content-->
    <div class="sidebar-background"></div>
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->
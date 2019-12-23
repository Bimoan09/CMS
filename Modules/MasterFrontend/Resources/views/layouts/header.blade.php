   <!-- Header -->
            <header class="app-layout-header">
                <nav class="navbar navbar-default">
                    {{-- <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#header-navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button"
                                data-toggle="layout" data-action="sidebar_toggle">
                                <span class="sr-only">Toggle drawer</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="navbar-page-title">

                                Dashboard
                            </span>
                        </div> --}}

                        {{-- <div class="collapse navbar-collapse" id="header-navbar-collapse">
                            <!-- Header search form -->
                            <form class="navbar-form navbar-left app-search-form" role="search">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="search" id="search-input"
                                            placeholder="Search..." />
                                        <span class="input-group-btn">
                                            <button class="btn" type="button"><i
                                                    class="ion-ios-search-strong"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </form> --}}
{{-- 
                            <ul id="main-menu" class="nav navbar-nav navbar-left">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">English <span class="caret"></span></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">French</a></li>
                                        <li><a href="javascript:void(0)">German</a></li>
                                        <li><a href="javascript:void(0)">Italian</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Pages <span class="caret"></span></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">Analytics</a></li>
                                        <li><a href="javascript:void(0)">Visits</a></li>
                                        <li><a href="javascript:void(0)">Changelog</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- .navbar-left --> --}}

                            <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                <li>
                                    <!-- Opens the modal found at the bottom of the page -->
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i
                                            class="ion-grid"></i></a>
                                </li>

                                <li class="dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i>
                                        <span class="badge">3</span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header">Profile</li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)"><span
                                                    class="badge pull-right">3</span> News </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)"><span
                                                    class="badge pull-right">1</span> Messages </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">More</li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown dropdown-profile">
                                    <a href="javascript:void(0)" data-toggle="dropdown">
                                        <span class="m-r-sm">{{Auth::user()->name}} <span class="caret"></span></span>
                                        <img class="img-avatar img-avatar-48" src="{{asset('assets/img/avatars/avatar3.jpg')}}"
                                            alt="User profile pic" />
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header">
                                            Halaman
                                        </li>
                                        @if(Auth::user()->user_type == 'member')
                                        <li>
                                            <a href="{{route('member.profile', \Str::slug(Auth::user()->name))}}">Profile </a>
                                        </li>
                                        @elseif(Auth::user()->user_type == 'internaladmin')
                                        <li>
                                           <a href="{{route('admin.profile', \Str::slug(Auth::user()->name))}}">Profile </a>
                                        </li>
                                         @endif
                                        {{-- <li>
                                            <a href="base_pages_profile.html"><span
                                                    class="badge badge-success pull-right">3</span> Blog</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{route('post.logout')}}">Keluar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- .navbar-right -->
                        </div>
                    </div>
                    <!-- .container-fluid -->
                </nav>
                <!-- .navbar-default -->
            </header>
            <!-- End header -->
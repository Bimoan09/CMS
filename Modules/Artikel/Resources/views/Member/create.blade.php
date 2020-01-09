@extends('masterfrontend::layouts.main')

@section('title', 'Buat Artikel')



    <body class="animsition site-navbar-small ">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

        <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                    data-toggle="menubar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-bar"></span>
                </button>
                <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                    data-toggle="collapse">
                    <i class="icon md-more" aria-hidden="true"></i>
                </button>
                <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                    <img class="navbar-brand-logo" src="../../assets/images/logo.png" title="Remark">
                    <span class="navbar-brand-text hidden-xs-down"> Remark</span>
                </div>
                <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
                    data-toggle="collapse">
                    <span class="sr-only">Toggle Search</span>
                    <i class="icon md-search" aria-hidden="true"></i>
                </button>
            </div>

            <div class="navbar-container container-fluid">
                <!-- Navbar Collapse -->
                <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                    <!-- Navbar Toolbar -->
                    <ul class="nav navbar-toolbar">
                        <li class="nav-item hidden-float" id="toggleMenubar">
                            <a class="nav-link" data-toggle="menubar" href="#" role="button">
                                <i class="icon hamburger hamburger-arrow-left">
                                    <span class="sr-only">Toggle menubar</span>
                                    <span class="hamburger-bar"></span>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                            </a>
                        </li>
                        <li class="nav-item hidden-float">
                            <a class="nav-link icon md-search" data-toggle="collapse" href="#"
                                data-target="#site-navbar-search" role="button">
                                <span class="sr-only">Toggle Search</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-fw dropdown-mega">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false"
                                data-animation="fade" role="button">Mega <i class="icon md-chevron-down"
                                    aria-hidden="true"></i></a>
                            <div class="dropdown-menu" role="menu">
                                <div class="mega-content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5>UI Kit</h5>
                                            <ul class="blocks-2">
                                                <li class="mega-menu m-0">
                                                    <ul class="list-icons">
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../advanced/animation.html">Animation</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../uikit/buttons.html">Buttons</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../uikit/colors.html">Colors</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../uikit/dropdowns.html">Dropdowns</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../uikit/icons.html">Icons</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../advanced/lightbox.html">Lightbox</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu m-0">
                                                    <ul class="list-icons">
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../uikit/modals.html">Modals</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../uikit/panel-structure.html">Panels</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../structure/overlay.html">Overlay</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../uikit/tooltip-popover.html ">Tooltips</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../advanced/scrollable.html">Scrollable</a></li>
                                                        <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                                                href="../uikit/typography.html">Typography</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Media
                                                <span class="badge badge-pill badge-success">4</span>
                                            </h5>
                                            <ul class="blocks-3">
                                                <li>
                                                    <a class="thumbnail m-0" href="javascript:void(0)">
                                                        <img class="w-full" src="../../../global/photos/placeholder.png"
                                                            alt="..." />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="thumbnail m-0" href="javascript:void(0)">
                                                        <img class="w-full" src="../../../global/photos/placeholder.png"
                                                            alt="..." />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="thumbnail m-0" href="javascript:void(0)">
                                                        <img class="w-full" src="../../../global/photos/placeholder.png"
                                                            alt="..." />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="thumbnail m-0" href="javascript:void(0)">
                                                        <img class="w-full" src="../../../global/photos/placeholder.png"
                                                            alt="..." />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="thumbnail m-0" href="javascript:void(0)">
                                                        <img class="w-full" src="../../../global/photos/placeholder.png"
                                                            alt="..." />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="thumbnail m-0" href="javascript:void(0)">
                                                        <img class="w-full" src="../../../global/photos/placeholder.png"
                                                            alt="..." />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="mb-0">Accordion</h5>
                                            <!-- Accordion -->
                                            <div class="panel-group panel-group-simple" id="siteMegaAccordion"
                                                aria-multiselectable="true" role="tablist">
                                                <div class="panel">
                                                    <div class="panel-heading" id="siteMegaAccordionHeadingOne"
                                                        role="tab">
                                                        <a class="panel-title" data-toggle="collapse"
                                                            href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                                                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </div>
                                                    <div class="panel-collapse collapse" id="siteMegaCollapseOne"
                                                        aria-labelledby="siteMegaAccordionHeadingOne" role="tabpanel">
                                                        <div class="panel-body">
                                                            De moveat laudatur vestra parum doloribus labitur sentire
                                                            partes, eripuit praesenti
                                                            congressus ostendit alienae, voluptati ornateque accusamus
                                                            clamat reperietur convicia albucius.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-heading" id="siteMegaAccordionHeadingTwo"
                                                        role="tab">
                                                        <a class="panel-title collapsed" data-toggle="collapse"
                                                            href="#siteMegaCollapseTwo" data-parent="#siteMegaAccordion"
                                                            aria-expanded="false" aria-controls="siteMegaCollapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </div>
                                                    <div class="panel-collapse collapse" id="siteMegaCollapseTwo"
                                                        aria-labelledby="siteMegaAccordionHeadingTwo" role="tabpanel">
                                                        <div class="panel-body">
                                                            Praestabiliorem. Pellat excruciant legantur ullum leniter
                                                            vacare foris voluptate
                                                            loco ignavi, credo videretur multoque choro fatemur mortis
                                                            animus adoptionem, bello statuat expediunt naturales.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel">
                                                    <div class="panel-heading" id="siteMegaAccordionHeadingThree"
                                                        role="tab">
                                                        <a class="panel-title collapsed" data-toggle="collapse"
                                                            href="#siteMegaCollapseThree"
                                                            data-parent="#siteMegaAccordion" aria-expanded="false"
                                                            aria-controls="siteMegaCollapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </div>
                                                    <div class="panel-collapse collapse" id="siteMegaCollapseThree"
                                                        aria-labelledby="siteMegaAccordionHeadingThree" role="tabpanel">
                                                        <div class="panel-body">
                                                            Horum, antiquitate perciperet d conspectum locus obruamus
                                                            animumque perspici probabis
                                                            suscipere. Desiderat magnum, contenta poena desiderant
                                                            concederetur menandri damna disputandum corporum.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Accordion -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End Navbar Toolbar -->

                    <!-- Navbar Toolbar Right -->
                    <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)"
                                data-animation="scale-up" aria-expanded="false" role="button">
                                <span class="flag-icon flag-icon-us"></span>
                            </a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                    <span class="flag-icon flag-icon-gb"></span> English</a>
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                    <span class="flag-icon flag-icon-fr"></span> French</a>
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                    <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                    <span class="flag-icon flag-icon-de"></span> German</a>
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                    <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                                data-animation="scale-up" role="button">
                                <span class="avatar avatar-online">
                                    <img src="../../../global/portraits/5.jpg" alt="...">
                                    <i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                        class="icon md-account" aria-hidden="true"></i> Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                        class="icon md-card" aria-hidden="true"></i> Billing</a>
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                        class="icon md-settings" aria-hidden="true"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                        class="icon md-power" aria-hidden="true"></i> Logout</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                                aria-expanded="false" data-animation="scale-up" role="button">
                                <i class="icon md-notifications" aria-hidden="true"></i>
                                <span class="badge badge-pill badge-danger up">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                <div class="dropdown-menu-header">
                                    <h5>NOTIFICATIONS</h5>
                                    <span class="badge badge-round badge-danger">New 5</span>
                                </div>

                                <div class="list-group">
                                    <div data-role="container">
                                        <div data-role="content">
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <i class="icon md-receipt bg-red-600 white icon-circle"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">A new order has been placed</h6>
                                                        <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5
                                                            hours ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <i class="icon md-account bg-green-600 white icon-circle"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Completed the task</h6>
                                                        <time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2
                                                            days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <i class="icon md-settings bg-red-600 white icon-circle"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Settings updated</h6>
                                                        <time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2
                                                            days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <i class="icon md-calendar bg-blue-600 white icon-circle"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Event started</h6>
                                                        <time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3
                                                            days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <i class="icon md-comment bg-orange-600 white icon-circle"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Message received</h6>
                                                        <time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3
                                                            days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                        <i class="icon md-settings" aria-hidden="true"></i>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                        All notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
                                aria-expanded="false" data-animation="scale-up" role="button">
                                <i class="icon md-email" aria-hidden="true"></i>
                                <span class="badge badge-pill badge-info up">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                <div class="dropdown-menu-header" role="presentation">
                                    <h5>MESSAGES</h5>
                                    <span class="badge badge-round badge-info">New 3</span>
                                </div>

                                <div class="list-group" role="presentation">
                                    <div data-role="container">
                                        <div data-role="content">
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <span class="avatar avatar-sm avatar-online">
                                                            <img src="../../../global/portraits/2.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Mary Adams</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2017-06-17T20:22:05+08:00">30 minutes
                                                                ago</time>
                                                        </div>
                                                        <div class="media-detail">Anyways, i would like just do it</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <span class="avatar avatar-sm avatar-off">
                                                            <img src="../../../global/portraits/3.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Caleb Richards</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2017-06-17T12:30:30+08:00">12 hours
                                                                ago</time>
                                                        </div>
                                                        <div class="media-detail">I checheck the document. But there
                                                            seems</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <span class="avatar avatar-sm avatar-busy">
                                                            <img src="../../../global/portraits/4.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">June Lane</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2017-06-16T18:38:40+08:00">2 days ago</time>
                                                        </div>
                                                        <div class="media-detail">Lorem ipsum Id consectetur et minim
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item dropdown-item" href="javascript:void(0)"
                                                role="menuitem">
                                                <div class="media">
                                                    <div class="pr-10">
                                                        <span class="avatar avatar-sm avatar-away">
                                                            <img src="../../../global/portraits/5.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Edward Fletcher</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2017-06-15T20:34:48+08:00">3 days ago</time>
                                                        </div>
                                                        <div class="media-detail">Dolor et irure cupidatat commodo
                                                            nostrud nostrud.</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu-footer" role="presentation">
                                    <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                        <i class="icon md-settings" aria-hidden="true"></i>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                        See all messages
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" id="toggleChat">
                            <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
                                data-url="../site-sidebar.tpl">
                                <i class="icon md-comment" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Navbar Toolbar Right -->
                </div>
                <!-- End Navbar Collapse -->

                <!-- Site Navbar Seach -->
                <div class="collapse navbar-search-overlap" id="site-navbar-search">
                    <form role="search">
                        <div class="form-group">
                            <div class="input-search">
                                <i class="input-search-icon md-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                                <button type="button" class="input-search-close icon md-close"
                                    data-target="#site-navbar-search" data-toggle="collapse"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Site Navbar Seach -->
            </div>
        </nav>
        <div class="site-menubar">
            <div class="site-menubar-body">
                <div>
                    <div>
                        <ul class="site-menu" data-plugin="menu">
                            <li class="site-menu-category">General</li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" dropdown-badge="false">
                                    <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                                    <span class="site-menu-title">Layouts</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../layouts/grids.html">
                                            <span class="site-menu-title">Grid Scaffolding</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../layouts/layout-grid.html">
                                            <span class="site-menu-title">Layout Grid</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../layouts/headers.html">
                                            <span class="site-menu-title">Different Headers</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../layouts/panel-transition.html">
                                            <span class="site-menu-title">Panel Transition</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../layouts/boxed.html">
                                            <span class="site-menu-title">Boxed Layout</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../layouts/two-columns.html">
                                            <span class="site-menu-title">Two Columns</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../layouts/bordered-header.html">
                                            <span class="site-menu-title">Bordered Header</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Page Aside</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../layouts/aside-left-static.html">
                                                    <span class="site-menu-title">Left Static</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../layouts/aside-right-static.html">
                                                    <span class="site-menu-title">Right Static</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../layouts/aside-left-fixed.html">
                                                    <span class="site-menu-title">Left Fixed</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../layouts/aside-right-fixed.html">
                                                    <span class="site-menu-title">Right Fixed</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" dropdown-badge="false">
                                    <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                                    <span class="site-menu-title">Pages</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Errors</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/error-400.html">
                                                    <span class="site-menu-title">400</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/error-403.html">
                                                    <span class="site-menu-title">403</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/error-404.html">
                                                    <span class="site-menu-title">404</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/error-500.html">
                                                    <span class="site-menu-title">500</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/error-503.html">
                                                    <span class="site-menu-title">503</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/faq.html">
                                            <span class="site-menu-title">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/gallery.html">
                                            <span class="site-menu-title">Gallery</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/gallery-grid.html">
                                            <span class="site-menu-title">Gallery Grid</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/search-result.html">
                                            <span class="site-menu-title">Search Result</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Maps</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/map-google.html">
                                                    <span class="site-menu-title">Google Maps</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/map-vector.html">
                                                    <span class="site-menu-title">Vector Maps</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/maintenance.html">
                                            <span class="site-menu-title">Maintenance</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/forgot-password.html">
                                            <span class="site-menu-title">Forgot Password</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/lockscreen.html">
                                            <span class="site-menu-title">Lockscreen</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Login</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/login.html">
                                                    <span class="site-menu-title">Login</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/login-v2.html">
                                                    <span class="site-menu-title">Login V2</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/login-v3.html">
                                                    <span class="site-menu-title">Login V3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Register</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/register.html">
                                                    <span class="site-menu-title">Register</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/register-v2.html">
                                                    <span class="site-menu-title">Register V2</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/register-v3.html">
                                                    <span class="site-menu-title">Register V3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/user.html">
                                            <span class="site-menu-title">User List</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/invoice.html">
                                            <span class="site-menu-title">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/blank.html">
                                            <span class="site-menu-title">Blank Page</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Email</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/email-articles.html">
                                                    <span class="site-menu-title">Articles</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/email-welcome.html">
                                                    <span class="site-menu-title">Welcome</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/email-post.html">
                                                    <span class="site-menu-title">Post</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/email-thumbnail.html">
                                                    <span class="site-menu-title">Thumbnail</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/email-news.html">
                                                    <span class="site-menu-title">News</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/code-editor.html">
                                            <span class="site-menu-title">Code Editor</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Profile</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/profile.html">
                                                    <span class="site-menu-title">Profile</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/profile-v2.html">
                                                    <span class="site-menu-title">Profile V2</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../pages/profile-v3.html">
                                                    <span class="site-menu-title">Profile V3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/site-map.html">
                                            <span class="site-menu-title">Sitemap</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/project.html">
                                            <span class="site-menu-title">Project</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-category">Elements</li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" dropdown-badge="false">
                                    <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                                    <span class="site-menu-title">UI</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Basic UI</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item has-sub">
                                                <a href="javascript:void(0)">
                                                    <span class="site-menu-title">Panel</span>
                                                    <span class="site-menu-arrow"></span>
                                                </a>
                                                <ul class="site-menu-sub">
                                                    <li class="site-menu-item">
                                                        <a class="animsition-link" href="../uikit/panel-structure.html">
                                                            <span class="site-menu-title">Panel Structure</span>
                                                        </a>
                                                    </li>
                                                    <li class="site-menu-item">
                                                        <a class="animsition-link" href="../uikit/panel-actions.html">
                                                            <span class="site-menu-title">Panel Actions</span>
                                                        </a>
                                                    </li>
                                                    <li class="site-menu-item">
                                                        <a class="animsition-link" href="../uikit/panel-portlets.html">
                                                            <span class="site-menu-title">Panel Portlets</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/buttons.html">
                                                    <span class="site-menu-title">Buttons</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/cards.html">
                                                    <span class="site-menu-title">Cards</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/dropdowns.html">
                                                    <span class="site-menu-title">Dropdowns</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/icons.html">
                                                    <span class="site-menu-title">Icons</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/list.html">
                                                    <span class="site-menu-title">List</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/tooltip-popover.html">
                                                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/modals.html">
                                                    <span class="site-menu-title">Modals</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/tabs-accordions.html">
                                                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/images.html">
                                                    <span class="site-menu-title">Images</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/badges.html">
                                                    <span class="site-menu-title">Badges</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/progress-bars.html">
                                                    <span class="site-menu-title">Progress Bars</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/carousel.html">
                                                    <span class="site-menu-title">Carousel</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/typography.html">
                                                    <span class="site-menu-title">Typography</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/colors.html">
                                                    <span class="site-menu-title">Colors</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../uikit/utilities.html">
                                                    <span class="site-menu-title">Utilties</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Advanced UI</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item hidden-sm-down site-tour-trigger">
                                                <a href="javascript:void(0)">
                                                    <span class="site-menu-title">Tour</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/animation.html">
                                                    <span class="site-menu-title">Animation</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/highlight.html">
                                                    <span class="site-menu-title">Highlight</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/lightbox.html">
                                                    <span class="site-menu-title">Lightbox</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/scrollable.html">
                                                    <span class="site-menu-title">Scrollable</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/rating.html">
                                                    <span class="site-menu-title">Rating</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/context-menu.html">
                                                    <span class="site-menu-title">Context Menu</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/alertify.html">
                                                    <span class="site-menu-title">Alertify</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/masonry.html">
                                                    <span class="site-menu-title">Masonry</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/treeview.html">
                                                    <span class="site-menu-title">Treeview</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/toastr.html">
                                                    <span class="site-menu-title">Toastr</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/maps-vector.html">
                                                    <span class="site-menu-title">Vector Maps</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/maps-google.html">
                                                    <span class="site-menu-title">Google Maps</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/sortable-nestable.html">
                                                    <span class="site-menu-title">Sortable &amp; Nestable</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../advanced/bootbox-sweetalert.html">
                                                    <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Structure</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/alerts.html">
                                                    <span class="site-menu-title">Alerts</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/ribbon.html">
                                                    <span class="site-menu-title">Ribbon</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/pricing-tables.html">
                                                    <span class="site-menu-title">Pricing Tables</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/overlay.html">
                                                    <span class="site-menu-title">Overlay</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/cover.html">
                                                    <span class="site-menu-title">Cover</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/timeline-simple.html">
                                                    <span class="site-menu-title">Simple Timeline</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/timeline.html">
                                                    <span class="site-menu-title">Timeline</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/step.html">
                                                    <span class="site-menu-title">Step</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/comments.html">
                                                    <span class="site-menu-title">Comments</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/media.html">
                                                    <span class="site-menu-title">Media</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/chat.html">
                                                    <span class="site-menu-title">Chat</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/testimonials.html">
                                                    <span class="site-menu-title">Testimonials</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/nav.html">
                                                    <span class="site-menu-title">Nav</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/navbars.html">
                                                    <span class="site-menu-title">Navbars</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/blockquotes.html">
                                                    <span class="site-menu-title">Blockquotes</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/pagination.html">
                                                    <span class="site-menu-title">Pagination</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../structure/breadcrumbs.html">
                                                    <span class="site-menu-title">Breadcrumbs</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item has-sub active">
                                <a href="javascript:void(0)" dropdown-badge="false">
                                    <i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
                                    <span class="site-menu-title">Compents</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Forms</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/general.html">
                                                    <span class="site-menu-title">General Elements</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/material.html">
                                                    <span class="site-menu-title">Material Elements</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/advanced.html">
                                                    <span class="site-menu-title">Advanced Elements</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/layouts.html">
                                                    <span class="site-menu-title">Form Layouts</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/wizard.html">
                                                    <span class="site-menu-title">Form Wizard</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/validation.html">
                                                    <span class="site-menu-title">Form Validation</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/masks.html">
                                                    <span class="site-menu-title">Form Masks</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item has-sub">
                                                <a href="javascript:void(0)">
                                                    <span class="site-menu-title">Editors</span>
                                                    <span class="site-menu-arrow"></span>
                                                </a>
                                                <ul class="site-menu-sub">
                                                    <li class="site-menu-item">
                                                        <a class="animsition-link"
                                                            href="../forms/editor-summernote.html">
                                                            <span class="site-menu-title">Summernote</span>
                                                        </a>
                                                    </li>
                                                    <li class="site-menu-item">
                                                        <a class="animsition-link" href="../forms/editor-markdown.html">
                                                            <span class="site-menu-title">Markdown</span>
                                                        </a>
                                                    </li>
                                                    <li class="site-menu-item">
                                                        <a class="animsition-link" href="../forms/editor-ace.html">
                                                            <span class="site-menu-title">Ace Editor</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/image-cropping.html">
                                                    <span class="site-menu-title">Image Cropping</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../forms/file-uploads.html">
                                                    <span class="site-menu-title">File Uploads</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item has-sub active ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Tables</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/basic.html">
                                                    <span class="site-menu-title">Basic Tables</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/bootstrap.html">
                                                    <span class="site-menu-title">Bootstrap Tables</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/floatthead.html">
                                                    <span class="site-menu-title">floatThead</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/responsive.html">
                                                    <span class="site-menu-title">Responsive Tables</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/editable.html">
                                                    <span class="site-menu-title">Editable Tables</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/jsgrid.html">
                                                    <span class="site-menu-title">jsGrid</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/footable.html">
                                                    <span class="site-menu-title">FooTable</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item active">
                                                <a class="animsition-link" href="../tables/datatable.html">
                                                    <span class="site-menu-title">DataTables</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/jqtabledit.html">
                                                    <span class="site-menu-title">Jquery Tabledit</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../tables/table-dragger.html">
                                                    <span class="site-menu-title">Table Dragger</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Chart</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/chartjs.html">
                                                    <span class="site-menu-title">Chart.js</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/gauges.html">
                                                    <span class="site-menu-title">Gauges</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/flot.html">
                                                    <span class="site-menu-title">Flot</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/peity.html">
                                                    <span class="site-menu-title">Peity</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/sparkline.html">
                                                    <span class="site-menu-title">Sparkline</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/morris.html">
                                                    <span class="site-menu-title">Morris</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/chartist.html">
                                                    <span class="site-menu-title">Chartist.js</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/rickshaw.html">
                                                    <span class="site-menu-title">Rickshaw</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/pie-progress.html">
                                                    <span class="site-menu-title">Pie Progress</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../charts/c3.html">
                                                    <span class="site-menu-title">C3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" dropdown-badge="false">
                                    <i class="site-menu-icon md-widgets" aria-hidden="true"></i>
                                    <span class="site-menu-title">Widgets</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../widgets/statistics.html">
                                            <span class="site-menu-title">Statistics Widgets</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../widgets/data.html">
                                            <span class="site-menu-title">Data Widgets</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../widgets/blog.html">
                                            <span class="site-menu-title">Blog Widgets</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../widgets/chart.html">
                                            <span class="site-menu-title">Chart Widgets</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../widgets/social.html">
                                            <span class="site-menu-title">Social Widgets</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../widgets/weather.html">
                                            <span class="site-menu-title">Weather Widgets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-category">Apps</li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" dropdown-badge="false">
                                    <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                                    <span class="site-menu-title">Apps</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/contacts/contacts.html">
                                            <span class="site-menu-title">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/calendar/calendar.html">
                                            <span class="site-menu-title">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/notebook/notebook.html">
                                            <span class="site-menu-title">Notebook</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/taskboard/taskboard.html">
                                            <span class="site-menu-title">Taskboard</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub ">
                                        <a href="javascript:void(0)">
                                            <span class="site-menu-title">Documents</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../apps/documents/articles.html">
                                                    <span class="site-menu-title">Articles</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../apps/documents/categories.html">
                                                    <span class="site-menu-title">Categories</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a class="animsition-link" href="../apps/documents/article.html">
                                                    <span class="site-menu-title">Article</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/forum/forum.html">
                                            <span class="site-menu-title">Forum</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/message/message.html">
                                            <span class="site-menu-title">Message</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/projects/projects.html">
                                            <span class="site-menu-title">Projects</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/mailbox/mailbox.html">
                                            <span class="site-menu-title">Mailbox</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/media/overview.html">
                                            <span class="site-menu-title">Media</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/work/work.html">
                                            <span class="site-menu-title">Work</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/location/location.html">
                                            <span class="site-menu-title">Location</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../apps/travel/travel.html">
                                            <span class="site-menu-title">Travel</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page -->
        <div class="page">
            <div class="page-header">
                <h1 class="page-title">DataTables</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
                <div class="page-header-actions">
                    <a class="btn btn-sm btn-primary btn-round" href="http://datatables.net" target="_blank">
                        <i class="icon md-link" aria-hidden="true"></i>
                        <span class="hidden-sm-down">Official Website</span>
                    </a>
                </div>
            </div>

            <div class="page-content">

                <!-- Panel Table Individual column searching -->
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title">Daftar Artikel</h3>
                    </header>
                    <div class="panel-body">
                        <table class="table table-hover dataTable table-striped w-full" id="exampleTableSearch">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Kate</td>
                                    <td>5516 Adolfo Rode</td>
                                    <td>Littelhaven</td>
                                    <td>26</td>
                                    <td>2014/06/13</td>
                                    <td>$635,852</td>
                                </tr>
                                <tr>
                                    <td>Torrey</td>
                                    <td>3658 Richie Street</td>
                                    <td>West Sedrickstad</td>
                                    <td>28</td>
                                    <td>2014/09/12</td>
                                    <td>$243,577</td>
                                </tr>
                                <tr>
                                    <td>Jolin</td>
                                    <td>39 Hirthe Squares</td>
                                    <td>Ryleetown</td>
                                    <td>17</td>
                                    <td>2013/09/27</td>
                                    <td>$784,802</td>
                                </tr>
                                <tr>
                                    <td>Wilhelmine</td>
                                    <td>054 O&#x27;Hara Union</td>
                                    <td>Dibbertfurt</td>
                                    <td>35</td>
                                    <td>2013/06/28</td>
                                    <td>$254,987</td>
                                </tr>
                                <tr>
                                    <td>Hubeen</td>
                                    <td>8884 Jamel Pines</td>
                                    <td>Howemouth</td>
                                    <td>51</td>
                                    <td>2013/05/28</td>
                                    <td>$584,032</td>
                                </tr>
                                <tr>
                                    <td>Gerhold</td>
                                    <td>098 Noel Way</td>
                                    <td>Santinoland</td>
                                    <td>19</td>
                                    <td>2014/12/12</td>
                                    <td>$145,088</td>
                                </tr>
                                <tr>
                                    <td>Chester</td>
                                    <td>14095 Kling Gateway</td>
                                    <td>Andresmouth</td>
                                    <td>21</td>
                                    <td>2014/09/27</td>
                                    <td>$177,404</td>
                                </tr>
                                <tr>
                                    <td>Melany</td>
                                    <td>1100 Steve Pines</td>
                                    <td>Immanuelfort</td>
                                    <td>12</td>
                                    <td>2014/06/28</td>
                                    <td>$162,453</td>
                                </tr>
                                <tr>
                                    <td>Thea</td>
                                    <td>26114 Narciso Lodge</td>
                                    <td>East Opal</td>
                                    <td>64</td>
                                    <td>2014/11/12</td>
                                    <td>$581,736</td>
                                </tr>
                                <tr>
                                    <td>Kreiger</td>
                                    <td>111 Hershel Stream</td>
                                    <td>Hermannborough</td>
                                    <td>36</td>
                                    <td>2013/11/27</td>
                                    <td>$921,021</td>
                                </tr>
                                <tr>
                                    <td>Shanel</td>
                                    <td>7579 Santa Forest</td>
                                    <td>Jordaneville</td>
                                    <td>14</td>
                                    <td>2017/04/28</td>
                                    <td>$818,20</td>
                                </tr>
                                <tr>
                                    <td>Mueller</td>
                                    <td>083 Kshlerin Forest</td>
                                    <td>Clintmouth</td>
                                    <td>18</td>
                                    <td>2013/10/12</td>
                                    <td>$571,46</td>
                                </tr>
                                <tr>
                                    <td>Clementina</td>
                                    <td>5957 Hagenes Falls</td>
                                    <td>Anaishaven</td>
                                    <td>45</td>
                                    <td>2013/11/12</td>
                                    <td>$684,588</td>
                                </tr>
                                <tr>
                                    <td>Johanna</td>
                                    <td>4301 Trever Radial</td>
                                    <td>Lake Augustineton</td>
                                    <td>67</td>
                                    <td>2013/12/27</td>
                                    <td>$608,507</td>
                                </tr>
                                <tr>
                                    <td>Elliottr</td>
                                    <td>8417 Orion Parkway</td>
                                    <td>Streichside</td>
                                    <td>34</td>
                                    <td>2014/08/28</td>
                                    <td>$447,592</td>
                                </tr>
                                <tr>
                                    <td>Yasmine</td>
                                    <td>67284 Kreiger Freeway</td>
                                    <td>Stoltenbergside</td>
                                    <td>18</td>
                                    <td>2014/12/12</td>
                                    <td>$358,369</td>
                                </tr>
                                <tr>
                                    <td>AdaHoppe</td>
                                    <td>69842 Peyton Viaduct</td>
                                    <td>South Geovannyburgh</td>
                                    <td>36</td>
                                    <td>2013/05/13</td>
                                    <td>$211,76</td>
                                </tr>
                                <tr>
                                    <td>Sammie</td>
                                    <td>46406 Powlowski Common</td>
                                    <td>Cristmouth</td>
                                    <td>51</td>
                                    <td>2014/03/29</td>
                                    <td>$345,739</td>
                                </tr>
                                <tr>
                                    <td>Terrance</td>
                                    <td>1568 Richmond Bypass</td>
                                    <td>Schillerfort</td>
                                    <td>46</td>
                                    <td>2014/10/27</td>
                                    <td>$634,073</td>
                                </tr>
                                <tr>
                                    <td>August</td>
                                    <td>731 Stiedemann Crossing</td>
                                    <td>Rolfsonborough</td>
                                    <td>36</td>
                                    <td>2013/11/12</td>
                                    <td>$203,952</td>
                                </tr>
                                <tr>
                                    <td>Mckenna</td>
                                    <td>63204 Hegmann Keys</td>
                                    <td>New Isobelview</td>
                                    <td>2</td>
                                    <td>2013/08/12</td>
                                    <td>$702,091</td>
                                </tr>
                                <tr>
                                    <td>Adrianna</td>
                                    <td>75151 Kshlerin Square</td>
                                    <td>North Elwynfurt</td>
                                    <td>25</td>
                                    <td>2014/02/26</td>
                                    <td>$481,980</td>
                                </tr>
                                <tr>
                                    <td>Heath</td>
                                    <td>6778 Howe Route</td>
                                    <td>Antwanbury</td>
                                    <td>32</td>
                                    <td>2013/08/12</td>
                                    <td>$569,723</td>
                                </tr>
                                <tr>
                                    <td>Alisa</td>
                                    <td>64838 D&#x27;Amore Cove</td>
                                    <td>Port Lempi</td>
                                    <td>25</td>
                                    <td>2017/04/28</td>
                                    <td>$226,459</td>
                                </tr>
                                <tr>
                                    <td>Treva</td>
                                    <td>308 Octavia Roads</td>
                                    <td>East Eunaton</td>
                                    <td>37</td>
                                    <td>2014/12/12</td>
                                    <td>$746,921</td>
                                </tr>
                                <tr>
                                    <td>Nicolas</td>
                                    <td>760 Hickle Causeway</td>
                                    <td>Lake Nickolasshire</td>
                                    <td>69</td>
                                    <td>2014/05/13</td>
                                    <td>$293,786</td>
                                </tr>
                                <tr>
                                    <td>Gerhard</td>
                                    <td>893 Mara Parkway</td>
                                    <td>Elmermouth</td>
                                    <td>32</td>
                                    <td>2014/11/27</td>
                                    <td>$856,275</td>
                                </tr>
                                <tr>
                                    <td>Monica</td>
                                    <td>0039 Heath Plain</td>
                                    <td>West Bentonhaven</td>
                                    <td>46</td>
                                    <td>2017/05/13</td>
                                    <td>$821,600</td>
                                </tr>
                                <tr>
                                    <td>Lacey</td>
                                    <td>995 Lang Springs</td>
                                    <td>Cordellburgh</td>
                                    <td>41</td>
                                    <td>2014/11/27</td>
                                    <td>$990,291</td>
                                </tr>
                                <tr>
                                    <td>Bret</td>
                                    <td>282 Susana Heights</td>
                                    <td>Kaneport</td>
                                    <td>47</td>
                                    <td>2013/05/28</td>
                                    <td>$445,494</td>
                                </tr>
                                <tr>
                                    <td>Jennie</td>
                                    <td>755 Greyson Key</td>
                                    <td>East Jazmyne</td>
                                    <td>52</td>
                                    <td>2017/03/29</td>
                                    <td>$530,408</td>
                                </tr>
                                <tr>
                                    <td>Emerson</td>
                                    <td>784 Adriel Radial</td>
                                    <td>New Jerroldland</td>
                                    <td>4</td>
                                    <td>2014/02/26</td>
                                    <td>$805,823</td>
                                </tr>
                                <tr>
                                    <td>Herta</td>
                                    <td>7491 Bednar Gardens</td>
                                    <td>Port Lucianoton</td>
                                    <td>23</td>
                                    <td>2013/10/12</td>
                                    <td>$352,269</td>
                                </tr>
                                <tr>
                                    <td>Deckow</td>
                                    <td>6440 Moen Loop</td>
                                    <td>Jenningsbury</td>
                                    <td>23</td>
                                    <td>2014/07/28</td>
                                    <td>$219,573</td>
                                </tr>
                                <tr>
                                    <td>Davin</td>
                                    <td>50922 Kiara Square</td>
                                    <td>Port Edmund</td>
                                    <td>37</td>
                                    <td>2014/11/27</td>
                                    <td>$241,432</td>
                                </tr>
                                <tr>
                                    <td>Johnathan</td>
                                    <td>1998 Webster Fords</td>
                                    <td>East Vern</td>
                                    <td>50</td>
                                    <td>2014/09/12</td>
                                    <td>$290,875</td>
                                </tr>
                                <tr>
                                    <td>Gunnar</td>
                                    <td>92873 Barney Club</td>
                                    <td>Beierview</td>
                                    <td>82</td>
                                    <td>2014/03/29</td>
                                    <td>$569,778</td>
                                </tr>
                                <tr>
                                    <td>Raina</td>
                                    <td>828 Cathy Streets</td>
                                    <td>West Uriahville</td>
                                    <td>26</td>
                                    <td>2013/09/27</td>
                                    <td>$186,229</td>
                                </tr>
                                <tr>
                                    <td>Marjorie</td>
                                    <td>314 Aurore Canyon</td>
                                    <td>Port Jaquelineburgh</td>
                                    <td>3</td>
                                    <td>2014/06/28</td>
                                    <td>$547,752</td>
                                </tr>
                                <tr>
                                    <td>Citlalli</td>
                                    <td>139 Ebert Freeway</td>
                                    <td>Lake Esperanzamouth</td>
                                    <td>78</td>
                                    <td>2017/01/27</td>
                                    <td>$892,012</td>
                                </tr>
                                <tr>
                                    <td>Ruben</td>
                                    <td>02868 Cronin Tunnel</td>
                                    <td>Rossieville</td>
                                    <td>87</td>
                                    <td>2013/09/12</td>
                                    <td>$520,483</td>
                                </tr>
                                <tr>
                                    <td>Jakubowski</td>
                                    <td>80391 Maxwell Parks</td>
                                    <td>South Travon</td>
                                    <td>26</td>
                                    <td>2014/03/29</td>
                                    <td>$272,005</td>
                                </tr>
                                <tr>
                                    <td>Josephine</td>
                                    <td>36238 Satterfield Avenue</td>
                                    <td>New Alexanderhaven</td>
                                    <td>51</td>
                                    <td>2017/01/27</td>
                                    <td>$189,18</td>
                                </tr>
                                <tr>
                                    <td>Ceasar</td>
                                    <td>2795 Clement Ridges</td>
                                    <td>Beckerhaven</td>
                                    <td>78</td>
                                    <td>2013/11/27</td>
                                    <td>$958,117</td>
                                </tr>
                                <tr>
                                    <td>Coby</td>
                                    <td>53700 Pagac Lodge</td>
                                    <td>South Hershel</td>
                                    <td>86</td>
                                    <td>2013/08/28</td>
                                    <td>$481,619</td>
                                </tr>
                                <tr>
                                    <td>Colin</td>
                                    <td>637 Paucek Mountain</td>
                                    <td>West Luraberg</td>
                                    <td>77</td>
                                    <td>2017/02/26</td>
                                    <td>$298,110</td>
                                </tr>
                                <tr>
                                    <td>Monique</td>
                                    <td>415 Corkery Walks</td>
                                    <td>West Lauryn</td>
                                    <td>15</td>
                                    <td>2014/02/11</td>
                                    <td>$222,343</td>
                                </tr>
                                <tr>
                                    <td>Simonis</td>
                                    <td>0778 Elvis Spurs</td>
                                    <td>Harrisfurt</td>
                                    <td>62</td>
                                    <td>2013/05/28</td>
                                    <td>$336,046</td>
                                </tr>
                                <tr>
                                    <td>Afton</td>
                                    <td>57724 Ernser Crossroad</td>
                                    <td>Lake Charity</td>
                                    <td>30</td>
                                    <td>2017/04/28</td>
                                    <td>$597,775</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Panel Table Individual column searching -->

            </div>
        </div>
        <!-- End Page -->



    </body>

</html>

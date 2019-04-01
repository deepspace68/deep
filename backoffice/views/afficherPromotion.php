<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Winkle I Fast build Admin dashboard for any platform</title>
        <meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
        <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
        <meta name="author" content="hencework"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
        <!-- Data table CSS -->
        <link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <!-- Custom CSS -->
        <link href="dist/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-1-active navbar-top-violet horizontal-nav">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                    <div class="logo-wrap">
                        <a href="index.html">
                            <img class="brand-img" src="../img/logo.png" alt="brand"/>
                            <span class="brand-text">Winkle</span>
                        </a>
                    </div>
                </div>
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="ti-align-left"></i></a>
                <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="ti-search"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="ti-more"></i></a>
                <form id="search_form" role="search" class="top-nav-search collapse pull-left">
                    <div class="input-group">
                        <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
							<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="ti-search"></i></button>
							</span>
                    </div>
                </form>
            </div>
            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                    <li>
                        <a href="product-cart.html"><i class="ti-shopping-cart  top-nav-icon"></i><span class="top-nav-icon-badge shoping-cart-badge">3</span></a>
                    </li>
                    <li>
                        <a id="open_right_sidebar" href="#"><i class="ti-settings  top-nav-icon"></i></a>
                    </li>
                    <li class="dropdown app-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-view-grid top-nav-icon"></i></a>
                        <ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
                            <li>
                                <div class="app-nicescroll-bar">
                                    <ul class="app-icon-wrap pa-10">
                                        <li>
                                            <a href="weather.html" class="connection-item">
                                                <i class="zmdi zmdi-cloud-outline txt-info"></i>
                                                <span class="block">weather</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html" class="connection-item">
                                                <i class="zmdi zmdi-email-open txt-success"></i>
                                                <span class="block">e-mail</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="calendar.html" class="connection-item">
                                                <i class="zmdi zmdi-calendar-check txt-primary"></i>
                                                <span class="block">calendar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="vector-map.html" class="connection-item">
                                                <i class="zmdi zmdi-map txt-danger"></i>
                                                <span class="block">map</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="chats.html" class="connection-item">
                                                <i class="zmdi zmdi-comment-outline txt-warning"></i>
                                                <span class="block">chat</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact-card.html" class="connection-item">
                                                <i class="zmdi zmdi-assignment-account"></i>
                                                <span class="block">contact</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="app-box-bottom-wrap">
                                    <hr class="light-grey-hr ma-0"/>
                                    <a class="block text-center read-all" href="javascript:void(0)"> more </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown full-width-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-align-center top-nav-icon"></i></a>
                        <ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="product-nicescroll-bar row">
                                <ul class="pa-20">
                                    <li class="col-md-3 col-xs-6 col-menu-list">
                                        <a href="index.html"><div class="pull-left"><i class="ti-dashboard  mr-20"></i><span class="right-nav-text">Analytical</span></div><div class="clearfix"></div></a>
                                        <a href="index2.html"><div class="pull-left"><i class="ti-money  mr-20"></i><span class="right-nav-text">Cryptocurrency</span></div><div class="pull-right"><span class="label label-success">Hot</span></div><div class="clearfix"></div></a>
                                        <a href="profile.html"><div class="pull-left"><i class="ti-briefcase  mr-20"></i><span class="right-nav-text">Profile</span></div><div class="clearfix"></div></a>
                                    </li>
                                    <li class="col-md-3 col-xs-6 col-menu-list">
                                        <a href="javascript:void(0);">
                                            <div class="pull-left">
                                                <i class="ti-shopping-cart  mr-20"></i><span class="right-nav-text">E-Commerce</span>
                                            </div>
                                            <div class="pull-right"><i class="ti-angle-down"></i></div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <hr class="light-grey-hr ma-0"/>
                                        <ul>
                                            <li>
                                                <a href="e-commerce.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="product.html">Products</a>
                                            </li>
                                            <li>
                                                <a href="product-detail.html">Product Detail</a>
                                            </li>
                                            <li>
                                                <a href="add-products.html">Add Product</a>
                                            </li>
                                            <li>
                                                <a href="product-orders.html">Orders</a>
                                            </li>
                                            <li>
                                                <a href="product-cart.html">Cart</a>
                                            </li>
                                            <li>
                                                <a href="product-checkout.html">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-md-6 col-xs-12 preview-carousel">
                                        <a href="javascript:void(0);"><div class="pull-left"><span class="right-nav-text">latest products</span></div><div class="clearfix"></div></a>
                                        <hr class="light-grey-hr ma-0"/>
                                        <div class="product-carousel owl-carousel owl-theme text-center">
                                            <a href="#">
                                                <img src="../img/chair.jpg" alt="chair">
                                                <span>Circle chair</span>
                                            </a>
                                            <a href="#">
                                                <img src="../img/chair2.jpg" alt="chair">
                                                <span>square chair</span>
                                            </a>
                                            <a href="#">
                                                <img src="../img/chair3.jpg" alt="chair">
                                                <span>semi circle chair</span>
                                            </a>
                                            <a href="#">
                                                <img src="../img/chair4.jpg" alt="chair">
                                                <span>wooden chair</span>
                                            </a>
                                            <a href="#">
                                                <img src="../img/chair2.jpg" alt="chair">
                                                <span>square chair</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown alert-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-bell top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
                        <ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                            <li>
                                <div class="notification-box-head-wrap">
                                    <span class="notification-box-head pull-left inline-block">notifications</span>
                                    <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
                                    <div class="clearfix"></div>
                                    <hr class="light-grey-hr ma-0"/>
                                </div>
                            </li>
                            <li>
                                <div class="streamline message-nicescroll-bar">
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-green">
                                                <i class="ti-briefcase "></i>
                                            </div>
                                            <div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">
													New subscription created</span>
                                                <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0"/>
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-yellow">
                                                <i class="zmdi zmdi-trending-down"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
                                                <span class="inline-block font-11 pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Some technical error occurred needs to be resolved.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0"/>
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-blue">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
                                                <span class="inline-block font-11  pull-right notifications-time">4pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0"/>
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="sl-avatar">
                                                <img class="img-responsive" src="../img/avatar.jpg" alt="avatar"/>
                                            </div>
                                            <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
                                                <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0"/>
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-red">
                                                <i class="zmdi zmdi-storage"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
                                                <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">consectetur, adipisci velit.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="notification-box-bottom-wrap">
                                    <hr class="light-grey-hr ma-0"/>
                                    <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown auth-drp">
                        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                            <li>
                                <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                            </li>
                            <li>
                                <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                            </li>
                            <li class="divider"></li>
                            <li class="sub-menu show-on-hover">
                                <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
                                <ul class="dropdown-menu open-left-side">
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Top Menu Items -->

        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li class="navigation-header">
                    <span>Main</span>
                    <hr/>
                </li>
                <li>
                    <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="ti-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
                    <ul id="dashboard_dr" class="collapse collapse-level-1">
                        <li>
                            <a class="active-page" href="index.html">Analytical</a>
                        </li>
                        <li>
                            <a href="index2.html"><div class="pull-left"><span>Cryptocurrency</span></div><div class="pull-right"><span class="label label-success">Hot</span></div><div class="clearfix"></div></a>
                        </li>
                        <li>
                            <a href="profile.html">Profile</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="ti-shopping-cart  mr-20"></i><span class="right-nav-text">E-Commerce</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
                    <ul id="ecom_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="e-commerce.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="product.html">Products</a>
                        </li>
                        <li>
                            <a href="product-detail.html">Product Detail</a>
                        </li>
                        <li>
                            <a href="add-products.html">Add Product</a>
                        </li>
                        <li>
                            <a href="product-orders.html">Orders</a>
                        </li>
                        <li>
                            <a href="product-cart.html">Cart</a>
                        </li>
                        <li>
                            <a href="product-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="ti-image mr-20"></i><span class="right-nav-text">Apps </span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
                    <ul id="app_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="chats.html">chats</a>
                        </li>
                        <li>
                            <a href="calendar.html">calendar</a>
                        </li>
                        <li>
                            <a href="weather.html">weather</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Email<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="email_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="inbox.html">inbox</a>
                                </li>
                                <li>
                                    <a href="inbox-detail.html">detail email</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="contact_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="contact-list.html">list</a>
                                </li>
                                <li>
                                    <a href="contact-card.html">cards</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="file-manager.html">File Manager</a>
                        </li>
                        <li>
                            <a href="todo-tasklist.html">To Do/Tasklist</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header mt-20">
                    <span>component</span>
                    <hr/>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="ti-pencil-alt  mr-20"></i><span class="right-nav-text">UI Elements</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                    <ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
                        <li>
                            <a href="panels-wells.html">Panels & Wells</a>
                        </li>
                        <li>
                            <a href="modals.html">Modals</a>
                        </li>
                        <li>
                            <a href="sweetalert.html">Sweet Alerts</a>
                        </li>
                        <li>
                            <a href="notifications.html">notifications</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="accordion-toggle.html">Accordion / Toggles</a>
                        </li>
                        <li>
                            <a href="tabs.html">Tabs</a>
                        </li>
                        <li>
                            <a href="progressbars.html">Progress bars</a>
                        </li>
                        <li>
                            <a href="skills-counter.html">Skills & Counters</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="nestable.html">Nestables</a>
                        </li>
                        <li>
                            <a href="dorpdown.html">Dropdowns</a>
                        </li>
                        <li>
                            <a href="bootstrap-treeview.html">Tree View</a>
                        </li>
                        <li>
                            <a href="carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="range-slider.html">Range Slider</a>
                        </li>
                        <li>
                            <a href="grid-styles.html">Grid</a>
                        </li>
                        <li>
                            <a href="bootstrap-ui.html">Bootstrap UI</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#comp_dr"><div class="pull-left"><i class="ti-check-box  mr-20"></i><span class="right-nav-text">Components</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                    <ul id="comp_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="form_dr" class="collapse collapse-level-2 two-col-list dr-change-pos">
                                <li>
                                    <a href="form-element.html">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="form-layout.html">form Layout</a>
                                </li>
                                <li>
                                    <a href="form-advanced.html">Form Advanced</a>
                                </li>
                                <li>
                                    <a href="form-mask.html">Form Mask</a>
                                </li>
                                <li>
                                    <a href="form-picker.html">Form Picker</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">form Validation</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Form Wizard</a>
                                </li>
                                <li>
                                    <a href="form-x-editable.html">X-Editable</a>
                                </li>
                                <li>
                                    <a href="cropperjs.html">Cropperjs</a>
                                </li>
                                <li>
                                    <a href="form-file-upload.html">File Upload</a>
                                </li>
                                <li>
                                    <a href="dropzone.html">Dropzone</a>
                                </li>
                                <li>
                                    <a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
                                </li>
                                <li>
                                    <a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
                                </li>
                                <li>
                                    <a href="summernote-wysihtml5.html">summernote</a>
                                </li>
                                <li>
                                    <a href="typeahead-js.html">typeahead</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><span class="right-nav-text">Charts </span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="chart_dr" class="collapse collapse-level-2 dr-change-pos">
                                <li>
                                    <a href="flot-chart.html">Flot Chart</a>
                                </li>
                                <li>
                                    <a href="echart.html">Echart Chart</a>
                                </li>
                                <li>
                                    <a href="morris-chart.html">Morris Chart</a>
                                </li>
                                <li>
                                    <a href="chart.js.html">chartjs</a>
                                </li>
                                <li>
                                    <a href="chartist.html">chartist</a>
                                </li>
                                <li>
                                    <a href="easy-pie-chart.html">Easy Pie Chart</a>
                                </li>
                                <li>
                                    <a href="sparkline.html">Sparkline</a>
                                </li>
                                <li>
                                    <a href="peity-chart.html">Peity Chart</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="table_dr" class="collapse collapse-level-2 dr-change-pos">
                                <li>
                                    <a href="basic-table.html">Basic Table</a>
                                </li>
                                <li>
                                    <a href="bootstrap-table.html">Bootstrap Table</a>
                                </li>
                                <li>
                                    <a href="data-table.html">Data Table</a>
                                </li>
                                <li>
                                    <a href="export-table.html">Export Table</a>
                                </li>
                                <li>
                                    <a href="responsive-data-table.html">RSPV DataTable</a>
                                </li>
                                <li>
                                    <a href="responsive-table.html">Responsive Table</a>
                                </li>
                                <li>
                                    <a href="editable-table.html">Editable Table</a>
                                </li>
                                <li>
                                    <a href="foo-table.html">Foo Table</a>
                                </li>
                                <li>
                                    <a href="jsgrid-table.html">Jsgrid Table</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="icon_dr" class="collapse collapse-level-2 dr-change-pos">
                                <li>
                                    <a href="fontawesome.html">Fontawesome</a>
                                </li>
                                <li>
                                    <a href="themify.html">Themify</a>
                                </li>
                                <li>
                                    <a href="linea-icon.html">Linea</a>
                                </li>
                                <li>
                                    <a href="simple-line-icons.html">Simple Line</a>
                                </li>
                                <li>
                                    <a href="pe-icon-7.html">Pe-icon-7</a>
                                </li>
                                <li>
                                    <a href="glyphicons.html">Glyphicons</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="maps_dr" class="collapse collapse-level-2 dr-change-pos">
                                <li>
                                    <a href="vector-map.html">Vector Map</a>
                                </li>
                                <li>
                                    <a href="google-map.html">Google Map</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header mt-20">
                    <span>featured</span>
                    <hr/>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="ti-shield mr-20"></i><span class="right-nav-text">Pages</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                    <ul id="pages_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="auth_dr" class="collapse collapse-level-2 dr-change-pos">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="signup.html">Register</a>
                                </li>
                                <li>
                                    <a href="forgot-password.html">Recover Password</a>
                                </li>
                                <li>
                                    <a href="reset-password.html">reset Password</a>
                                </li>
                                <li>
                                    <a href="locked.html">Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="invoice_dr" class="collapse collapse-level-2 dr-change-pos">
                                <li>
                                    <a href="invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="invoice-archive.html">Invoice Archive</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="error_dr" class="collapse collapse-level-2 dr-change-pos">
                                <li>
                                    <a href="404.html">Error 404</a>
                                </li>
                                <li>
                                    <a href="500.html">Error 500</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="documentation.html"><div class="pull-left"><i class="ti-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>
                </li>
                <!--gestion Marketing-->
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#market_dr"><div class="pull-left"><i class="ti-image mr-20"></i><span class="right-nav-text">Marketing managment </span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
                    <ul id="market_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="chats.html">add promotion</a>
                        </li>
                        <li>
                            <a href="calendar.html">promotion details</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#event_dr">Events managment<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="event_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="form-events.html">add events</a>
                                </li>
                                <li>
                                    <a href="afficherEvenement.php">details events</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
                            <ul id="contact_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="contact-list.html">list</a>
                                </li>
                                <li>
                                    <a href="contact-card.html">cards</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="file-manager.html">File Manager</a>
                        </li>
                        <li>
                            <a href="todo-tasklist.html">To Do/Tasklist</a>
                        </li>
                    </ul>
                </li>ap
                <!--gestion Marketing-->
            </ul>
        </div>


        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid">

                <!-- Title -->
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">Details Promotion</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="#"><span>table</span></a></li>
                            <li class="active"><span>Details Promotion</span></li>
                        </ol>
                    </div>
                    <!-- /Breadcrumb -->
                </div>
                <!-- /Title -->

                <?PHP
include "../core/promotion_core.php";
$produits1C=new promotion_core();
$listeProduits=$produits1C->afficherPromotion();

//var_dump($listeProduits->fetchAll());
?>
                <table id="example" class="table table-hover display  pb-30" >
                    <thead>
    <tr>
        <td>id promotion</td>
        <td>id produit</td>
        <td>valeur promotion</td>
        <td>debut promotion</td>
        <td>fin promotion</td>

    </tr>
</thead>
    <tfoot>
    <tr>
        <td>id promotion</td>
        <td>id produit</td>
        <td>valeur promotion</td>
        <td>debut promotion</td>
        <td>fin promotion</td>

    </tr>
    </tfoot>
    <tbody>
    <?PHP
    foreach($listeProduits as $row){
        ?>

        <tr>
            <td><?PHP echo $row['id_promo']; ?></td>
            <td><?PHP echo $row['id_produit']; ?></td>
            <td><?PHP echo $row['valeur']; ?></td>
            <td><?PHP echo $row['date_deb']; ?></td>
            <td><?PHP echo $row['date_fin']; ?></td>
            <td><form method="POST" action="supprimerPromotion.php">
                    <input type="submit" name="supprimer" value="supprimer">
                    <input type="hidden" value="<?PHP echo $row['id_promo']; ?>" name="id_promo">
                </form>
            </td>
            <td><a href="modifierPromotion.php?id_promo=<?PHP echo $row['id_promo']; ?>">
                    Modifier</a></td>
        </tr>

    </div>
        <?PHP
    }
    ?>
    </tbody>
</table>


    <!-- Footer -->
    <footer class="footer container-fluid pl-30 pr-30">
        <div class="row">
            <div class="col-sm-12">
                <p>2018 &copy; Winkle. Pampered by Hencework</p>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    </div>
    <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

        <!-- /#wrapper -->

        <!-- JavaScript -->

        <!-- jQuery -->
        <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Data table JavaScript -->
        <script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="../vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>

        <script src="../vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="dist/js/export-table-data.js"></script>

        <!-- Slimscroll JavaScript -->
        <script src="dist/js/jquery.slimscroll.js"></script>

        <!-- Owl JavaScript -->
        <script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

        <!-- Switchery JavaScript -->
        <script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>


        <!-- Fancy Dropdown JS -->
        <script src="dist/js/dropdown-bootstrap-extended.js"></script>

        <!-- Init JavaScript -->
        <script src="dist/js/init.js"></script>

    </body>

    </html>

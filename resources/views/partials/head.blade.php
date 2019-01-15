@extends('layouts.mainlayout')

@section('head')

    <!-- Header Start -->
    <header class="header-2" id="header">
        <div class="vd_top-menu-wrapper vd_bg-green">
            <div class="container">
                <div class="vd_top-nav vd_nav-width  ">
                    <div class="vd_panel-header">
                        <div class="logo">
                            <a href=""><img id="iccsoft_logo" alt="logo" src="{{asset('img/index.png')}}"></a>
                        </div>
                        <!-- logo -->
                        <div class="vd_panel-menu visible-sm visible-xs">
                	<span class="menu visible-xs" data-action="submenu">
	                    <i class="fa fa-bars"></i>
                    </span>
                        </div>
                        <!-- vd_panel-menu -->
                    </div>
                    <!-- vd_panel-header -->

                </div>
                <div class="vd_container">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="vd_mega-menu-wrapper horizontal-menu">
                                <div class="vd_mega-menu">
                                    <ul class="mega-ul nav">
                                        <li class="mega-li">
                                            <a href="#" class="mega-link" data-waypoint="home">
                                                <span class="menu-text"><i class="fa fa-home font-md hidden-xs"></i><span class="visible-xs">Home</span></span>
                                            </a>

                                        </li>
                                        <li class="mega-li">
                                            <a href="#" class="mega-link" data-waypoint="services">
                                                <span class="menu-text">Services</span>
                                            </a>

                                        </li>

                                        <li class="mega-li">
                                            <a href="#" class="mega-link" data-waypoint="contact">
                                                <span class="menu-text">Contact</span>
                                            </a>

                                        </li>
                                    </ul>
                                    <!-- Head menu search form ends -->                         </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- vd_primary-menu-wrapper -->

    </header>
    <!-- Header Ends -->
@endsection
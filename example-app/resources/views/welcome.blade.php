<!DOCTYPE html>
<html lang="en">

<head>
    <title>Хонка маиши техника</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link href="bootstrap-5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      {{-- <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> --}}
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      <script src="jquery-3.6.0/dist/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="stylesheet" href="toastr/toastr.min.css" />
      
      <style>
        .extr22{
            height: 500px;
        }
        .extr25552{
            height: 346px;
        }
        
        .extr223{
            height: 260px;
        }
        .epam{
            height: 500px;
        }
        .tab{
            width: 100%;
            margin: 5px; 
        }
                
        .ext{
            height: 460px;
        }
        .scrolll2{
            overflow-x: auto;
        }        
        .ext555{
            height: 460px;
        }
        .rty2{
            width: 100%;
        }
        .rty2pul{
            width: 200%;
        }
        .buts{
            height: 35px;
            padding: 7px;
        }
        .blask{
            background-color: black;
        }
        #prif{
            height: 70px;
            width: 70px;
        }
        #prif2{            
            height: 50px;
            width: 50px;
        }
        #feedback { font-size: 1.4em; }
        #tbody2 .ui-selecting { background: #277890; }
        #tbody2 .ui-selected { background: #277890; color: white; }
        #tbody2 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #tbody2 tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #ttbody .ui-selecting { background: #277890; }
        #ttbody .ui-selected { background: #277890; color: white; }
        #ttbody { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #ttbody tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #clent .ui-selecting { background: #277890; }
        #clent .ui-selected { background: #277890; color: white; }
        #clent { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #clent tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #clent2 .ui-selecting { background: #277890; }
        #clent2 .ui-selected { background: #277890; color: white; }
        #clent2 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #clent2 tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
        
        #feedback { font-size: 1.4em; }
        #savdobirlamchi .ui-selecting { background: #277890; }
        #savdobirlamchi .ui-selected { background: #277890; color: white; }
        #savdobirlamchi { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #savdobirlamchi tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #dolg .ui-selecting { background: #277890; }
        #dolg .ui-selected { background: #277890; color: white; }
        #dolg { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #dolg tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #savdo .ui-selecting { background: #277890; }
        #savdo .ui-selected { background: #277890; color: white; }
        #savdo { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #savdo tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #clent_tip .ui-selecting { background: #277890; }
        #clent_tip .ui-selected { background: #277890; color: white; }
        #clent_tip { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #clent_tip tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #zaqazz123 .ui-selecting { background: #277890; }
        #zaqazz123 .ui-selected { background: #277890; color: white; }
        #zaqazz123 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #zaqazz123 tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #imya .ui-selecting { background: #277890; }
        #imya .ui-selected { background: #277890; color: white; }
        #imya { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #imya tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #tbody .ui-selecting { background: #277890; }
        #tbody .ui-selected { background: #277890; color: white; }
        #tbody { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #tbody tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #tbody3 .ui-selecting { background: #277890; }
        #tbody3 .ui-selected { background: #277890; color: white; }
        #tbody3 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #tbody3 tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #tavar_tip .ui-selecting { background: #277890; }
        #tavar_tip .ui-selected { background: #277890; color: white; }
        #tavar_tip { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #tavar_tip tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #tavarlar .ui-selecting { background: #277890; }
        #tavarlar .ui-selected { background: #277890; color: white; }
        #tavarlar { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #tavarlar tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

        #feedback { font-size: 1.4em; }
        #malumotser .ui-selecting { background: #277890; }
        #malumotser .ui-selected { background: #277890; color: white; }
        #malumotser { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #malumotser tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
      </style>
  </head>
  <body>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="/glavninachal">
                          <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a onclick="reflesh()" class="waves-effect waves-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                  </svg>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                        @if ($brends->count == "1")
                        <li class="header-notification" id="crrok">
                    
                        </li>
                        @else
                        <li class="header-notification" id="crrokdok">
                    
                        </li>
                        @endif
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light" id="ima">
                                 
                              </a>
                              <ul class="show-notification profile-notification">
                                @if ($brends->count == "1")
                                <li class="waves-effect waves-light">
                                    <a href="{{ route('setting') }}">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                </li>
                                  <li class="waves-effect waves-light">
                                      <a href="/logaut">
                                          <i class="ti-layout-sidebar-left"></i> Logout
                                      </a>
                                  </li>
                                @else
                                <li class="waves-effect waves-light">
                                    <a href="/logaut">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                                @endif                             
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header" id="ima2">
                                  
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                        @if ($brends->count == "1")
                                            <a href="{{ route('setting') }}"><i class="ti-settings"></i>Settings</a>
                                            <a href="/logaut"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        @else
                                            <a href="/logaut"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        @endif
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control" required="">
                                      <span class="form-bar"></span>
                                      <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Расположение</div>
                          @if ($brends->count == "1")
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="/glavninachal" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>Д</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Дашборд</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                            </li>
                            <li class="">
                                <a href="{{ route('index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Создать коталог</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('edit3') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Создать Товар</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('index2') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Справочники</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('clents') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Создать Клиент</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('statistika') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Статистика</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('rasxod') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Расход</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('pribl.php') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Прибл</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                          </ul>
                          @elseif ($brends->count == "3")
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="/glavninachal" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>Д</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Дашборд</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                          </li>
                          <li class="">
                              <a href="{{ route('index') }}" class="waves-effect waves-dark">
                                  <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                  <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Создать коталог</span>
                                  <span class="pcoded-mcaret"></span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{ route('indextip') }}" class="waves-effect waves-dark">
                                  <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                  <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Создать Товар</span>
                                  <span class="pcoded-mcaret"></span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{ route('clents') }}" class="waves-effect waves-dark">
                                  <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Создать Клиент</span>
                                  <span class="pcoded-mcaret"></span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{ route('rasxod') }}" class="waves-effect waves-dark">
                                  <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Расход</span>
                                  <span class="pcoded-mcaret"></span>
                              </a>
                          </li>
                        </ul>
                        @elseif ($brends->count == "4")
                        <ul class="pcoded-item pcoded-left-item">
                          <li class="active">
                              <a href="/glavninachal" class="waves-effect waves-dark">
                                  <span class="pcoded-micon"><i class="ti-home"></i><b>Д</b></span>
                                  <span class="pcoded-mtext" data-i18n="nav.dash.main">Дашборд</span>
                                  <span class="pcoded-mcaret"></span>
                              </a>
                            </li>
                            <li class="">
                                <a href="{{ route('index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Создать коталог</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('indextip') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Создать Товар</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('clents') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Создать Клиент</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>                    
                        </ul>
                          @elseif ($brends->count == "2")
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="/glavninachal" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>Д</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Дашборд</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Создать коталог</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('indextip') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Создать Товар</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('clents') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Создать Клиент</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('statistika') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Статистика</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('rasxod') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Расход</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('pribl.php') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Прибл</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                          @else
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="{{ route('mijozlar') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>Д</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Дашборд</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                          </li>
                        </ul>  
                          @endif
                      </div>
                  </nav>
                  <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper p-2">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            @if ($brends->count == "1" || $brends->count == "3" || $brends->count == "4")
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <a href="/glavninachal">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-10">
                                                                <h5 class="text-c-purple">Продажи</h5>
                                                            </div>
                                                            <div class="col-2 text-right">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                                                  </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="card-footer bg-c-purple">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Сотув булими</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa fa-line-chart text-white f-16"></i>
                                                                </div>
                                                            </div>            
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <a href="{{ route('ombor') }}">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-10">
                                                                <h5 class="text-c-green">Складские операции</h5>
                                                            </div>
                                                            <div class="col-2 text-right">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-server" viewBox="0 0 16 16">
                                                                    <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
                                                                    <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
                                                                    <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
                                                                  </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">Омборхона операциялари</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                               <a href="{{ route('adress') }}">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-10">
                                                            <h5 class="text-c-blue">Справочники</h5>
                                                        </div>
                                                        <div class="col-2 text-right">
                                                            <i class="fa fa-calendar-check-o f-28"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-c-blue">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Маълумотлар</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <i class="fa fa-line-chart text-white f-16"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                               </a>
                                                </div>
                                            </div>
                                            {{-- <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                               <a href="servislar">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-10">
                                                            <h5 class="text-c-red">Сервисе</h5>
                                                        </div>
                                                        <div class="col-2 text-right">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                                              </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-c-red">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Бошкару панел</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <i class="fa fa-line-chart text-white f-16"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                               </a>
                                                </div>
                                            </div> --}}
                                            @elseif($brends->count == "2")
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <a href="/glavninachal">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-10">
                                                                <h5 class="text-c-purple">Продажи</h5>
                                                            </div>
                                                            <div class="col-2 text-right">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                                                  </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="card-footer bg-c-purple">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Сотув булими</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa fa-line-chart text-white f-16"></i>
                                                                </div>
                                                            </div>            
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <a href="{{ route('ombor') }}">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-10">
                                                                <h5 class="text-c-green">Складские операции</h5>
                                                            </div>
                                                            <div class="col-2 text-right">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-server" viewBox="0 0 16 16">
                                                                    <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
                                                                    <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
                                                                    <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
                                                                  </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">Омборхона операциялари</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                               <a href="{{ route('adress') }}">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-10">
                                                            <h5 class="text-c-blue">Справочники</h5>
                                                        </div>
                                                        <div class="col-2 text-right">
                                                            <i class="fa fa-calendar-check-o f-28"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-c-blue">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Маълумотлар</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <i class="fa fa-line-chart text-white f-16"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                               </a>
                                                </div>
                                            </div>
                                            {{-- <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                               <a href="#">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-10">
                                                            <h5 class="">Сервисе</h5>
                                                        </div>
                                                        <div class="col-2 text-right">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                                              </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer blask">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Бошкару панел</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <i class="fa fa-line-chart text-white f-16"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                               </a>
                                                </div>
                                            </div> --}}
                                            @else
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <a href="#">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-10">
                                                                <h5 class="">Продажи</h5>
                                                            </div>
                                                            <div class="col-2 text-right">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                                                  </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="card-footer blask">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Сотув булими</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa fa-line-chart text-white f-16"></i>
                                                                </div>
                                                            </div>            
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <a href="#">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-10">
                                                                <h5 class="">Складские операции</h5>
                                                            </div>
                                                            <div class="col-2 text-right">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-server" viewBox="0 0 16 16">
                                                                    <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
                                                                    <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
                                                                    <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
                                                                  </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer blask">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">Омборхона операциялари</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                               <a href="#">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-10">
                                                            <h5 class="">Справочники</h5>
                                                        </div>
                                                        <div class="col-2 text-right">
                                                            <i class="fa fa-calendar-check-o f-28"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer blask">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Маълумотлар</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <i class="fa fa-line-chart text-white f-16"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                               </a>
                                                </div>
                                            </div>
                                            {{-- <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                               <a href="servislar">
                                                <div class="card-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-10">
                                                            <h5 class="text-c-red">Сервисе</h5>
                                                        </div>
                                                        <div class="col-2 text-right">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                                              </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-c-red">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <p class="text-white m-b-0">Бошкару панел</p>
                                                        </div>
                                                        <div class="col-3 text-right">
                                                            <i class="fa fa-line-chart text-white f-16"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                               </a>
                                                </div>
                                            </div> --}}
                                            @endif
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="modal fade" id="profiles" tabindex="-1" aria-labelledby="profilesLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="profilesLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="Subbbmite" enctype="multipart/form-data">
                @csrf
                <input type="File" name="img" id="profile" class="form-control">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>

    <script type="text/javascript">

        function images(){
            $.ajax({
                url: "{{ route('imagesprofil') }}",
                method: "GET",
                success:function(data){
                    if(data.img){
                        var im = `<img class="img-80 img-radius" src="profil/${data.img}" alt="User-Profile-Image" id="prif">                        
                                <div class="user-details">
                                      <span id="more-details">{{ $brends->login }}<i class="fa fa-caret-down"></i></span>
                                  </div>
                                `;
                        var im2 = `<img class="img-80 img-radius" src="profil/${data.img}" alt="User-Profile-Image" id="prif2">
                                <span>{{ $brends->login }}</span>
                                <i class="ti-angle-down"></i>
                                `;
                        $("#ima").html(im2);
                        $("#ima2").html(im);
                    }else{
                        var im = `<img class="img-80 img-radius" src="assets/images/a.jpg" alt="User-Profile-Image" id="prif">                        
                                <div class="user-details">
                                      <span id="more-details">{{ $brends->login }}<i class="fa fa-caret-down"></i></span>
                                  </div>
                                `;
                        var im2 = `<img class="img-80 img-radius" src="assets/images/a.jpg" alt="User-Profile-Image" id="prif2">
                                <span>{{ $brends->login }}</span>
                                <i class="ti-angle-down"></i>
                                `;
                        $("#ima").html(im2);
                        $("#ima2").html(im);
                    }
                }
            });
        }
        images();
        images();
        $(document).on("click", "#prif", function(){
           $("#profiles").modal("show");
        });
    
        $('#Subbbmite').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
            url: "{{ route('profilimage') }}",
            method: "POST",
            data:new FormData(form),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(form).find('span.error-text').text('');
            },
            success:function(data){
                if(data.code == 0){           
                    toastr.error(data.msg);
                }
                if(data.code == 200){
                    images();
                    toastr.success("Урнатилди");
                    $('#profiles').modal('hide');
                }
            }
            });
        });

        function reflesh(){
            location.reload(true);
        }
        
        function srok()
        {
            $.ajax({
                url:"{{ route('srocrow') }}",
                method:'GET',
                success:function(data)
                {
                    if(data.id){
                        var lern = '<a href="{{ route("clents") }}" class="waves-effect waves-light"><i class="ti-bell"></i><span class="badge bg-c-red"></span></a>';
                        $("#crrok").html(lern);                        
                    }else{
                   
                    }
                }
            });
        }

        function srokdok()
        {
            $.ajax({
                url:"{{ route('srocrowdok') }}",
                method:'GET',
                success:function(data)
                {
                    if(data.id){
                        var lern = '<a href="{{ route("clents") }}" class="waves-effect waves-light"><i class="ti-bell"></i><span class="badge bg-c-red"></span></a>';
                        $("#crrokdok").html(lern);                        
                    }else{
                   
                    }
                }
            });
        }

        function srok2()
        {
            $.ajax({
                url:"{{ route('kelgantovar2ajax') }}",
                method:'GET',
                success:function(data)
                {
                    if(data > 0){
                        var lern = '<a href="{{ route("kelgantovar2") }}" class="waves-effect waves-light"><i class="ti-bell"></i><span class="badge bg-c-red"></span></a>';
                        $("#crrok").html(lern);                        
                    }else{
                     
                    }
                }
            });
        }

        function srok2dok()
        {
            $.ajax({
                url:"{{ route('kelgantovar2ajaxdok') }}",
                method:'GET',
                success:function(data)
                {
                    if(data > 0){
                        var lern = '<a href="{{ route("kelgantovar2") }}" class="waves-effect waves-light"><i class="ti-bell"></i><span class="badge bg-c-red"></span></a>';
                        $("#crrokdok").html(lern);                        
                    }else{
                        
                    }
                }
            });
        }

        function dollarkurs(){            
            $.ajax({
                url: "{{ route('dollarkurs') }}",
                type: 'GET', 
            });
        }
        
        setInterval(function() {
            srok();
            srokdok();
            srok2();
            srok2dok();
            dollarkurs();
        }, 5000);
    </script>
    <script src="toastr/toastr.min.js"></script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
    <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script> 
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <script type="text/javascript" src="assets/script/jquery.canvasjs.min.js"></script>

    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <script type="text/javascript" src="assets/js/script.js "></script>
    <style>
        .fixed-button{
            display: none;
        }
    </style>
</body>

</html>
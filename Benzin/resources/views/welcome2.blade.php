<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mega able</title>
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
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
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
      <script src="toastr/toastr.min.js"></script>
      
      <style>
        .extr22{
            height: 255px;
        }
        .ext{
            height: 460px;
        }
        .tab{
            width: 100%;
            margin: 5px; 
        }
        tr{
            border-bottom: 1px solid; 
        }
        .scrolll2{
            overflow-x: auto;
        }

        .rty2{
            width: 100%;
        }
        .rty2swe{
            width: 200%;
        }
        .buts{
            height: 35px;
            padding: 7px;
        }

        .divasdas{
            height: 45vh;
            overflow-y: scroll;
        }

        .divasdas4{
            height: 95%;
            overflow-y: scroll;
        }

        .divasdas2{
            height: 51%;
            overflow-y: scroll;
        }

        .divasdas3{
            height: 40%;
            overflow-y: scroll;
        }

        .bard{
            border-right: 1px solid rgb(162, 162, 162); 
        }

        .alert-danger {
            background-color: #ffe4e4;
            border-color: #ff5252;
            color: #ff5252;
        }

        .alert-primary {
            background-color: #ecf0f8;
            border-color: #448aff;
            color: #448aff;
        }

        .alert-info {
            background-color: #e3f4fd;
            border-color: #00bcd4;
            color: #00bcd4;
        }
        .alert-success {
            background-color: #e0ffed;
            border-color: #11c15b;
            color: #11c15b;
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
                      <a href="index.html">
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
                          {{-- <li class="header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <i class="ti-bell"></i>
                                  <span class="badge bg-c-red"></span>
                              </a>
                              <ul class="show-notification">
                                  <li>
                                      <h6>Notifications</h6>
                                      <label class="label label-danger">New</label>
                                  </li>
                              </ul>
                          </li> --}}
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <img src="assets/images/a.jpg" class="img-radius" alt="User-Profile-Image">
                                  <span>{{ $brends->login }}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">                          
                                  <li class="waves-effect waves-light">
                                    @if ($brends->count == 1)
                                      <a href="{{ route('setting') }}">
                                          <i class="ti-user"></i> Settings
                                      </a>
                                      @else
                                            
                                      @endif
                                  </li>
                           
                                  <li class="waves-effect waves-light">
                                      <a href="/logaut">
                                          <i class="ti-layout-sidebar-left"></i> Logout
                                      </a>
                                  </li>
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
                            <div class="main-menu-header">
                                <img class="img-80 img-radius mCS_img_loaded mr-4" src="assets/images/a.jpg" alt="User-Profile-Image">
                                <div class="user-details mr-4">
                                    <span id="more-details">{{ $brends->login }}<i class="fa fa-caret-down"></i></span>
                                </div>
                            </div>
        
                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        @if ($brends->count == 1)
                                        <a href="{{ route('setting') }}"><i class="ti-settings"></i>Settings</a>                                            
                                        @else
                                            
                                        @endif
                                        <a href="/logaut"><i class="ti-layout-sidebar-left"></i>Logout</a>
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
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="/glavninachal" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>Д</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Рабочий стол</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              @if ($brends->count == 1)
                              <li class="">
                                  <a href="{{ route('create.php') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Создать</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                                <li class="">
                                    <a href="{{ route('perexod.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Приход</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('perexodistoriya.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Приход история</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('savdo.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Торговля</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('summa.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Сумма контрол</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('lishni.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Личный расход</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('kassa.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Касса</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>                                  
                              @else
                                <li>
                                    <a href="{{ route('savdo.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Торговля</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('summa.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Сумма контрол</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('lishni.php') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Личный расход</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                              @endif
                          </ul>               
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
                                            @yield('connect')                                            
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

      <div class="modal fade" id="deleter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Удалить</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form id="formdel">
                    @csrf
                    <input type="hidden" name="id" id="iid">
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Удалить</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="dele" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Удалить</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form id="formdeldddd">
                    @csrf
                    <input type="hidden" name="id" id="iid2">
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Удалить</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="dele" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Удалить</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form id="formdeldddd">
                    @csrf
                    <input type="hidden" name="id" id="iid2">
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Удалить</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="delsummamcon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Удалить</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form id="sumcontdel">
                    @csrf
                    <input type="hidden" name="id" id="iidfr">
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Удалить</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="radel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Удалить</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form id="radelfor">
                    @csrf
                    <input type="hidden" name="id" id="radel2">
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Удалить</button>
                </div>
            </form>
          </div>
        </div>
      </div>

    <script type="text/javascript">
        function reflesh(){
            location.reload(true);
        }

        function benzin_idras() {
            $.ajax({
                url: "{{ route('benzin_idras') }}",
                method:'GET',
                success:function(data){
                    $("#benzin_idper").html(data);
                    $("#benzin_idras").html(data);
                }
            });
        }
        benzin_idras();
        benzin_idras();
    
        function tbody() {
            $.ajax({
                url: "{{ route('index') }}",
                method:'GET',
                success:function(data){
                    $("#tbody").html(data);
                }
            });
        }
        function tbody2() {
            $.ajax({
                url: "{{ route('index2') }}",
                method:'GET',
                success:function(data){
                    $("#tbody2").html(data);
                }
            });
        }

        function tbody3(sanafilras = '', sanafilras2 = '') {
            $.ajax({
                url: "{{ route('index3') }}",
                method:'GET',
                data:{
                    sanafilras: sanafilras,
                    sanafilras2: sanafilras2
                },
                dataType:'json',
                success:function(data){
                    $("#tbody3").html(data);
                }
            });
        }
        $(document).on("change", "#sanafilras2", function(){
            var sanafilras = $("#sanafilras").val();
            var sanafilras2 = $("#sanafilras2").val();
            tbody3(sanafilras, sanafilras2);
        });

        function tbody5() {
            $.ajax({
                url: "{{ route('index5') }}",
                method:'GET',
                success:function(data){
                    $("#tbody5").html(data);
                }
            });
        }

        function tbody6() {
            $.ajax({
                url: "{{ route('index6') }}",
                method:'GET',
                success:function(data){
                    $("#tbody6").html(data);
                }
            });
        }
    
        function chaqir(){
            tbody();
            tbody2();
            tbody3();
            tbody5();
            tbody6();
            benzin_idras();
        }
        chaqir();
        $('#form').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('store') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#form")[0].reset();
                        $("#id").val('');
                        $("#name").val('');
                        $("#summa").val('');
                        chaqir();
                        toastr.success("Сакланди");
                        $('#exam').modal('hide');
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#form")[0].reset();
                        $("#id").val('');
                        $("#name").val('');
                        $("#summa").val('');
                        chaqir();
                        toastr.success("Янгиланди");
                        $('#exam').modal('hide');
                    }           
                }
            });
        });

        $(document).on("click", "#edit", function(){
            $("#id").val($(this).data("id"));
            $("#name").val($(this).data("name"));
            $("#summa").val($(this).data("summa"));
        });

        $(document).on("click", "#plusdelet", function(){
            $("#iid").val($(this).data("id"));
            $('#deleter').modal('show');
        });

        $(document).on("click", "#minusdelet", function(){
            $("#iid").val($(this).data("id"));
            $('#deleter').modal('show');
        });

        $(document).on("click", "#delet", function(){
            $("#iid2").val($(this).data("id"));
            $('#dele').modal('show');
        });

        $('#formdel').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('delete') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    chaqir();
                    $("#formdel")[0].reset();
                    toastr.error("Учирилди");
                    $('#deleter').modal('hide');
                }
            });
        });
        

        $('#formdeldddd').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('deleteper') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    chaqir();
                    $("#formdeldddd")[0].reset();
                    toastr.error("Учирилди");
                    $('#dele').modal('hide');
                }
            });
        });

        $(document).on("click", "#plus", function(){                
            $("#id_per").val($(this).data("id"));                
            $(".pere").html($(this).data("name") +" Переходь");                
        });

        $(document).on("click", "#plusedit", function(){
            $("#id_per").val($(this).data("id"));
            $("#benzin_idper").val($(this).data("benzin_id"));
            $("#plusform").val($(this).data("plus"));
            $("#summaplus").val($(this).data("summa"));
            $(".pere").html($(this).data("name") +" Переходь");                
        });

        $('#perexod').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('perexod') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#perexod")[0].reset();
                        chaqir();
                        toastr.success("Сакланди");
                        $('#kelgan').modal('hide');
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#perexod")[0].reset();
                        chaqir();
                        toastr.success("Янгиланди");
                        $('#kelgan').modal('hide');
                    } 
                }
            });
        });
    
        $(document).on("click", "#minusedit", function(){
            $("#id_ras").val($(this).data("id"));
            $("#benzin_idras").val($(this).data("benzin_id"));
            $("#holat").val($(this).data("holat"));
            $("#holat2").val($(this).data("holat2"));
            $("#diseb").val($(this).data("summa"));
            $("#diseba").val($(this).data("summa"));
            $("#litr").val($(this).data("litr"));
            $("#litra").val($(this).data("litr"));
            $("#diseb2").val($(this).data("jami"));
            $("#diseb2a").val($(this).data("jami"));
        }); 

        $('#rasxod').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('rasxod') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#rasxod")[0].reset();
                        chaqir();
                        toastr.success("Сакланди");
                        $('#ketgan').modal('hide');
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#rasxod")[0].reset();
                        chaqir();
                        toastr.success("Янгиланди");
                        $('#ketgan').modal('hide');
                    } 
                }
            });
        });

        $(document).on("change", "#benzin_idras", function(){
            var id = $(this).val();
            $.ajax({
                url: "{{ route('idsumma') }}",
                method:'GET',
                data:{
                    id: id
                },
                dataType:'json',
                success:function(data){
                    $("#diseb").val(data.summa);
                    $("#diseba").val(data.summa);                    
                }
            });
        });
        
        $(document).on("keyup", "#holat2", function(){
            var sum = $("#diseb").val();
            var holat2 = $("#holat2").val();
            var holat = $("#holat").val();
            var j = holat - holat2;
            var j2 = j * sum;
            $("#litr").val(j);
            $("#diseb2").val(j2);
            $("#litra").val(j);
            $("#diseb2a").val(j2);
        });

        $(document).on("click", "#summaediter", function(){   
            $("#id_summa").val($(this).data("id"));            
            $("#naqtsumma2").val($(this).data("naqtsumma"));
            $("#naqtsumma3").val($(this).data("naqtsumma3"));
            $("#naqtsumma").val($(this).data("naqtsumma"));
            $("#uzqardsumma").val($(this).data("uzqardsumma"));
            $("#humosumma").val($(this).data("humosumma"));
        }); 

        $(document).on("keyup", "#uzqardsumma", function(){
            var naqtsumma = $("#naqtsumma").val();
            var naqtsumma3 = $("#naqtsumma3").val();
            var naqtsumma2 = $("#naqtsumma2").val();
            var uzqardsumma = $("#uzqardsumma").val();
            var humosumma = $("#humosumma").val();
            var j = naqtsumma3 - uzqardsumma - humosumma;
            $("#naqtsumma2").val(j);
            $("#naqtsumma").val(j);
        });

        $(document).on("keyup", "#humosumma", function(){
            var naqtsumma = $("#naqtsumma").val();
            var naqtsumma3 = $("#naqtsumma3").val();
            var naqtsumma2 = $("#naqtsumma2").val();
            var uzqardsumma = $("#uzqardsumma").val();
            var humosumma = $("#humosumma").val();
            var j = naqtsumma3 - uzqardsumma - humosumma;
            $("#naqtsumma2").val(j);
            $("#naqtsumma").val(j);
        });

        $(document).on("click", "#delsummacontrol", function(){
            $("#iidfr").val($(this).data("id"));
            $("#delsummamcon").modal("show");            
        });

        

        function sotuv2(sanafilsum = '', sanafilsum2 = ''){
            $.ajax({
                url: "{{ route('sotuv2') }}",
                method:'GET',
                data: {
                    sanafilsum: sanafilsum,
                    sanafilsum2: sanafilsum2,
                },
                dataType: "json",
                success:function(data){
                    if(data.jav){
                        $("#naqtsumma2").val(data.jav.jami);
                        $("#naqtsumma3").val(data.jav.jami);
                        $("#naqtsumma").val(data.jav.jami);
                        $("#s").html("Бугунги савдо " + data.jav.jami + " сум");
                    }else{}
                    var rows = "";
                    data.summa.forEach(room => {
                        rows+=`
                        <tr>
                            <td style="color: #00be09">${room.naqtsumma3}</td>
                            <td style="color: #0039be">${room.naqtsumma}</td>
                            <td  style="color: red">${room.uzqardsumma}</td>
                            <td  style="color: red">${room.humosumma}</td>
                            <td>${room.data}</td>
                            <td>
                                <button class="btn-primary"
                                id="summaediter" data-id="${room.id}" data-naqtsumma="${room.naqtsumma}" data-naqtsumma3="${room.naqtsumma3}" data-uzqardsumma="${room.uzqardsumma}" data-humosumma="${room.humosumma}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </button>  
                                <button class="btn-danger" id="delsummacontrol" data-id="${room.id}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        `;
                    });
                    $("#sotuv2").html(rows);
                }
            });
        }
        sotuv2();
        sotuv2();

        $(document).on("change", "#sanafilsum2", function(){
            var sanafilsum = $("#sanafilsum").val();
            var sanafilsum2 = $(this).val();
            sotuv2(sanafilsum, sanafilsum2);
            klentqarzfun(sanafilsum, sanafilsum2);
        });

        $('#summos').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('summos') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#id_summa").val('');
                        $("#summos")[0].reset();
                        sotuv2();
                        toastr.success("Сакланди");
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#id_summa").val('');
                        $("#summos")[0].reset();
                        sotuv2();
                        toastr.success("Янгиланди");
                    }
                }
            });
        });

        $('#sumcontdel').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('sumcontdel') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#sumcontdel")[0].reset();
                        sotuv2();
                        toastr.error("Учирилди");
                        $("#delsummamcon").modal("hide");    
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#sumcontdel")[0].reset();
                        sotuv2();
                        toastr.error("Учирилди");
                        $("#delsummamcon").modal("hide");    
                    }
                }
            });
        });
        
        
        $(document).on("click", "#qlentqarz", function(){
            $("#id_klent").val($(this).data("id"));
            $("#delster").modal("show");            
        });

        $(document).on("click", "#qlentedit", function(){   
            $("#id_klen").val($(this).data("id"));            
            $("#klent_name").val($(this).data("name"));
            $("#qarz_suma").val($(this).data("qarz"));
        }); 

        function klentqarzfun(sanafilsum='', sanafilsum2=''){
            $.ajax({
                url: "{{ route('klentqarzfun') }}",
                method:'GET',
                data: {
                    sanafilsum: sanafilsum,
                    sanafilsum2: sanafilsum2,
                },
                dataType: "json",
                success:function(data){
                    var rows = "";
                    data.forEach(room => {
                        rows+=`
                        <tr>
                            <td>${room.name}</td>
                            <td style="color: red">${room.qarz}</td>
                            <td>${room.data}</td>
                            <td>
                                <button class="btn-primary"
                                id="qlentedit" data-id="${room.id}" data-name="${room.name}" data-qarz="${room.qarz}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </button>  
                                <button class="btn-danger" id="qlentqarz" data-id="${room.id}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        `;
                    });
                    $("#ql").html(rows);
                }
            });
        }
        klentqarzfun();
        klentqarzfun();

        $('#klentqarz').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('klentqarz') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#id_klen").val('');
                        $("#klentqarz")[0].reset();
                        klentqarzfun();
                        toastr.success("Сакланди");
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#id_klen").val('');
                        $("#klentqarz")[0].reset();
                        klentqarzfun();
                        toastr.success("Янгиланди");
                    }
                }
            });
        });

        $('#delster22').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('delster22') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#id_klent").val('');
                        $("#delster22")[0].reset();
                        klentqarzfun();
                        toastr.error("Учирилди");
                        $("#delster").modal("hide");    
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#id_klent").val('');
                        $("#delster22")[0].reset();
                        klentqarzfun();
                        toastr.error("Учирилди");
                        $("#delster").modal("hide");    
                    }
                }
            });
        });
    
        $(document).on("click", "#rdelssss", function(){
            $("#radel2").val($(this).data("id"));
            $("#radel").modal("show");            
        });

        $(document).on("click", "#redit", function(){   
            $("#id_mr").val($(this).data("id"));            
            $("#qayer").val($(this).data("qayer"));
            $("#sumplu").val($(this).data("sum"));
            $("#sabap").val($(this).data("sabap"));
        }); 

        function rassem(sanafiltr='', sanafiltr2=''){
            $.ajax({
                url: "{{ route('rassem') }}",
                method:'GET',
                data: {
                    sanafiltr: sanafiltr,
                    sanafiltr2: sanafiltr2,
                },
                dataType: "json",
                success:function(data){
                    var rows = "";
                    data.forEach(room => {
                        rows+=`
                        <tr>
                            <td>${room.qayer}</td>
                            <td style="color: red">${room.sum}</td>
                            <td>${room.sabap}</td>
                            <td>${room.data}</td>
                            <td>
                                <button class="btn-primary"
                                id="redit" data-id="${room.id}" data-qayer="${room.qayer}" data-sum="${room.sum}" data-sabap="${room.sabap}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </button>  
                                <button class="btn-danger" id="rdelssss" data-id="${room.id}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        `;
                    });
                    $("#tb").html(rows);
                }
            });
        }
        rassem();
        rassem();

        $(document).on("change", "#sanafiltr2", function(){
            var sanafiltr = $("#sanafiltr").val();
            var sanafiltr2 = $(this).val();
            rassem(sanafiltr, sanafiltr2);
        });


        $('#rasdelform').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('rasdelform') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#id_mr").val('');
                        $("#rasdelform")[0].reset();
                        rassem();
                        toastr.success("Сакланди");
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#id_mr").val('');
                        $("#rasdelform")[0].reset();
                        rassem();
                        toastr.success("Янгиланди");
                    }
                }
            });
        });

        $('#radelfor').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                url: "{{ route('radelfor') }}",
                method: "POST",
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data){
                    if(data == 200){
                        $("#radel2").val('');
                        $("#radelfor")[0].reset();
                        rassem();
                        toastr.error("Учирилди");
                        $("#radel").modal("hide");    
                    }
                    if(data.code == 0){
                        $.each(data.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        toastr.error(data.msg);
                    }
                    if(data == 201){
                        $("#radel2").val('');
                        $("#radelfor")[0].reset();
                        rassem();
                        toastr.error("Учирилди");
                        $("#radel").modal("hide");    
                    }
                }
            });
        });

        function garizantal(san = '', san2 = ''){
            $.ajax({
                url: "{{ route('pribl') }}",
                type: "GET",
                data: {
                    san: san,
                    san2: san2,
                },
                dataType:'json',
                success:function(data){
                    var formatter = new Intl.NumberFormat();
                    $("#an1").html(formatter.format(data.olish) + " сум");
                    $("#an2").html(formatter.format(data.sotish) + " сум");
                    $("#an3").html(formatter.format(data.qarz) + " сум");
                    $("#an4").html(formatter.format(data.rasxod) + " сум");
                    if(data.pribl > 0){
                        $("#an5").html(`
                            <div class="alert alert-success text-center pt-5 pb-5">
                                <h1 class="modal-title">Прибл</h1>
                                <h2 class="pt-3">${formatter.format(data.pribl)} сум</h2>
                            </div>
                            `
                        );
                    }else{
                        $("#an5").html(`<div class="alert alert-danger text-center pt-5 pb-5">
                                <h1 class="modal-title">Прибл</h1>
                                <h2 class="pt-3"> ${formatter.format(data.pribl)} сум</h2>
                            </div>
                            `
                        );
                    }
                }
            });
        }
        garizantal();
        garizantal();

        $(document).on("change", "#san2", function(){
            var san = $("#san").val();
            var san2 = $("#san2").val();
            garizantal(san, san2);   
        });

        function kassaden(sana1 = '', sana2 = ''){
            $.ajax({
                url: "{{ route('kassaden') }}",
                type: "GET",
                data: {
                    sana1: sana1,
                    sana2: sana2,
                },
                dataType:'json',
                success:function(data){
                    var formatter = new Intl.NumberFormat();
                    $("#an1a").html(formatter.format(data.olish) + " сум");
                    $("#an2a").html(formatter.format(data.sotish) + " сум");
                    $("#an3a").html(formatter.format(data.qarz) + " сум");
                    $("#an4a").html(formatter.format(data.rasxod) + " сум");
                    $("#an6a").html(formatter.format(data.uzqard) + " сум");
                    $("#an7a").html(formatter.format(data.humo) + " сум");
                    if(data.pribl > 0){
                        $("#an5a").html(`
                            <div class="alert alert-success text-center pt-5 pb-4">
                                <h1 class="modal-title">Касса</h1>
                                <h2 class="pt-3">${formatter.format(data.pribl)} сум</h2>
                            </div>
                            `
                        );
                    }else{
                        $("#an5a").html(`<div class="alert alert-danger text-center pt-5 pb-4">
                                <h1 class="modal-title">Касса</h1>
                                <h2 class="pt-3"> ${formatter.format(data.pribl)} сум</h2>
                            </div>
                            `
                        );
                    }
                }
            });
        }
        kassaden();
        kassaden();
    
        $(document).on("change", "#sana2", function(){
            var sana1 = $("#sana1").val();
            var sana2 = $("#sana2").val();
            kassaden(sana1, sana2);   
        });

        function tbperex(sana1fil='', sana2fil='') {
            $.ajax({
                url: "{{ route('tbperex') }}",
                method:'GET',
                data:{
                    sana1fil: sana1fil,
                    sana2fil: sana2fil
                },
                dataType:'json',
                success:function(data){
                    $("#tbperex").html(data);
                }
            });
        }
        tbperex();
        tbperex();
        $(document).on("change", "#sana2fil", function(){
            var sana1fil = $("#sana1fil").val();
            var sana2fil = $("#sana2fil").val();
            tbperex(sana1fil, sana2fil);   
        });
        tbody3
    </script>
    
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
    <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>

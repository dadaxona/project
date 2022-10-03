<!DOCTYPE html>
<html lang="en">

<head>
    <title>New York</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="jquery/jquery.min.js"></script>
   <link rel="stylesheet" href="toastr/toastr.min.css" />
   <style>
    .aaasss{
        font-variant: all-small-caps;
        font-weight: 500;
    }
   </style>
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material" id="abcd">
                            @csrf
                            <div class="text-center">
                                <h4 style="color: #eff0f3">Mega able</h4>
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Вход</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <select name="login" id="logg" class="form-control">
                                            
                                        </select>
                                        <label class="float-label">Логин</label>
                                        <span class="text-danger error-text login_error"></span>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" id="password" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Парол</label>
                                        <span class="text-danger error-text password_error"></span>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" name="ok" id="ok" value="ok">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Белгилаш</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                <a href="#" class="text-right f-w-600">Тасдикланг ?</a>
                                            </div>
                                        </div>
                                        <span class="text-danger error-text ok_error"></span>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Вход</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Welcome.</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                        </div>
                                    </div>
                                </div>                         
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <input type="hidden" id="controls" value="0">

    
    <div class="modal fade" id="month_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-body">                 
                    <input type="password" id="month" class="form-control">           
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="month_modal_servis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-body">                 
                    <input type="password" id="datasr" class="form-control" placeholder="№">
                    <input type="password" id="pres" class="form-control mt-2" placeholder="№">
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
    <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
    <script src="toastr/toastr.min.js"></script>
    <script>
    // location.reload(true);
        let _token = $('meta[name="csrf-token"]').attr('content');
        $('#abcd').on('submit', function(e) {
            e.preventDefault();
            $("#controls").val(0);
            $.ajax({
                url: "{{ route('datasrokdb') }}",
                method: "GET",
                success:function(respons){
                    if(respons.code == 200){
                            $.ajax({
                            url: "{{ route('login-user') }}",
                            method: "POST",
                            data: {
                                login: $("#logg").val(),
                                password: $("#password").val(),
                                _token: _token
                            },
                            dataType:'json',
                            beforeSend:function(){
                                $("#abcd").find('span.error-text').text('');
                            },
                            success:function(data){
                                if(data.data == 200){
                                    toastr.success("Привет");
                                    $("#logg").val(''),
                                    $("#password").val(''),                         
                                    window.location.href = "/glavninachal";
                                }
                                if(data.data == 404){
                                    toastr.error("Парол хато");
                                }
                                if(data.data == 500){
                                    toastr.error("Бегона шахслар кириши такикланади");
                                }
                                if(data.data == 0){
                                    $.each(data.error, function(prefix, val){
                                        $("#abcd").find('span.'+prefix+'_error').text(val[0]);
                                    });
                                }
                            }
                        });
                    }else{
                        var snd = new Audio("Muz/sms.mp3");
                        snd.play();
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-full-width",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "10000",
                            "extendedTimeOut": "10000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr["error"]("<h1 class='text-center aaasss'>Срок истек</h1>");
                    }
                }
            });
        });
        function log(){
            $.ajax({
                url: "{{ route('log') }}",
                method: "GET",
                success:function(data){
                    var rows = '';
                    if (data.length == 0) {
                        rows += ` <option value="Admin">Admin</option>`;
                    }else{
                        data.forEach(room => {
                            rows += `
                            <option value="${room.login}"> ${room.login}</option>
                            `;
                        });
                    }
                    $("#logg").html(rows);
                }
            });
        }
        log();
        log();
    
        function aktive() {
            var password = $("#password").val();            
            if(password == "status"){
                $.ajax({
                    url: "{{ route('datasrokdb') }}",
                    method: "GET",
                    success:function(data){
                        if(data.data.status == 1){
                            var snd = new Audio("Muz/sms.mp3");
                            snd.play();
                            toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-full-width",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "5000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                            toastr["success"](`<h1 class='text-center'>Status: ${data.data.holat};</h1>`);
                            $("#controls").val(8);
                            $("#controls").val(8);
                            $("#controls").val(8);
                        }else{
                            var snd = new Audio("Muz/sms.mp3");
                            snd.play();
                            toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-full-width",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "10000",
                                "extendedTimeOut": "10000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                            toastr["error"](`<h1 class='text-center'>Status: ${data.data.holat};</h1>`);
                            $("#controls").val(1);
                        }
                    }
                });
            }else if(password == "aktiv-100"){
                $("#controls").val(1);
            }else{}
        }

        function aktive2() {
            var password = $("#password").val();
            if(password == "aktiv-100"){
                $("#month_modal").modal("show");  
                $("#controls").val(2);              
            }else{}
        }

        function aktive3() {
            var month = $("#month").val();
            if(month.length < 20){
                // toastr.error("Error");
            }else{
                $("#controls").val(3);
                aktive4();
            }
        }

        function aktive4() {
            var w = $("#controls").val()
            if(w == 3){
                $("#controls").val(4);
                $("#controls").val(4);
                $("#controls").val(4);
                $("#month_modal").modal("hide");
                $("#controls").val(4);
            }else{             
                aktive6();      
            }
        }


        function aktive5() {
            var ps = $("#pres").val();
            var datasr = $("#datasr").val();
            
            if(ps.length > 7 && ps.length < 9){
                $.ajax({
                    url: "{{ route('aktivstatus') }}",
                    method: "POST",
                    data: {
                        month: datasr,
                        _token: _token
                    },
                    dataType:'json',
                    success:function(data){
                        if(data.code == 201){
                            $("#controls").val(7);
                            $("#controls").val(7);
                            $("#controls").val(7);
                            $("#month_modal_servis").modal("hide");
                            $("#controls").val(7);
                            $("#controls").val(7);
                            $("#controls").val(7);
                            $("#controls").val(7);
                            $("#controls").val(7);
                        }else{}
                    }
                });
            }else{}
            console.log(ps.length)
        }

        function aktive6(){
                $("#controls").val(5)               
                $("#controls").val(5)  
                $("#controls").val(5)  
                $("#month_modal_servis").modal("show");
                $("#controls").val(5)          
                $("#controls").val(5)          
                $("#controls").val(5)
        }

        function aktive7(){
            setInterval(() => {
                var snd = new Audio("Muz/sms.mp3");
                snd.play();
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-full-width",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "5000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["success"](`<h1 class='text-center'>Holat: Aktive;</h1>`);
                $("#controls").val(8);
                $("#controls").val(8);
                $("#controls").val(8);
                $("#controls").val(8);
                $("#controls").val(8);
            }, 8000);
        }

        function aktive8(){
            location.reload(true);
        }

        setInterval(() => {
            var a = $("#controls").val();
            if(a == 0){
                aktive();
            }else if(a == 1){
                aktive2();
            }else if(a == 2){
                aktive3();
            }else if(a == 4){
                aktive4();
            }else if(a == 5){
                aktive5();
            }else if(a == 7){
                aktive7();
            } else if(a == 8){
                $("#controls").val(0);
                $("#controls").val(0);
                $("#controls").val(0);
                aktive8();
            }
        }, 8000);
      </script>

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>

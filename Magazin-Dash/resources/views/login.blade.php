<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script src="jquery-3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="toastr/toastr.min.css" />
    <script src="toastr/toastr.min.js"></script>
    <style>
        .just{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dfg{
            width: 45%;
        }

    </style>
</head>
<body>
<div class=" just">
    <div class="card card-info dfg">
      <div class="card-header">
        <h3 class="card-title">Войти Ассаунт</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('login-user') }}" method="POST" id="abcd">
        @csrf
        <div class="card-body">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Логин</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
              <span class="text-danger error-text login_error"></span>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Парол</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="parol" id="parol" placeholder="Парол">
              <span class="text-danger error-text parol_error"></span>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="check" id="check">
                <label class="form-check-label" for="exampleCheck2">Тасдиклаш ?</label>
              </div>
              <span class="text-danger error-text check_error"></span>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Войти</button>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
</div>
<script>
  $("#sadfas").on("click", function(){
    alert(100);
  });

  $('#abcd').on('submit', function(e) {
    e.preventDefault();
    var form = this;
        $.ajax({
        url:$(form).attr('action'),
        method:$(form).attr('method'),
        data:new FormData(form),
        processData:false,
        dataType:'json',
        contentType:false,
        beforeSend:function(){
            $(form).find('span.error-text').text('');
        },
        success:function(data){
            if(data.data == 200){
                toastr.success("Привет");
                $(form)[0].reset();                            
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
                    $(form).find('span.'+prefix+'_error').text(val[0]);
                });
            }
        }
    });
});
</script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
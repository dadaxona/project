
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
    <link rel="stylesheet" href="toastr/toastr.min.css" />
  </head>
  <style>
    #abcd{
        position: absolute;
        width: 25%;
        height: auto;
        z-index: 10001;
        top: 36%;
        left: 35%;
        background: rgba(0, 0, 0, 0.6);
        padding: 30px;
        color: white;
    }

    .imej{
        width: 100%;
        height: 100vh;
    }
  </style>
  <body>
   <img src="imges/fot.jpg" alt="" class="imej">
   <form action="{{ route('login-user') }}" method="POST" id="abcd">
    @csrf
    <div>
        <div class="form-group">
            <label class="float-label">Логин</label>
            <input type="text" name="login" class="form-control" id="login">
            <span class="text-danger error-text login_error"></span>
        </div>
        <div class="form-group">
            <label class="float-label">Парол</label>
            <input type="password" name="password" class="form-control" id="password">
            <span class="text-danger error-text password_error"></span>
        </div>
        <div class="row m-t-30">
            <div class="col-md-12 fab" >
                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Выход</button>
            </div>
        </div>
    </form>

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
<script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
<script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
<script src="toastr/toastr.min.js"></script>
<script>
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
</body>
</html>

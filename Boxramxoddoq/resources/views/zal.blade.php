<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New York</title>
    <link href="bootstrap-5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="toastr/toastr.min.css" />
    <script src="jquery/jquery.min.js"></script>
    <style>
        body{
            /* font-style: oblique; */
            font-weight: 600;
        }
        .aaasss{
            font-size: 100px;
            font-weight: 600;
            margin-top: 100px;
            margin-bottom: 100px;
        }
        .a1{
            border: 1px solid #e1dede;
        }
        .a2{
            height: 100vh;
            border: 1px solid #e1dede;
        }
        .im{
            border: 1px solid lightgrey;
            border-radius: 6px;
            margin-top: 8px;
        }
        #im{
            width: 170px;
            height: 134px;
            padding-left: 17px;
        }
        .h3{
            padding-left: 37px;
        }
        .im2{
            border: 1px solid lightgrey;
            border-radius: 6px;
            height: 300px;
            width: 30%;
        }
        #im2{
            width: 72%;
            height: 196px;
            padding: 6px;
        }
        #joylash{
            height: 90%;
            overflow-y: scroll;
        }
        #joyl{
            height: 90%;
            overflow-y: scroll;
        }
        #joyl2{
            height: 90%;
            overflow-y: scroll;
        }
        #im3{
            width: 111px;
            height: 87px;
            margin-top: 9px;
            margin-left: 12px;
        }
        .borr2{
            margin-left: 12px;
            border-radius: 6px;
        }
        .borr{
            border: 1px solid #e1e1e1;
        }

        .thumb-preview__video{
            width: 100%;
            height: 100%;
        }
        
        .blu{
            font-style: oblique;
            font-weight: revert;
        }

        .reklamonli {
            color: blue;
            animation: shuu 5s linear infinite;
        }
        @keyframes shuu{
            0%{
              opacity:1;
            }
            50%{
              opacity:0;
              
            }
            100%{
                opacity:1;
            }
             
         }
    </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-5 a2">
                    <h4 class="text-center alert alert-success mt-2" id="tttt" onclick="toggleFullScreen()">Тайёор заказлар</h4>
                    <div id="joylash">
                    </div>
                </div>
                <div class="col-2">
                    
                </div>
                {{-- <div class="col-8 a2">
                    <video autoplay loop muted playsinline controls width="100%" height="80%">
                        <!--<source src="video/b.mp4" type="video/mp4">-->
                    </video>
                    <hr>
                    <div class="text-center reklamonli">
                        <h1 class="blu">Online reklama tv
                        <br>
                         (99) 221-58-58
                        </h1>
                    </div>
                </div> --}}
                <div class="col-5 a2">
                    <h4 class="text-center alert alert-warning mt-2">Тайёрланмокда</h4>
                    <hr>
                    <div id="joyl2">                 
                    </div>
                </div>
            </div>
        </div>

        <script>

            function toggleFullScreen() {
                if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {
                    if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                    } else if (document.documentElement.msRequestFullscreen) {
                    document.documentElement.msRequestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.exitFullscreen) {
                    document.exitFullscreen();
                    } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                    } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                    }
                }
            }
            function abcde(){
                var snd = new Audio("Muz/sms.mp3");
                snd.play();
            }
            function zakazsd(){
                $.ajax({
                    url: "{{ route('zakazsd') }}",
                    method: "GET",
                    success:function(data){
                        $("#joyl2").html(data);
                    }
                });
            }

            function toast(){
                $.ajax({
                    url: "{{ route('toast') }}",
                    method: "GET",
                    success:function(data){
                        if(data){
                            abcde();
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
                            toastr["success"]("<h1 class='text-center aaasss'>Заказ №  " + data.uuid + "  Тайёр</h1>");
                        }else{

                        }
                    }
                });
            }

            function tayyorzakaz(){
                $.ajax({
                    url: "{{ route('tayyorzakaz') }}",
                    method: "GET",
                    success:function(data){
                        $("#joylash").html(data);
                    }
                });
            }

            function aktivat(){
                $.ajax({
                    url: "{{ route('datasrokdb') }}",
                    method: "GET",
                    success:function(data){
                        if(data.code == 0){
                            window.location.href = "/logaut";
                        }else{}
                    }
                });
            }
            setInterval(() => {
                aktivat();
            }, 2000);

            setInterval(() => {
                zakazsd();
                tayyorzakaz();
            }, 3000);

            setInterval(() => {
                toast();
            }, 3000);


           
        </script>
        <script src="toastr/toastr.min.js"></script>
        <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
        <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
    </body>
</html>

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
        .ro{
            border: 3px solid #000000;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 7px;
        }
        .borrd{
            border-bottom: 1px solid;
            padding-bottom: 20px;

        }
        #im{
            width: 180px;
            height: 168px;
            padding: 37px;
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
            width: 60px;
            height: 45px;
        }
        #joylash{
            height: 90%;
            overflow-y: scroll;
        }
        #joyl{
            height: 90%;
            overflow-y: scroll;
        }

        #im3{
            width: 63%;
            height: 105px;
        }
        .ale{
            border-radius: 5px; 
            border: 2px solid rgb(1, 164, 1); 
            color: rgb(0, 70, 0);
            background-color: rgb(86, 255, 86);
            animation: shuu 1s infinite;
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
        .ale2{
            border-radius: 5px; 
            border: 2px solid rgb(164, 1, 1); 
            color: rgb(70, 0, 0);
            background-color: rgb(255, 86, 86);
        }
        .joy{
            font-size: 18px;
            font-style: oblique;
            font-weight: 700;
        }
        .td{
            font-size: 22px;
            font-style: oblique;
            font-weight: 700;
        }
        .tab{
            font-style: oblique;
        }
        hr {
            margin: 1rem 0;
            color: inherit;
            border: 0;
            border-top: 2px solid;
            opacity: 3.25;
        }
    </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                {{-- <div class="col-2 a2">
                    <div id="aler">

                    </div>
                    <hr>
                    <div id="alert2" class="row p-2">
                        
                    </div>
                </div> --}}
                <div class="col-12 a2">
                    <div class="row joy">
                        <div class="col-7">
                             <a href="/logaut" class="btn btn-danger mt-2">Назад</a>
                            <h4 onclick="toggleFullScreen()">Жами заказлар сони: <span id="count"></span></h4>
                        </div>
                        <div class="col-5 row" id="aler">

                        </div>
                    </div>
                    <hr>
                    <div id="joyl">                   
                        <div id="zakazayt">
                            
                        </div>
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

            $(document).on("click", "#jonat", function(){
                var id = $(this).data("id");
                let _token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('jonatish') }}",
                    method: "POST",
                    data: {
                        _token: _token,
                        id: id
                    },
                    dataType:'json',
                    success:function(data){
                        var k= "";
                        k = "Zakaz no`mer:" + "  " + " << " + data.data.uuid + " >>";                                     
                        k+= " \n";
                        k+= "--------------------------------";
                        k+= " \n";
                        for(i = 0; i < data.data2.length; i++){
                            k+= ""
                            k+= data.data2[i]["name"];
                            k+= " -- " + data.data2[i]["son"];
                            k+= " * " + data.data2[i]["summa"] + " sum";
                            k+= ";\n";
                        }
                        k+= "\n";
                        k+= "-------------------------------";
                        k+= " \n";
                        k+= "Jami summa:" + "  " + data.data.summa + " sum;";
                        k+= "\n";
                        $.ajax({
                            url: "http://printer/printer",
                            type: "GET",
                            data: {
                                text: k
                            },
                        });
                        status0();
                    }
                });
            });
        
            function aler(){
                $.ajax({
                    url: "{{ route('aler') }}",
                    method: "GET",
                    success:function(data){
                        if(data == 200){
                            $("#aler").html("<div class='alert ale text-center mt-1'>Буюртма берилди</div>");
                        }else{
                            $("#numb").html('');
                            $("#summazakaz").html('');
                            $("#aler").html("<div class='alert ale2 text-center mt-1'>Хозирча буюртма йок</div>");
                        }
                    }
                });
            }

            function abcde(){
                var snd = new Audio("Muz/sms.mp3");
                snd.play();
            }
            
            function signaler(){
                $.ajax({
                    url: "{{ route('signaler') }}",
                    method: "GET",
                    success:function(data){                   
                       if(data.code == 200){
                        abcde();
                       }else{

                       }
                    }
                });
            }
            signaler();

            function status0(){
                $.ajax({
                    url: "{{ route('buymal') }}",
                    method: "GET",
                    success:function(data){                   
                        $("#zakazayt").html(data.data);
                        $("#count").html( data.count + "  та;");

                    }
                });
            }

            function zakaz(){
                $.ajax({
                    url: "{{ route('zakaz') }}",
                    method: "GET",
                    success:function(data){
                        $("#alert2").html(data);
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
                aler();
                zakaz();
                status0();
            }, 5000);

            setInterval(() => {
                signaler();
            }, 3000);
        </script>
        <script src="toastr/toastr.min.js"></script>
        <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
        <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
    </body>
</html>

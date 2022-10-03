<!DOCTYPE html>
<html lang="en">
<head>
    <title>100</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap-5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery-3.6.0/dist/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="toastr/toastr.min.css" />
    <script src="toastr/toastr.min.js"></script>
    <style>
    body{
        margin: 0;
        padding: 0;
    }
    #di{
        position: absolute;
        margin-top: 4px;
        margin-left: 85px;
    }
    .otk{
        color: blue;
    }
    .zak{
        color: red;
    }
    .bbbb{
        background-color: #6ce36c;
        border-right: 1px solid #357c35;
    }
    .ssswq{
        position: absolute;
        margin-top: 4px;
    }
    .bbbb2{
        background-color: #4ed8f7;
    }
    .swer{
        font-weight: 900;
        font-size: 120px;        
    }
    .swer2{
        font-weight: 900;
        font-size: 120px;        
    }
    .extr25552s{
        height: 500px;
        border-right: 1px solid #bbbbbb;
        font-size: 25px;
        font-variant: petite-caps;
        font-weight: 800;
    }
    .extr25552{
        height: 500px;
        border-left: 1px solid #bbbbbb;
        font-size: 25px;
        font-variant: petite-caps;
        font-weight: 800;
    }
    .scrolll2{
        overflow-x: auto;
    }
    </style>
</head>
<body>
    <div class="row p-0 m-0">
        <div class="col-6 bbbb">
            <a href="/logaut" class="btn btn-danger ssswq">Chiqish</a>
            <div id="di">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-mic-mute-fill zak" viewBox="0 0 16 16"><path d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4.02 4.02 0 0 0 12 8V7a.5.5 0 0 1 1 0v1zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a4.973 4.973 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4zm3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3z"/><path d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607zm-7.84-9.253 12 12 .708-.708-12-12-.708.708z"/></svg>
            </div>
            <h1 class="swer text-center "></h1>
        </div>
        <div class="col-6 text-center bbbb2">
            <h1 class="swer2"></h1>
        </div>
    </div>
    <div class="row p-0 m-0">
        <div class="col-6 text-center">
            <div class="extr25552s scrolll2">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Navbat №</th>
                        </tr>
                    </thead>
                    <tbody id="u">

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6 text-center">
            <div class="extr25552 scrolll2">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Navbat №</th>
                        </tr>
                    </thead>
                    <tbody id="m">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <input type="hidden" id="zuk">

    <script>

        $(document).on("click", ".zak", function(){
            $("#zuk").val(1);
            $("#di").html('<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-mic-fill otk" viewBox="0 0 16 16"><path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/><path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/></svg>');
        });

        $(document).on("click", ".otk", function(){
            $("#zuk").val(0);
            $("#di").html('<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-mic-mute-fill zak" viewBox="0 0 16 16"><path d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4.02 4.02 0 0 0 12 8V7a.5.5 0 0 1 1 0v1zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a4.973 4.973 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4zm3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3z"/><path d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607zm-7.84-9.253 12 12 .708-.708-12-12-.708.708z"/></svg>');
        });
    
        function abcde(){
            var snd = new Audio("Muz/smsd.mp3");
            snd.play();
        }

        function toast(){
            var zuk = $("#zuk").val();
            $.ajax({
                url: "{{ route('toast') }}",
                method: "GET",
                success:function(data){
                    if(data == 200){
                        if(zuk == 1){
                            abcde();
                        }else{}
                    }else{

                    }
                }
            });
        }

        function hoz()
        {
            $.ajax({
                url:"{{ route('hoz') }}",
                method:'GET',
                success:function(data)
                {
                    if(data.id.id){
                        $('.swer').html("U-" + data.id.count);
                    }else{
                        $('.swer').html("U-" + 0);
                    }
                    var rows = "";
                    data.data.forEach(room => {
                        if(room.count == data.id.count){

                        }else{
                            rows+=`
                            <tr style="border-bottom: 1px solid #ababab;">
                                <td>
                                    U-${room.count}                                                            
                                </td>
                            </tr>
                            `;
                        }
                    });
                    $("#u").html(rows);
                }
            });
        }

        function hozm()
        {
            $.ajax({
                url:"{{ route('hozm') }}",
                method:'GET',
                success:function(data)
                {
                    if(data.id.id){
                        $('.swer2').html("M-" + data.id.count);
                    }else{
                        $('.swer2').html("M-" + 0);
                    }
                    var rows = "";
                    data.data.forEach(room => {
                        if(room.count == data.id.count){

                        }else{
                            rows+=`
                            <tr style="border-bottom: 1px solid #ababab;">
                                <td>
                                    M-${room.count}                                                            
                                </td>
                            </tr>
                            `;
                        }
                    });
                    $("#m").html(rows);
                }
            });
        }
            
    setInterval(() => {
        toast();
        hoz();
        hozm();
    }, 3000);
    </script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
    <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
</body>
</html>
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
            font-style: oblique;
            font-weight: 600;
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
        .pad{
            width: 45%;
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
            height: 84%;
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

    </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 p-4 a1">
                     <a href="/logaut" class="btn btn-danger mt-2">Назад: <span id="srcd"></span></a>
                    <h3 onclick="toggleFullScreen()">Меню</h3>
                    {{-- <h4 id="srcd"></h4> --}}
                </div>
                <div class="col-7 p-4 a1 text-center">
                    <h3>Таомлар</h3>
                </div>        
                <div class="col-3 p-4 a1 row">
                    <div class="col-6 row mx-2">
                        <button class="btn btn-success pt-3 pb-3" id="buyurtma">Буюртма бериш</button>
                    </div>
                    <div class="col-6 row">
                        <button class="btn btn-primary pt-3 pb-3" id="buyurtmasiz">Буюртмасиз</button>                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2 a2">
                    <div id="joylash">
                    </div>
                </div>
                <div class="col-7 a2">            
                    <div id="joyl">    
                        <div id="joylash2" class="row">
                        </div>
                    </div>
                </div>
                <div class="col-3 a2">
                    <h4>Жами: <span id="prib"></span></h4>
                    <hr>
                    <div id="joyl2">    
                        <div id="joylash3" class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Изох колдириш</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id_kam">
                    <input type="text" name="kamentariya" id="kamentariya" class="form-control" placeholder="Изох колдириш">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="izoh" class="btn btn-primary">Save</button>
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

             let _token = $('meta[name="csrf-token"]').attr('content');
            $(document).on("click", "#kament", function (){
                var id = $(this).data("id");
                var kament = $(this).data("kament");
                $("#id_kam").val(id);
                $("#kamentariya").val(kament);
                $("#exampl").modal("show");
            });

            $(document).on("click", "#izoh", function (){                
                var id = $("#id_kam").val();
                var kament = $("#kamentariya").val();
                $.ajax({
                    url: "{{ route('izoh') }}",
                    method:'POST',
                    data:{
                        id: id,
                        kament: kament,
                        _token: _token
                    },
                    dataType:'json',
                    success:function(data){
                        getData3();
                        $("#id_kam").val('');
                        $("#kamentariya").val('');
                        $("#exampl").modal("hide");
                    }
                });
            });
    

            $(document).on("click", "#buyurtma", function (){
                $.ajax({
                    url: "{{ route('buyurtma') }}",
                    method:'GET',
                    success:function(data){
                        if(data == 200){
                            $.ajax({
                                url: "{{ route('buyurtma2') }}",
                                method:'GET',
                                success:function(data){
                                    var k= "";
                                        k = "Zakaz no`mer:" + "    " + " << " + data.id + " >>;";                                     
                                        k+= " \n";
                                        k+= "_______________________________________________";
                                        k+= " \n";
                                        for(i = 0; i < data.context.length; i++){
                                            k+= ""
                                            k+= "\n";
                                            k+= data.context[i]["name"];
                                            k+= ";\n";
                                            k+= "\n";
                                            k+= data.context[i]["son"] +  " * " + data.context[i]["sum"] + " sum";
                                            k+= ";\n";
                                            k+= "-----------------------------------------------";
                                            k+= " \n";
                                        }
                                        k+= "_______________________________________________";
                                        k+= " \n";
                                        k+= " \n";
                                        k+= "Jami summa:" + "           " + data.pribl + " sum;";
                                        k+= "\n";
                                        $.ajax({
                                            url: "http://printer/printer",
                                            type: "GET",
                                            data: {
                                                text: k
                                            },
                                        });
                                    getData3();
                                    toastr.success("Буйуртма жонатилди");
                                }
                            });
                        }else{
                            toastr.error("Буйуртма йок");
                        }
                    }
                });
            });
            
            $(document).on("click", "#buyurtmasiz", function (){
                $.ajax({
                    url: "{{ route('buyurtma') }}",
                    method:'GET',
                    success:function(data){
                        if(data == 200){
                            $.ajax({
                                url: "{{ route('buyurtmasiz') }}",
                                method:'GET',
                                success:function(data){
                                    var k= "";
                                        k = "Zakaz no`mer:" + "    " + " << " + data.id + " >>;";                                     
                                        k+= " \n";
                                        k+= "_______________________________________________";
                                        k+= " \n";
                                        for(i = 0; i < data.context.length; i++){
                                            k+= ""
                                            k+= "\n";
                                            k+= data.context[i]["name"];
                                            k+= ";\n";
                                            k+= "\n";
                                            k+= data.context[i]["son"] +  " * " + data.context[i]["sum"] + " sum";
                                            k+= ";\n";
                                            k+= "-----------------------------------------------";
                                            k+= " \n";
                                        }
                                        k+= "_______________________________________________";
                                        k+= " \n";
                                        k+= " \n";
                                        k+= "Jami summa:" + "           " + data.pribl + " sum;";
                                        k+= "\n";
                                        $.ajax({
                                            url: "http://printer/printer",
                                            type: "GET",
                                            data: {
                                                text: k
                                            },
                                        });
                                    getData3();
                                    toastr.success("Буйуртма сакланди");
                                }
                            });
                        }else{
                            toastr.error("Буйуртма йок");
                        }
                    }
                });
            });

            $("#shov").on("click", function(){
                $("#exam").modal("show");
            })

            $("#shov2").on("click", function(){
                $("#exam2").modal("show");
            })
            function getData(){
                $.ajax({
                    url: "{{ route('getdate') }}",
                    method:'GET',
                    success:function(data){
                        let rows = '';
                        data.forEach(room => {
                            rows += `
                            <div class="col-12 im" id="otkazish" data-id="${room.id}">
                                <div>
                                    <img src="images/${room.file}" alt="" id="im">
                                </div>
                                <div>
                                    <h3 class="mx-3">${room.name}</h3>
                                </div>
                            </div>
                            `;
                        });
                        $("#joylash").html(rows);
                    }
                });
            }
            getData();
            getData();

            function getData2(id = ''){
                $.ajax({
                    url: "{{ route('getdate2') }}",
                    method:'GET',
                    data:{id: id},
                    dataType:'json',
                    success:function(data){                 
                        $("#joylash2").html(data);
                    }
                });
            }
        
            function getData3(){
                $.ajax({
                    url: "{{ route('getdate3') }}",
                    method:'GET',
                    dataType:'json',
                    success:function(data){
                        $("#joylash3").html(data.data);
                        $("#prib").html(data.pr + " сум");
                    }
                });
            }
            getData3();
            getData3();

            $(document).on("click", "#otkazish", function(){
                var id = $(this).data("id");
                getData2(id);
            });

            $(document).on("click", "#delete", function(){
                var id = $(this).data("id");
                $.ajax({
                    url: "{{ route('delete') }}",
                    method:'POST',
                    data:{
                        id: id,
                        _token: _token
                    },
                    dataType:'json',
                    success:function(data){
                        getData3();
                    }
                });
            });

            $(document).on("click", "#otkazish2", function(){
                var id = $(this).data("id");
                $.ajax({
                    url: "{{ route('store3') }}",
                    method:'GET',
                    data:{id: id},
                    dataType:'json',
                    success:function(data){
                        getData3();
                    }
                });
            });

            function counters() {
                $.ajax({
                    url: "{{ route('counters') }}",
                    method:'GET',
                });
            }
            function aktivat(){
                $.ajax({
                    url: "{{ route('datasrokdb') }}",
                    method: "GET",
                    success:function(data){
                        if(data.code == 0){
                            window.location.href = "/logaut";
                        }else{
                            $("#srcd").html("Срок: " + data.data.srok);
                        }
                    }
                });
            }
            setInterval(() => {
                aktivat();
            }, 2000);

            setInterval(() => {
                counters();
            }, 10000);

        </script>
        <script src="toastr/toastr.min.js"></script>
        <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
        <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
    </body>
</html>

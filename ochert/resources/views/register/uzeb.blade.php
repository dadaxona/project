@extends('register.regustratura')
@section('con')
<style>
    .chiq{
        position: absolute;
        right: 16px;
        margin-top: 10px;
    }
    .a1{
        width: 50%;
        text-decoration: none;
        text-align: center;
        border-bottom: 2px solid blue;
    }
    .a2{
        width: 50%;
        text-decoration: none;
        text-align: center;
        background-color: #f7f7f7;
    }
    .ah{
        width: 100%;
        color: blue;
        font-variant: petite-caps;
        font-weight: bold;
        font-size: 72px;
    }
    .hh33{
        font-variant: petite-caps;
        font-weight: bold;
    }
    .sdsd{
        width: 65%;
    }
    .ah2{
        width: 100%;
        color: black;
        font-variant: petite-caps;
        font-weight: bold;
        font-size: 72px;
    }
    .tab{
        width: 100%;
    }
    #chek{
        width: 22px;
        height: 21px;
    }
    .extr25552s{
        height: 390px;
        border-right: 1px solid #bbbbbb;
        border-left: 1px solid #bbbbbb;
    }
    .extr25552{
        height: 600px;
        border-right: 1px solid #bbbbbb;
    }
    .scrolll2{
        overflow-x: auto;
    }
    .fllll{
         margin-left: 36px;
    }
    .alef{
        background-color: #198754;
        color: white;
        width: 32%;
        margin-left: 8px;
        margin-block: 8px;
        position: relative;
        top: 10px;
        padding-top: 7px;
        font-variant: petite-caps;
        font-weight: bold;
    }
    .ddd2{
        position: absolute;
        background-color: #ffafaf;
        color: brown;
        width: 10%;
    }
    .ddd2:hover {
        position: absolute;
        background-color: #ffafaf;
        color: brown;
        width: 10%;
    }
    .ddd3{
        position: absolute;
        background-color: #dc3545;
        color: white;
        width: 10%;
    }
</style>
<a href="/logaut" class="btn btn-danger pl-3 pr-3 chiq">Chiqish</a>
   <div class="d-flex p-0">
        <a href="/glavninachal" class="a1">
            <h1 class="ah">Uzi</h1>
        </a>

        <a href="{{ route('mrtbolim') }}" class="a2">
            <h1 class="ah2">Mrt</h1>
        </a>
   </div>

   <div class="card">
       <div class="card-header">
        <div class="row">
            <div class="col-5">
                <div class="extr25552 scrolll2">
                    <span id="er" style="color: red"></span>
                    <table class="tab">
                        <thead>
                            <tr>
                                <th><input type="text" class="form-control sdsd" id="izla" placeholder="Izlash"></th>
                                <th>Belgilash</th>
                                <th>Summa</th>
                            </tr>
                        </thead>
                        <tbody id="belgi">
        
                        </tbody>
                    </table>
                </div>
            </div>
        <form action="{{ route('userstore') }}" method="POST" id="userFormFFFF" class="col-7">
            @csrf
            <div class="row">
                <input type="hidden" name="id" id="id_u">
                <div class="col-6">
                    <label class="">Ism</label><br>
                    <input type="text" name="name" class="form-control" id="name1">
                    <span class="text-danger error-text name_error"></span>
                </div>
                <div class="col-6">
                    <label class="">Familiya</label><br>
                    <input type="text" name="fam" class="form-control" id="fam1">
                    <span class="text-danger error-text fam_error"></span>
                </div>
                <div class="col-4">
                     <label class="">Tug`ilgan sana</label><br>
                    <input type="date" name="data" class="form-control" id="data1">
                    <span class="text-danger error-text data_error"></span>
                </div>
                <div class="col-4">
                     <label class="">Tel...</label><br>
                    <input type="text" name="tel" class="form-control" id="tel1">
                    <span class="text-danger error-text tel_error"></span>
                </div>
                <div class="col-4">
                    <label class="">Manzil</label><br>
                    <input type="text" name="adress" class="form-control" id="adress1">
                    <span class="text-danger error-text adress_error"></span>
                </div>
                <input type="hidden" name="texnalog" id="texnalog1">
                <input type="hidden" name="jamisumma" id="jamisumma1">
                <div class="col-4 mt-2">
                    <label class="">Masul shifokor </label><br>
                    <select name="doctor" id="doctor" class="form-control">
                        
                    </select>
                    <span class="text-danger error-text doctor_error"></span>
                </div>
                <div class="col-4 mt-2">
                    <label class="">Navbatsiz</label><br>
                    <input type="checkbox" name="ok" id="ok" class="form-check-input mt-2">
                </div>
                <hr class="mt-3">
                <div class="row p-0 m-0">
                    <div class="col-9">
                        <input type="hidden" id="inputer">
                        <h3 class="hh33">Tochka soni: <span id="yonalish"></span>;</h3>
                        <h3 class="hh33">Jami summa: <span id="jamiyigim"></span>;</h3>
                        <input type="number" name="chgirma" id="chgirma1" class="form-control" placeholder="Chegima %">
                        <hr>
                        <div class="row">
                            <div class="col-4 row">
                                <a class="btn btn-warning mx-2 ddd">Tozalash</a>
                            </div>
                            <div id="udalit" class="col-4">
                                
                            </div>
                            <div class="col-4 row">
                                <button type="submit" class="btn btn-success fllll">Saqlash</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="extr25552s scrolll2">
                            <table class="tab text-center">
                                <thead>
                                    <tr>
                                        <th class="row m-2">
                                            <a href="javascript:void(0)" class="btn btn-success keyi">Keyingi  >></a>
                                            <hr>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="uchurt">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>

<script>
    let _token = $('meta[name="csrf-token"]').attr('content');

    $(document).on("click", "#chek", function(){
        var id = $(this).data("id");
        $.ajax({
            url:"{{ route('brlgila') }}",
            method:'POST',
            data:{
                id: id,
                _token: _token
            },
            dataType:'json',
            success:function(data)
            {
                if(data.code == 200){
                    fet();
                    toastr.success("Tanlandi");
                }else{
                    fet();
                    toastr.error("Tanlanmadi");
                }
            }
        });
    });
    
    function cler()
    {
        $.ajax({
            url:"{{ route('clear') }}",
            method:'GET',
            success:function(data)
            {
                $("#er").html('');
                $(".name_error").html('');
                $('#izla').val('');
                $('#id_u').val('');
                $('#name1').val('');
                $('#fam1').val('');
                $('#data1').val('');
                $('#tel1').val('');
                $('#adress1').val('');
                $('#doctor').val('');
                $('#texnalog1').val('');
                $('#jamisumma1').val('');
                $('#chgirma1').val('');
                $("#udalit").html('<a class="btn btn ddd2">O`chirish</a>');
                fet();
                fetch_customer_data();
            }
        });
    }
    cler();
    cler();

    function fet(query = '')
    {
        $.ajax({
            url:"{{ route('itogs') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $("#texnalog1").val(data.yon);
                $("#jamisumma1").val(data.itog1);
                $("#inputer").val(data.yon);
                $("#yonalish").html(data.yon + " ta");
                $("#jamiyigim").html(data.itog + " sum");
            }
        });
    }
    fet();
    fet();
    
    function doctor()
    {
        $.ajax({
            url:"{{ route('doctor') }}",
            method:'GET',
            success:function(data)
            {
                var rows = "";
                rows += `<option value="">Do'ktrni tanlang</option>`;
                data.forEach(room => {
                    rows+=`
                        <option value="${room.tel}">${room.name}</option>
                    `;
                });
                $("#doctor").html(rows);
            }
        });
    }
    doctor();
    doctor();

    function uchurt()
    {
        $.ajax({
            url:"{{ route('uchurt') }}",
            method:'GET',
            success:function(data)
            {
                var rows = "";
                data.forEach(room => {
                    rows+=`
                        <tr style="border-bottom: 1px solid #ababab;">
                            <td>
                                U-${room.count}
                                <a href="javascript:void(0)" id="edituch" data-user_id="${room.user_id}" style="color: green">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </a>                                
                            </td>
                        </tr>
                    `;
                });
                $("#uchurt").html(rows);
            }
        });
    }
    uchurt();
    uchurt();

    function fetch_customer_data(query = '')
    {
        $.ajax({
            url:"{{ route('live_belgi') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#belgi').html(data.table_data);
            }
        });
    }
    fetch_customer_data();
    fetch_customer_data();

    $(document).on("keyup", "#izla", function(){
        fetch_customer_data($(this).val());
    });

    function chaqirish(form){
        fetch_customer_data();
        uchurt();
        fet();
        $(form)[0].reset();
        $("#er").html('');
        $(".name_error").html('');
        $('#izla').val('');
        $('#id_u').val('');
        $('#name1').val('');
        $('#fam1').val('');
        $('#data1').val('');
        $('#tel1').val('');
        $('#adress1').val('');
        $('#doctor').val('');
        $('#texnalog1').val('');
        $('#jamisumma1').val('');
        $('#chgirma1').val('');
        toastr.success("Bajarildi");
    }

    function chekprint(data, ochert, variable) {
        var k= "";                                  
        k+= " \n";
        k+= "_______________________________________________";
        k+= " \n";
        k+= " \n";
        for(i = 0; i < variable.length; i++){
            k+= ""
            k+= variable[i]["tex"];
            k+= " ______________ " + variable[i]["summa"] + " sum";
            k+= ";\n";
            k+= "-----------------------------------------------";
            k+= "\n";
        }
        k+= "_______________________________________________";
        k+= "\n";
        var formatter = new Intl.NumberFormat();
        $.ajax({
            url: "http://printer/printer",
            type: "GET",
            data: {
                ochert: ochert,
                name: data.name,
                fam: data.fam,
                data: data.data,
                tel: data.tel,
                adress: data.adress,
                doctor: data.doctor,
                texnalog: data.texnalog,
                jamisumma: formatter.format(data.jamisumma),
                variable: k
            },
        });
    }

    $('#userFormFFFF').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        var inp = $("#inputer").val();
        if(inp > 0){
            $("#er").html('');
            $.ajax({
              url:$(form).attr('action'),
              method:$(form).attr('method'),
              data:new FormData(form),
              processData:false,
              dataType:'json',
              contentType:false,
              success:function(data){
                if(data.code == 200){
                    chaqirish(form);
                    chekprint(data.data, data.ochert, data.variable);
                }
                if(data.code == 0){
                  $.each(data.error, function(prefix, val){
                    $(form).find('span.'+prefix+'_error').text(val[0]);
                  });
                  toastr.error(data.msg);
                }
                if(data.code == 201){
                    chaqirish(form);
                    chekprint(data.data, data.ochert, data.variable);
                }           
              }
            });
        }else{
            $("#er").html("Xizmat turini belgilang");
            toastr.error("Малумотларни толдиринг");
        }
    });

    $(document).on("click", ".ddd", function(){
        cler();
    });

    $(document).on("click", ".ddd3", function(){
        var id = $('#id_u').val();
        $.ajax({
            url:"{{ route('ddd3') }}",
            method:'GET',
            data:{id: id},
            dataType:'json',
            success:function(data)
            {
                cler();
                uchurt();
            }
        });
    });

    $(document).on("click", ".keyi", function(){
        $.ajax({
            url:"{{ route('keyi') }}",
            method:'GET',
            success:function(data)
            {
                uchurt();
                uchurt();
            }
        });
    });

    $(document).on("click", "#edituch", function(){
        var user_id = $(this).data("user_id");
        $.ajax({
            url:"{{ route('editus') }}",
            method:'GET',
            data:{user_id: user_id},
            dataType:'json',
            success:function(data)
            {
                $('#id_u').val(data.id);
                $('#name1').val(data.name);
                $('#fam1').val(data.fam);
                $('#data1').val(data.data);
                $('#tel1').val(data.tel);
                $('#adress1').val(data.adress);
                $('#doctor').val(data.doktel);
                $('#texnalog1').val(data.texnalog);
                $('#jamisumma1').val(data.jamisumma);
                $('#chgirma1').val(data.chgirma);
                $("#udalit").html('<a class="btn btn-danger ddd3">O`chirish</a>');
                fet();
                fetch_customer_data();
            }
        });
    });
    </script>
@endsection
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
        background-color: #f7f7f7;

    }
    .a2{
        width: 50%;
        text-decoration: none;
        text-align: center;
        border-bottom: 2px solid blue;
    }
    .ah{
        width: 100%;
        color: black;
        font-variant: petite-caps;
        font-weight: bold;
        font-size: 72px;
    }
    .ah2{
        width: 100%;
        color: blue;
        font-variant: petite-caps;
        font-weight: bold;
        font-size: 72px;
    }
    .sdsd{
        width: 65%;
    }
    .hh33{
        font-variant: petite-caps;
        font-weight: bold;
    }
    .ah2{
        width: 100%;
        color: blue;
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
        background-color: #0d6efd;
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
    .ddd3m{
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
                    <span id="erm" style="color: red"></span>
                    <table class="tab">
                        <thead>
                            <tr>
                                <th><input type="text" class="form-control sdsd" id="izlam" placeholder="Izlash"></th>
                                <th>Belgilash</th>
                                <th>Summa</th>
                            </tr>
                        </thead>
                        <tbody id="belgim">
        
                        </tbody>
                    </table>
                </div>
            </div>
        <form action="{{ route('userstorem') }}" method="POST" id="userFormFFFFm" class="col-7">
            @csrf
            <div class="row">
                <input type="hidden" name="id" id="id_um">
                <div class="col-6">
                    <label class="">Ism</label><br>
                    <input type="text" name="name" class="form-control" id="name1m">
                    <span class="text-danger error-text name_error"></span>
                </div>
                <div class="col-6">
                    <label class="">Familiya</label><br>
                    <input type="text" name="fam" class="form-control" id="fam1m">
                    <span class="text-danger error-text fam_error"></span>
                </div>
                <div class="col-4">
                     <label class="">Tug`ilgan sana</label><br>
                    <input type="date" name="data" class="form-control" id="data1m">
                    <span class="text-danger error-text data_error"></span>
                </div>
                <div class="col-4">
                     <label class="">Tel...</label><br>
                    <input type="text" name="tel" class="form-control" id="tel1m">
                    <span class="text-danger error-text tel_error"></span>
                </div>
                <div class="col-4">
                     <label class="">Manzil</label><br>
                    <input type="text" name="adress" class="form-control" id="adress1m">
                    <span class="text-danger error-text adress_error"></span>
                </div>
                <input type="hidden" name="texnalog" id="texnalog1m">
                <input type="hidden" name="jamisumma" id="jamisumma1m">
                <div class="col-4 mt-2">
                    <label class="">Masul shifokor </label><br>
                    <select name="doctor" id="doctorm" class="form-control">
                        
                    </select>
                    <span class="text-danger error-text doctor_error"></span>
                </div>
                <div class="col-4 mt-2">
                    <label class="">Navbatsiz</label><br>
                    <input type="checkbox" name="ok" id="okm" class="form-check-input mt-2">
                </div>
                <hr class="mt-3">
                <div class="row p-0 m-0">
                    <div class="col-9">
                        <input type="hidden" id="inputerm">
                        <h3 class="hh33">Tochka soni: <span id="yonalishm"></span>;</h3>
                        <h3 class="hh33">Jami summa: <span id="jamiyigimm"></span>;</h3>
                        <input type="number" name="chgirma" id="chgirmam" class="form-control" placeholder="Chegima %">
                        <hr>
                        <div class="row">
                            <div class="col-4 row">
                                <a class="btn btn-warning mx-2 dddm">Tozalash</a>
                            </div>
                            <div id="udalitm" class="col-4">
                                
                            </div>
                            <div class="col-4 row">
                                <button type="submit" class="btn btn-primary fllll">Saqlash</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="extr25552s scrolll2">
                            <table class="tab text-center">
                                <thead>
                                    <tr>
                                        <th class="row m-2">
                                            <a href="javascript:void(0)" class="btn btn-primary keyim">Keyingi  >></a>
                                            <hr>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="uchurtm">
                                    
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

    $(document).on("click", "#chekm", function(){
        var id = $(this).data("id");
        $.ajax({
            url:"{{ route('brlgilam') }}",
            method:'POST',
            data:{
                id: id,
                _token: _token
            },
            dataType:'json',
            success:function(data)
            {
                if(data.code == 200){
                    fetm();
                    toastr.success("Tanlandi");
                }else{
                    fetm();
                    toastr.error("Tanlanmadi");
                }
            }
        });
    });
    
    function clerm()
    {
        $.ajax({
            url:"{{ route('clearm') }}",
            method:'GET',
            success:function(data)
            {
                $("#erm").html('');
                $(".name_error").html('');
                $('#izlam').val('');
                $('#id_um').val('');
                $('#name1m').val('');
                $('#fam1m').val('');
                $('#data1m').val('');
                $('#tel1m').val('');
                $('#adress1m').val('');
                $('#doctorm').val('');
                $('#texnalog1m').val('');
                $('#jamisumma1m').val('');
                $('#chgirmam').val('');
                $("#udalitm").html('<a class="btn btn ddd2">O`chirish</a>');
                fetm();
                fetch_customer_datam();
            }
        });
    }
    clerm();
    clerm();

    function fetm(query = '')
    {
        $.ajax({
            url:"{{ route('itogsm') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $("#texnalog1m").val(data.yon);
                $("#jamisumma1m").val(data.itog1);
                $("#inputerm").val(data.yon);
                $("#yonalishm").html(data.yon + " ta");
                $("#jamiyigimm").html(data.itog + " sum");
            }
        });
    }
    fetm();
    fetm();
    
    function doctorm()
    {
        $.ajax({
            url:"{{ route('doctorm') }}",
            method:'GET',
            success:function(data)
            {
                var rows = "";
                rows += `<option value="">Do'ktrni tanlang</option>`;
                data.forEach(room => {
                    rows+=`
                        <option value="${room.doktel}">${room.name}</option>
                    `;
                });
                $("#doctorm").html(rows);
            }
        });
    }
    doctorm();
    doctorm();

    function uchurtm()
    {
        $.ajax({
            url:"{{ route('uchurtm') }}",
            method:'GET',
            success:function(data)
            {
                var rows = "";
                data.forEach(room => {
                    rows+=`
                        <tr style="border-bottom: 1px solid #ababab;">
                            <td>
                                M-${room.count}
                                <a href="javascript:void(0)" id="edituchm" data-user_id="${room.user_id}" style="color: green">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </a>                                
                            </td>
                        </tr>
                    `;
                });
                $("#uchurtm").html(rows);
            }
        });
    }
    uchurtm();
    uchurtm();

    function fetch_customer_datam(query = '')
    {
        $.ajax({
            url:"{{ route('live_belgim') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#belgim').html(data.table_data);
            }
        });
    }
    fetch_customer_datam();
    fetch_customer_datam();

    $(document).on("keyup", "#izlam", function(){
        fetch_customer_datam($(this).val());
    });

    function chaqirishm(form){
        fetch_customer_datam();
        uchurtm();
        fetm();
        $(form)[0].reset();
        $("#erm").html('');
        $('#izlam').val('');
        $('#id_um').val('');
        $('#name1m').val('');
        $('#fam1m').val('');
        $('#data1m').val('');
        $('#tel1m').val('');
        $('#adress1m').val('');
        $('#doctorm').val('');
        $('#texnalog1m').val('');
        $('#jamisumma1m').val('');
        $('#chgirmam').val('');
        toastr.success("Bajarildi");
    }

    
    function chekprintm(data, ochert, variable) {
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
                jamisumma: data.jamisumma,
                variable: k
            },
        });
    }

    $('#userFormFFFFm').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        var inp = $("#inputerm").val();
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
                    chaqirishm(form);
                    chekprintm(data.data, data.ochert, data.variable);
                }                
                if(data.code == 0){
                  $.each(data.error, function(prefix, val){
                    $(form).find('span.'+prefix+'_error').text(val[0]);
                  });
                  toastr.error(data.msg);
                }
                if(data.code == 201){
                    chaqirishm(form);
                    chekprintm(data.data, data.ochert, data.variable);
                }           
              }
            });
        }else{
            $("#erm").html("Xizmat turini belgilang");
            toastr.error("Малумотларни толдиринг");
        }
    });

    $(document).on("click", ".dddm", function(){
        clerm();
    });

    $(document).on("click", ".keyim", function(){
        $.ajax({
            url:"{{ route('keyim') }}",
            method:'GET',
            success:function(data)
            {
                uchurtm();
                uchurtm();
            }
        });
    });

    $(document).on("click", ".ddd3m", function(){
        var id = $('#id_um').val();
        $.ajax({
            url:"{{ route('ddd3m') }}",
            method:'GET',
            data:{id: id},
            dataType:'json',
            success:function(data)
            {
                clerm();
                uchurtm();
            }
        });
    });
    
    $(document).on("click", "#edituchm", function(){
        var user_id = $(this).data("user_id");
        $.ajax({
            url:"{{ route('editusm') }}",
            method:'GET',
            data:{user_id: user_id},
            dataType:'json',
            success:function(data)
            {
                $('#id_um').val(data.id);
                $('#name1m').val(data.name);
                $('#fam1m').val(data.fam);
                $('#data1m').val(data.data);
                $('#tel1m').val(data.tel);
                $('#adress1m').val(data.adress);
                $('#doctorm').val(data.doktel);
                $('#texnalog1m').val(data.texnalog);
                $('#jamisumma1m').val(data.jamisumma);
                $('#chgirmam').val(data.chgirma);
                $("#udalitm").html('<a class="btn btn-danger ddd3m">O`chirish</a>');
                fetm();
                fetch_customer_datam();
            }
        });
    });

    </script>
@endsection
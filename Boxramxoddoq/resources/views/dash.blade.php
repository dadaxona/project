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
            font-weight: 800;
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
        .aaaaaaaa{
            height: 50vh;
            border: 1px solid lightgrey;
            width: 100%;
        }
        .sc{
            height: 80%;
            overflow-y: scroll;
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
            font-size: 18px;
            font-style: oblique;
            font-weight: 700;
        }
        .tab{
            font-style: oblique;
        }
    </style>
    </head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 a2">
                <div class="text-center">
                    <button class="btn btn-primary mt-2" id="shov">Саздат Меню</button>
                </div>
                <hr>
                <div id="joylash">
                </div>
            </div>
            <div class="col-4 a2">
                <button class="btn btn-primary mt-2" id="shov2">Саздат Меню Summa</button>
                <a href="{{ route('nastroyka') }}" class="btn btn-success mt-2">Настройка</a>
                <a href="/logaut" class="btn btn-danger mt-2">Назад</a>
                <hr>
                <div id="joyl">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Img</td>
                                <td>Name</td>
                                <td>Summa</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody id="joylash2">
              
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6">
                <div class="aaaaaaaa">
                    <div class="row">
                        <div class="col-3 row mt-2">
                            <button id="buttonras" class="btn btn-primary mx-3">Расход</button>
                        </div>
                        <div class="col-5 d-flex mt-2">
                            <input type="date" id="date" class="form-control mx-2">
                            <input type="date" id="date2" class="form-control">
                        </div>
                        <div class="col-4 mt-3">
                            <h5>Жами расход: <span id="jamoras"></span></h5>
                        </div>
                    </div>
                    <hr>
                    <div class="sc">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>Расход</td>
                                    <td>Сабапи</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody id="rasxodtab">
                        
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="aaaaaaaa">
                    <div class="row">
                        <div class="col-3 row">
                            <button class="btn btn-primary mx-3 mt-2">
                                Сотув руйхат
                            </button>
                        </div>
                        <div class="col-4 d-flex mt-2">
                            <input type="date" id="dateb" class="form-control mx-2">
                            <input type="date" id="dateb2" class="form-control">
                        </div>
                        <div class="col-5 mt-3">
                            <h5>Жами тушум: <span id="jamorasb"></span></h5>
                        </div>
                    </div>
                    <hr>
                    <div class="sc">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>Номи</td>
                                    <td>Сони</td>
                                    <td>Сумма</td>
                                </tr>
                            </thead>
                            <tbody id="rastab">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>          
    </div>

    <div class="modal fade" id="exam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" class="form-control">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Меню номи</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <span class="text-danger error-text name_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Меню расми</label>
                        <input type="file" name="file" id="file" class="form-control">
                        <span class="text-danger error-text file_error"></span>
                    </div>                        
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exam2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form2" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id2" class="form-control">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Меню тип</label>
                        <select name="praduct_id" id="praduct_id" class="form-control">
                            
                        </select>
                        <span class="text-danger error-text name_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Меню номи</label>
                        <input type="text" name="name" id="name2" class="form-control">
                        <span class="text-danger error-text name_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Меню расми</label>
                        <input type="file" name="file" id="file2" class="form-control">
                        <span class="text-danger error-text file_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Меню сумма</label>
                        <input type="text" name="summa" id="summa2" class="form-control">
                        <span class="text-danger error-text summa_error"></span>
                    </div>    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="examdel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Учиришни хохлайсизми</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">                 
                <input type="hidden" id="iddel">                 
                <div class="text-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Нет</button>
                <button id="del" class="btn btn-success">Да</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

      <div class="modal fade" id="examdel2" tabindex="-1" aria-labelledby="exampleM" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleM">Учиришни хохлайсизми</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">                 
                <input type="hidden" id="iddel2">                 
                <div class="text-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Нет</button>
                <button id="del2" class="btn btn-success">Да</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="buttonras2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formresxod">
                    @csrf
                    <input type="hidden" name="id" id="idras" class="form-control">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Расход сумма</label>
                        <input type="number" name="rasxod" id="rasxod" class="form-control">
                        <span class="text-danger error-text rasxod_error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Сабап корсатинг</label>
                        <input type="text" name="sabap" id="sabap" class="form-control">
                        <span class="text-danger error-text sabap_error"></span>
                    </div> 
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="delra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Учиришни хохлайсизми</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">                 
                <input type="hidden" id="iiid">                 
                <div class="text-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Нет</button>
                <button id="delrete" class="btn btn-success">Да</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
        $("#shov").on("click", function(){
            $("#exam").modal("show");
        });

        $("#shov2").on("click", function(){
            $("#exam2").modal("show");
        });

        $("#buttonras").on("click", function(){
            $("#buttonras2").modal("show");
        });
      
      function getData(){
          $.ajax({
              url: "{{ route('getdate') }}",
              method:'GET',
              success:function(data){
                  let rows = '';
                  let rows2 = '';
                  data.forEach(room => {
                      rows += `
                      <div class="col-12 im" id="otkazish" data-id="${room.id}">
                          <div>
                              <img src="images/${room.file}" alt="" id="im">
                          </div>
                          <div class="">
                              <h3 class="h3">${room.name}</h3>
                              <div class="h3 row p-4">
                              <button class="btn btn-success mb-1" id="edit1" data-id="${room.id}" data-name="${room.name}">
                                  Янгилаш
                              </button>
                              <button class="btn btn-danger" id="delet1" data-id="${room.id}">
                                  Учириш
                              </button>
                          </div>
                          </div>
                      </div>
                      `;
                  });
                  data.forEach(room => {
                      rows2 += `
                      <option value="${room.id}">${room.name}</option>
                      `;
                  });
                  $("#joylash").html(rows);
                  $("#praduct_id").html(rows2);
              }
          });
      }

      function getData2(id = ''){
          $.ajax({
              url: "{{ route('getdate2a') }}",
              method:'GET',
              data:{id: id},
              dataType:'json',
              success:function(data){
                  $("#joylash2").html(data);
              }
          });
      }
  

      $(document).on("click", "#otkazish", function(){
          var id = $(this).data("id");
          getData2(id);
      });

      $(document).on("click", "#edit1", function(){
          $("#id").val($(this).data("id"));
          $("#name").val($(this).data("name"));
          $('#exam').modal('show');
      });

      $(document).on("click", "#delet1", function(){
          $("#iddel2").val($(this).data("id"));
          $('#examdel2').modal('show');
      });

      $(document).on("click", "#edit", function(){
          $("#id2").val($(this).data("id"));
          $("#praduct_id").val($(this).data("praduct_id"));
          $("#name2").val($(this).data("name"));
          $("#summa2").val($(this).data("summa"));
          $('#exam2').modal('show');
      });

      $(document).on("click", "#delet", function(){
          $("#iddel").val($(this).data("id"));
          $('#examdel').modal('show');
      });

      $(document).on("click", "#del", function(){
          var id = $("#iddel").val();
          let _token = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
              url: "{{ route('delet') }}",
              method: "POST",
              data: {
                  _token: _token,
                  id: id
              },
              dataType:'json',
              success:function(data){
                  getData2();
                  toastr.success("Учирилди");
                  $('#examdel').modal('hide');
              }
          });
      });

      $(document).on("click", "#del2", function(){
          var id = $("#iddel2").val();
          let _token = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
              url: "{{ route('delet2') }}",
              method: "POST",
              data: {
                  _token: _token,
                  id: id
              },
              dataType:'json',
              success:function(data){
                  getData();
                  getData2(id);
                  toastr.success("Учирилди");
                  $('#examdel2').modal('hide');
              }
          });
      });
      
      $('#form').on('submit', function(e) {
          e.preventDefault();
          var form = this;
          var id = $("#id").val();
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
              $("#form")[0].reset();
              $("#id").val('');
              if(data.code == 200){
              getData();
              $('#exam').modal('hide');
              toastr.success(data.msg);
              }
              if(data.code == 1){                 
              toastr.error(data.msg);
              }
              if(data.code == 201){
              $("#form")[0].reset();
              $("#id").val('');
              toastr.success(data.msg);
              getData();
              getData2(id);
              $('#exam').modal('hide');
              }           
          }
          });
      });

      $('#form2').on('submit', function(e) {
          e.preventDefault();
          var form = this;
          $.ajax({
          url: "{{ route('store2') }}",
          method: "POST",
          data:new FormData(form),
          processData:false,
          dataType:'json',
          contentType:false,
          beforeSend:function(){
              $(form).find('span.error-text').text('');
          },
          success:function(data){
              if(data.code == 200){                        
              $("#form2")[0].reset();
              getData2();
              $("#id2").val('');
              $('#exam2').modal('hide');
              toastr.success(data.msg);
              }
              if(data.code == 1){
              toastr.error(data.msg);
              }
              if(data.code == 201){
              $("#form2")[0].reset();
              $("#id2").val('');
              toastr.success(data.msg);
              getData2();
              $('#exam2').modal('hide');
              }           
          }
          });
      });

      $('#formresxod').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
            url: "{{ route('formresxod') }}",
            method: "POST",
            data:new FormData(form),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(form).find('span.error-text').text('');
            },
            success:function(data){
                if(data.code == 200){                        
                $("#formresxod")[0].reset();
                rasxodum();
                $("#idras").val('');
                $('#buttonras2').modal('hide');
                toastr.success(data.msg);
                }
                if(data.code == 1){
                toastr.error(data.msg);
                }
                if(data.code == 201){
                $("#formresxod")[0].reset();
                $("#idras").val('');
                toastr.success(data.msg);
                rasxodum();
                $('#buttonras2').modal('hide');
                }           
                }
            });
        });

        function rasxodum(date2 = ''){
            var date = $("#date").val();
            $.ajax({
                url: "{{ route('formres') }}",
                method: "GET",
                data: {
                    date: date,
                    date2: date2
                },
                dataType:'json',
                success:function(data){
                    let rows = '';
                    data.data.forEach(room => {
                        rows += `
                        <tr>
                            <td>${room.rasxod}</td>
                            <td>${room.sabap}</td>
                            <td>
                                <button class="btn btn-success p-2" id="edrasxod" data-id="${room.id}" data-rasxod="${room.rasxod}" data-sabap="${room.sabap}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>    
                                </button>
                                <button class="btn btn-danger p-2" id="delrasxod" data-id="${room.id}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>    
                                </button>
                            </td>
                        </tr>
                        `;
                    });
                    $("#jamoras").html(data.summa + " сум");
                    $("#rasxodtab").html(rows);
                }
            });
        }

        $(document).on("change", "#date2", function(){
            var date2 = $(this).val();
            rasxodum(date2);
        });

        $(document).on("click", "#edrasxod", function(){
            var id = $(this).data("id");
            var rasxod = $(this).data("rasxod");
            var sabap = $(this).data("sabap");
            $("#idras").val(id);
            $("#rasxod").val(rasxod);
            $("#sabap").val(sabap);
            $('#buttonras2').modal('show');
        });

        $(document).on("click", "#delrasxod", function(){
            var id = $(this).data("id");
            $("#iiid").val(id);
            $('#delra').modal('show');
        });
        
        $(document).on("click", "#delrete", function(){
            var id = $("#iiid").val();
            $.ajax({
                url: "{{ route('iiid') }}",
                method: "GET",
                data: {
                    id: id,
                },
                dataType:'json',
                success:function(data){
                    rasxodum();
                    toastr.success("Учирилди");
                    $('#delra').modal('hide');
                }
            });
        });

        function tushum(date2 = ''){
            var date = $("#dateb").val();
            $.ajax({
                url: "{{ route('tushum') }}",
                method: "GET",
                data: {
                    date: date,
                    date2: date2
                },
                dataType:'json',
                success:function(data){
                    let rows = '';
                    data.data.forEach(room => {
                        rows += `
                        <tr>
                            <td>${room.name}</td>
                            <td>${room.son}</td>
                            <td>${room.sum}</td>
                        
                        </tr>
                        `;
                    });
                    $("#jamorasb").html(data.summa + " сум");
                    $("#rastab").html(rows);
                }
            });
        }

        $(document).on("change", "#dateb2", function(){
            var date2 = $(this).val();
            tushum(date2);
        });

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

        getData();
        getData();
        getData2();
        getData();       

        setInterval(() => {
            rasxodum();
        }, 20000);

        setInterval(() => {
            tushum();
        }, 25000);

  </script>
  <script src="toastr/toastr.min.js"></script>
  <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
  <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
</body>
</html>
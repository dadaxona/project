@extends('welcome')
@section('yilds')

<div class="col-md-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('ddr').submit();">Назад</a>
    
        <button id="mod" class="btn btn-primary mx-2">
            Тип создать
          </button>
          <button id="obnav" class="btn btn-success">
            Тип обновление
          </button>
        <div class="card-tools">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="search" placeholder="Search">
          </div>
        </div>
        <!-- /.card-tools -->
      </div>
      <form action="{{ route('tavartip') }}" method="GET" id="ddr">
        <input type="hidden" name="id" id="" value="{{ $tavartur->glavnitip->id }}">
      </form>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <h2 class="ml-4">Главный тип: {{ $tavartur->glavnitip->name }}; <span class="mx-4">Тип: {{ $tavartur->name }}; </span></h2>
      </div>
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody id="tbody">
         
          </tbody>
        </table>
        <!-- /.table -->
      </div>
      
    </div>
    <!-- /.card -->
  </div>

    <!-- Modal -->
    <div class="modal fade" id="exModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Тип создать</h5>
          </div>
          <div class="modal-body">
          <form id="userForm2" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="glavnitip_id" id="" value="{{ $tavartur->glavnitip->id }}">
            <input type="hidden" name="tavartur_id" id="" value="{{ $tavartur->id }}">
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Товар имя</label>
                <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Товар имя">
                <span class="text-danger error-text name_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
                <span class="text-danger error-text img_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар шт</label>
                <input type="text" class="form-control" name="hajm" id="exampleInputName" placeholder="Товар шт">
                <span class="text-danger error-text hajm_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар сумма продажа</label>
                <input type="text" class="form-control" name="pakupka" id="exampleInputName" placeholder="Товар сумма продажа">
                <span class="text-danger error-text pakupka_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар сумма покупка</label>
                <input type="text" class="form-control" name="prodaja" id="exampleInputName" placeholder="Товар сумма покупка">
                <span class="text-danger error-text prodaja_error"></span>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-danger store">Назад</button>
              <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>

  <div class="modal fade" id="tavaredit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ex">Товар обновление</h5>
        </div>
        <div class="modal-body">
          <form id="userForm3" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="glavnitip_id" id="" value="{{ $tavartur->glavnitip->id }}">
            <input type="hidden" name="tavartur_id" id="" value="{{ $tavartur->id }}">
            <input type="hidden" name="id" id="idtavar">
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Товар имя</label>
                <input type="text" class="form-control" name="name" id="namet" placeholder="Товар имя">
                <span class="text-danger error-text name_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img" id="imgt">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
                <span class="text-danger error-text hajm_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар шт</label>
                <input type="text" class="form-control" name="hajm" id="hajmt" placeholder="Товар шт">
                <span class="text-danger error-text hajm_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар сумма продажа</label>
                <input type="text" class="form-control" name="pakupka" id="pakupkat" placeholder="Товар сумма продажа">
                <span class="text-danger error-text pakupka_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар сумма покупка</label>
                <input type="text" class="form-control" name="prodaja" id="prodajat" placeholder="Товар сумма покупка">
                <span class="text-danger error-text prodaja_error"></span>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-danger edit">Назад</button>
              <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
          </form>
          </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="obnavit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ex">Товар обновление</h5>
        </div>
        <div class="modal-body">
          <form id="userForm4" enctype="multipart/form-data">
            @csrf          
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Товар имя</label>
                <select name="name" class="form-control" id="nameselect">
                  
                </select>
                <span class="text-danger error-text name_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img" id="im">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
                <span class="text-danger error-text hajm_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар шт</label>
                <input type="text" class="form-control" name="hajm" id="haj" placeholder="Товар шт">
                <span class="text-danger error-text hajm_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар сумма продажа</label>
                <input type="text" class="form-control" name="pakupka" id="pak" placeholder="Товар сумма продажа">
                <span class="text-danger error-text pakupka_error"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Товар сумма покупка</label>
                <input type="text" class="form-control" name="prodaja" id="pro" placeholder="Товар сумма покупка">
                <span class="text-danger error-text prodaja_error"></span>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-danger store2">Назад</button>
              <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
          </form>
          </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="tavardelete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ex">Товар удалить</h5>
        </div>
        <div class="modal-body">
          <form id="deleteform" action="{{ route('delete3') }}" method="POST">
              @csrf
              <input type="hidden" name="id" id="deleteid">
        </div>
        <div class="text-center">
          <button type="button" class="btn btn-danger mb-4 delete">Нет</button>
          <button type="submit" class="btn btn-primary mb-4">Да</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <script>
    $("#mod").on("click", function(){
        $("#exModal").modal("show");
    });
    $(".store").on("click", function(){
        $("#exModal").modal("hide");
    });
    $(".edit").on("click", function(){
        $("#tavaredit").modal("hide");
    });
    $(".delete").on("click", function(){
        $("#tavardelete").modal("hide");
    });
    $("#obnav").on("click", function(){
      $("#userForm4")[0].reset();
        $("#obnavit").modal("show");
    });
    $(".store2").on("click", function(){
        $("#obnavit").modal("hide");
    });
    var i = 0;
    $("#add").click(function(){            
            ++i;
        $("#dynamicTable").append('<tr><td><input type="hidden" name="addmore['+i+'][glavnitip_id]" id="" value="{{ $tavartur->glavnitip->id }}"></td><td><input type="hidden" name="addmore['+i+'][tavartur_id]" id="" value="{{ $tavartur->id }}"></td><td><input type="text" name="addmore['+i+'][name]" id="" class="form-control col-10" placeholder="Тип номи"></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
  
    $(document).on('click', '.remove-tr', function(){
        $(this).parents('tr').remove();
        --i;               
    });
    
    function getData(query = ''){
      $.ajax({
        url: "{{ route('index3') }}",
        method:'GET',
        data:{
          glavnitip_id: "{{ $tavartur->glavnitip->id }}",
          tavartur_id: "{{ $tavartur->id }}",
          query: query
        },
        dataType:'json',
        success:function(data){
          $("#tbody").html(data);
        }
      });
    }
    getData();
    getData();

    function getSelect(){
      $.ajax({
        url: "{{ route('index3sel') }}",
        method:'GET',
        data:{
          glavnitip_id: "{{ $tavartur->glavnitip->id }}",
          tavartur_id: "{{ $tavartur->id }}",
        },
        dataType:'json',
        success:function(data){
          let rows = '';
          rows+= `<option value="">---</option>`;
            data.forEach(room => {
            rows += `
            <option value="${room.id}">
              ${room.name}
            </option>
            `;
          });
          $("#nameselect").html(rows);
        }
      });
    }
    getSelect();
    getSelect();
    
    $(document).on("change", "#nameselect", function(){
      var id = $(this).val();
      $.ajax({
        url: "{{ route('index3selct') }}",
        method:'GET',
        data:{
          id: id
        },
        dataType:'json',
        success:function(data){
          $("#pak").val(data.pakupka);
          $("#pro").val(data.prodaja);
        }
      });
    });

    $(document).on("keyup", "#search", function(){
      var query = $(this).val();
      getData(query);
    });

    $('#userForm2').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        $.ajax({
          url: "{{ route('store3') }}",
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
              $(form)[0].reset();
              getData();
              toastr.success(data.msg);
              $('#exModal').modal('hide');
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data.code == 201){
              toastr.success(data.msg);
              getData();
              $('#exModal').modal('hide');
            }
           
          }
        });
      });

      function edit(id){
        $.ajax({
        url: "{{ route('edit3') }}",
        method:'GET',
        data:{id:id},
        dataType:'json',
        success:function(data){
          $("#idtavar").val(data.id);
          $("#namet").val(data.name);
          $("#hajmt").val(data.hajm);
          $("#pakupkat").val(data.pakupka);
          $("#prodajat").val(data.prodaja);
          $("#tavaredit").modal("show");
        }
      });
      }

      $('#userForm3').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        $.ajax({
          url: "{{ route('update3') }}",
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
              $(form)[0].reset();
              getData();
              $('#tavaredit').modal('hide');
              toastr.success(data.msg);
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data.code == 201){
              toastr.success(data.msg);
              getData();
              $('#tavaredit').modal('hide');
            }           
          }
        });
      });

      function delet(id){
        $("#deleteid").val(id);
        $("#tavardelete").modal("show");
      }

      $('#deleteform').on('submit', function(e) {
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
            if(data.code == 200){
              $(form)[0].reset();
              getData();
              $('#tavardelete').modal('hide');
              toastr.error(data.msg);
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data.code == 201){
              toastr.error(data.msg);
              getData();
              $('#tavardelete').modal('hide');
            }           
          }
        });
      });

      $('#userForm4').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        $.ajax({
          url: "{{ route('store31') }}",
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
              $(form)[0].reset();
              getData();
              $("#obnavit").modal("hide");
              toastr.success(data.msg);
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.success(data.msg);
            }
            if(data.code == 201){
              toastr.success(data.msg);
              getData();
              $("#obnavit").modal("hide");
            }           
          }
        });
      });
  </script>
@endsection

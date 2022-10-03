@extends('welcome')
@section('yilds')
<div class="col-md-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <button class="btn btn-success" id="gltav">
          Товар кошиш
        </button>

        <div class="card-tools">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="glavnisearch" placeholder="Search">
          </div>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="mailbox-controls">
          <!-- Check all button -->
          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm">
              <i class="far fa-trash-alt"></i>
            </button>
            <button type="button" class="btn btn-default btn-sm">
              <i class="fas fa-reply"></i>
            </button>
            <button type="button" class="btn btn-default btn-sm">
              <i class="fas fa-share"></i>
            </button>
          </div>
          <!-- /.btn-group -->
          <button type="button" class="btn btn-default btn-sm">
            <i class="fas fa-sync-alt"></i>
          </button>
          <div class="float-right">
            1-50/200
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
            <!-- /.btn-group -->
          </div>
          <!-- /.float-right -->
        </div>
        <div class="table-responsive mailbox-messages">
          <table class="table table-hover table-striped">
            <tbody id="tbody">
           
            </tbody>
          </table>
          <!-- /.table -->
        </div>
        <!-- /.mail-box-messages -->
      </div>
      
    </div>
    <!-- /.card -->
  </div>
  <div class="modal fade" id="exModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Тип создать</h5>
        </div>
        <div class="modal-body">
        <form id="userForm2" enctype="multipart/form-data">
          @csrf    
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Товар имя</label>
              <select name="glavnitip_id" class="form-control" id="glavnitip_id">

              </select>
              <span class="text-danger error-text name_error"></span>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Товар имя</label>
              <select name="tavartur_id" class="form-control" id="tavartur_id">
            
              </select>
              <span class="text-danger error-text name_error"></span>
            </div>
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
              <span class="text-danger error-text hajm_error"></span>
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
  <script>
    function getDatadash(query = ''){
      $.ajax({
        url: "{{ route('inde0') }}",
        method:'GET',
        data:{     
          query: query
        },
        dataType:'json',
        success:function(data){
          $("#tbody").html(data);
        }
      });
    }
    getDatadash();
    getDatadash();

    function getSelect(){
      $.ajax({
        url: "{{ route('ind') }}",
        method:'GET',
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
          $("#glavnitip_id").html(rows);
        }
      });
    }
    getSelect();
    getSelect();

    $("#glavnitip_id").on("change", function(){
      var query = $(this).val();
      $.ajax({
        url: "{{ route('ind2') }}",
        method:'GET',
        data:{
          query: query
        },
        dataType:'json',
        success:function(data){
          let rows = '';
            data.forEach(room => {
            rows += `
            <option value="${room.id}">
              ${room.name}
            </option>
            `;
          });
          $("#tavartur_id").html(rows);
        }
      });
    });

    $(document).on("keyup", "#glavnisearch", function(){
      var query = $(this).val();
      getDatadash(query);
    });

    $("#gltav").on("click", function(){
      $("#userForm2")[0].reset();
      $("#exModal").modal("show");
    });
    $(".store").on("click", function(){
      $("#exModal").modal("hide");
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
              getDatadash();
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
              getDatadash();
              $('#exModal').modal('hide');
            }
           
          }
        });
      });

  </script>
@endsection

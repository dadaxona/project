@extends('welcome')
@section('yilds')
<div class="col-md-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <button id="mod" class="btn btn-primary">
            Тип создать
          </button>

        <div class="card-tools">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="search" placeholder="Search">
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

    <!-- Modal -->
    <div class="modal fade" id="exModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Тип создать</h5>
            <a href="javascript:void(0)" id="add" class="btn btn-success m-0 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
              Добавыт
            </a>
          </div>
          <div class="modal-body">
              <form id="userForm2" action="{{ route('store') }}" method="POST">
                  @csrf
                  <table class="col-12" id="dynamicTable">
      
                  </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary store">Close</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
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
          <form id="userForm3" action="{{ route('update') }}" method="POST">
              @csrf
              <input type="hidden" name="id" id="idtavar">
              <input type="text" name="name" class="form-control" id="nametavar">
              <span class="text-danger error-text name_error"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary edit">Назад</button>
          <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
      </form>
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
          <form id="deleteform" action="{{ route('delete') }}" method="POST">
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
    var i = 0;
    $("#add").click(function(){            
            ++i;
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" id="" class="form-control col-10" placeholder="Тип номи"></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
  
    $(document).on('click', '.remove-tr', function(){
        $(this).parents('tr').remove();
        --i;               
    });

    function getData(query = ''){
      $.ajax({
        url: "{{ route('index') }}",
        method:'GET',
        data:{query:query},
        dataType:'json',
        success:function(data){
          let rows =  '';
            data.forEach(room => {
            rows += `
            <tr>
              <td class="col-9">${room.name}</td>
              <td class="col-3 d-flex">
                <button class="btn btn-success" onclick=edit(${room.id})>
                  <i class="nav-icon fas fa-edit"></i>
                </button>
                <button class="btn btn-danger mx-2" onclick=delet(${room.id})>
                  <i class="far fa-trash-alt"></i>
                </button>
                <form action="{{ route('tavartip') }}" method="GET">
                  @csrf
                  <input type="hidden" name="id" value="${room.id}">
                  <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                  </button>
                </form>
              </td>
            </tr>
            `;
        });
        $("#tbody").html(rows);
        }
      });
    }
    getData();
    getData();
    $(document).on("keyup", "#search", function(){
      var query = $(this).val();
      getData(query);
    });
    $('#userForm2').on('submit', function(e) {
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
        url: "{{ route('edit') }}",
        method:'GET',
        data:{id:id},
        dataType:'json',
        success:function(data){
          $("#idtavar").val(data.id);
          $("#nametavar").val(data.name);
          $("#tavaredit").modal("show");
        }
      });
      }

      $('#userForm3').on('submit', function(e) {
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
  </script>
@endsection

@extends('welcome')
@section('yilds')
<style>
    .imag{
        width: 100%;
        height: 500px;
        padding: 20px;
    }
    .ima{
        width: 100%;
        height: 100%;
    }
    .im45{
        padding: 20px;
    }
</style>
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
            <div class="row ver">
         
            </div>
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
            <h5 class="modal-title" id="exampleModalLabel">Создать изображеня</h5>
          </div>
          <div class="modal-body">
              <form id="userForm2img"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="idde">
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
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary store">Close</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </form>
          </div>
        </div>
      </div>
    </div>

  
  <div class="modal fade" id="tavardelete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ex">Реклама удалить</h5>
        </div>
        <div class="modal-body">
          <form id="deleteform" action="{{ route('deleteimages') }}" method="POST">
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

    function getData(){
      $.ajax({
        url: "{{ route('getreklama') }}",
        method:'GET',
        dataType:'json',
        success:function(data){
          let rows =  '';
            data.forEach(room => {
            rows += `
            <div class="col-6">
                <div class="imag">
                    <img src="corusel/${room.img}" alt="" class="ima">
                </div>
                <div class="row im45">
                    <button class="btn btn-success mx-2" onclick="editimg(${room.id})">Edit</button>
                    <button class="btn btn-danger" onclick="delimg(${room.id})">Delete</button>
                </div>
            </div>
            `;
        });
        $(".ver").html(rows);
        }
      });
    }
    getData();
    getData();

    $('#userForm2img').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        $.ajax({
            url: "{{ route('store3img') }}",
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
                if(data.code == 1){
                    $.each(data.error, function(prefix, val){
                    $(form).find('span.'+prefix+'_error').text(val[0]);
                    });
                    toastr.error(data.msg);
                }
                if(data.code == 0){
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

    function editimg(id){
        $("#idde").val(id);
        $("#exModal").modal("show");        
    }

    function delimg(id){
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

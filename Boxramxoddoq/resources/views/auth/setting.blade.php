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
  </head>
  <body>
    <div class="container-fluid mt-2">
        <a href="glavninachal" class="btn btn-danger">Назад</a>
        <button type="button" class="btn btn-primary" onclick="addPost()">Логин и Парол</button>
      <div class="row">
          <table class="table table-hover">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Логин</th>
                <th>Парол</th>
                <th>Статус</th>
                <th>Управление</th>
            </tr>
            </thead>
            <tbody id="clent">

            </tbody>               
        </table>
      </div>
    </div>
      
    <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="userForm" action="{{ route('storeishchi') }}" method="POST">
                @csrf
                <input type="hidden" name="id" id="id">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Имя</label>
                <input type="text" class="form-control" name="name" id="name">
                <span class="text-danger error-text name_error"></span>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Логин</label>
                <input type="text" class="form-control" name="login"  id="login">
                <span class="text-danger error-text login_error"></span>
              </div>
              <div class="mb-3">
                  <label for="message-text" class="col-form-label">Парол</label>
                  <input type="text" class="form-control" name="password" id="password">
                  <span class="text-danger error-text password_error"></span>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Статус</label>
                  <input type="number" class="form-control" name="count" id="count">
                  <span class="text-danger error-text count_error"></span>
                </div>  
              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Назад</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="post-modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Товарни очириш</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <input type="hidden" name="id5" id="id5">
            </div>
            <div class="text-center pb-4">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Нет</button>
                <button type="submit" onclick="dele2()" class="btn btn-success">Да</button>
            </div>
        </div>
      </div>
    </div>
<script>

  function addPost() {
    $("#id").val('');
    $("#name").val('');
    $("#login").val('');
    $("#password").val('');
    $('#post-modal').modal('show');
  }

  $(document).on("click", "#editPost", function(){
    $("#id").val($(this).data("id"));
    $("#name").val($(this).data("name"));
    $("#login").val($(this).data("login"));
    $("#password").val($(this).data("password"));
    $("#count").val($(this).data("count"));
    $('#post-modal').modal('show');
  });

  $(document).ready(function(){
    fetch_customer_data();
    function fetch_customer_data(query = '')
    {
        $.ajax({
            url:"{{ route('live_ishchi') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#clent').html(data.table_data);
            }
        })
    }
    $('#userForm').on('submit', function(e) {
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
              fetch_customer_data();
              $('#post-modal').modal('hide');
              toastr.success(data.msg);
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data.code == 201){
              $(form)[0].reset();
              fetch_customer_data();
              $('#post-modal').modal('hide');
              toastr.success(data.msg);
            }           
          }
        });
      });
    
  });

  function deletePost(id) {
    $("#id5").val(id);
    $('#post-modal5').modal('show');
  }
  $(document).on("click", "#deletePost", function(){
    $("#id5").val($(this).data("id"));
    $('#post-modal5').modal('show');
  });

  function dele2() {
    var id = $("#id5").val();
    let _url = `deleteishchi/${id}`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: 'POST',
        data: {
          _token: _token
        },
        success: function(data) {
          $("#row_"+id).remove();
          $('#post-modal5').modal('hide');
          toastr.success(data.msg);
        }
      });
  }

</script>
<script src="toastr/toastr.min.js"></script>
<script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
<script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
</body>
</html>
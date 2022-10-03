@extends('welcome')
@section('connect')

<div class="card">
  <h3 class="text-center">Uze malumotlar</h3>
    <div class="card-header">
        <form action="{{ route('uzestor') }}" method="POST" id="userForm">
            @csrf
            <div class="row">
                <input type="hidden" name="id" id="id1">
                <div class="col-4">
                    <label class="">Texnalo`giya</label>
                    <br>
                    <input type="text" class="form-control" name="tex" id="tex1">
                </div>
                <div class="col-4">
                    <label class="">Summasi</label>
                    <br>
                    <input type="number" class="form-control" name="summa" id="summa1">
                </div>               
                <div class="col-4 mt-4">
                    <button type="submit" class="btn btn-success">Saqlash</button>
                </div>
            </div>
        </form>
        <div class="row">
            <table class="tab">
                <thead>
                    <tr>
                        <th>Texnalo`giya</th>
                        <th>To`lov summasi</th>
                        <th>Y / O`</th>
                    </tr>
                </thead>
                <tbody id="live_uze">

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="delmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">O`chirishni xoxlaysizmi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="delForm" action="{{ route('delpost') }}" method="POST">
              @csrf
              <input type="hidden" name="id" id="id2">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Qaytish</button>
          <button type="submit" class="btn btn-danger">O'chirish</button>
        </div>
      </form>
      </div>
    </div>
  </div>

<script>
    
    function fetch_cus(query = '')
    {
        $.ajax({
            url:"{{ route('live_uze') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#live_uze').html(data.table_data);
            }
        })
    }
    fetch_cus();
    fetch_cus();

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
            if(data == 200){
              $(form)[0].reset();
              fetch_cus();
              $('#id1').val('');
              $('#tex1').val('');
              $('#summa1').val('');
              $('#post-modal').modal('hide');
             toastr.success("Bajarildi");
            }
            if(data.code == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data == 201){
              $(form)[0].reset();
              fetch_cus();
              $('#id1').val('');
              $('#tex1').val('');
              $('#summa1').val('');
              $('#post-modal').modal('hide');
             toastr.success("Bajarildi");
            }           
          }
        });
      });
    
      $(document).on("click", "#editpost", function (){
        $('#id1').val($(this).data("id"));
        $('#tex1').val($(this).data("tex"));
        $('#summa1').val($(this).data("summa"));
      });

      $('#delForm').on('submit', function(e) {
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
            if(data == 200){
              $(form)[0].reset();
              fetch_cus();
              $('#id2').val('');
              $('#delmodal').modal('hide');
              toastr.success("Bajarildi");
            }
            if(data == 0){
              $.each(data.error, function(prefix, val){
                $(form).find('span.'+prefix+'_error').text(val[0]);
              });
              toastr.error(data.msg);
            }
            if(data == 201){
              $(form)[0].reset();
              fetch_cus();
              $('#id2').val('');
              $('#delmodal').modal('hide');
              toastr.success("Bajarildi");
            }           
          }
        });
      });

      $(document).on("click", "#delpost", function (){
        $('#id2').val($(this).data("id"));
        $("#delmodal").modal("show");
      });
    
</script>
@endsection
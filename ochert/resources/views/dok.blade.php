@extends('welcome')
@section('connect')
<style>
  #tavar2{
    display: none;
    background-color: rgb(0 0 0 / 75%);
    padding: 32px;
    border-radius: 12px;
    width: 99%;
    margin: auto;
    position: absolute;
    border-radius: 3px solid black; 
    color: white;
  }
</style>
<div class="card">
  <h3 class="text-center">Shifokorlar ro`yxati</h3>
    <div class="card-header">
        <form action="{{ route('dokstor') }}" method="POST" id="userForm">
            @csrf
            <div class="row">
                <input type="hidden" name="id" id="id1">
                <div class="col-3">
                    <label class="">Ism</label>
                    <br>
                    <input type="text" class="form-control" name="name" id="name1">
                    <span class="text-danger error-text name_error"></span>
                </div>
                <div class="col-3">
                    <label class="">Familiya</label>
                    <br>
                    <input type="text" class="form-control" name="fam" id="fam1">
                    <span class="text-danger error-text fam_error"></span>
                </div>
                <div class="col-3">
                  <label class="">Telefon</label>
                  <br>
                  <input type="number" class="form-control" name="tel" id="tel1">
                  <span class="text-danger error-text tel_error"></span>
              </div>
              <div class="col-3">
                  <label class="">Yashash joyi</label>
                  <br>
                  <input type="text" class="form-control" name="adress" id="adress1">
                  <span class="text-danger error-text adress_error"></span>
              </div>
                <div class="col-3">
                  <label class="">Yo`nalish</label>
                  <br>
                  <input type="text" class="form-control" name="yonalish" id="yonalish1">
                  <span class="text-danger error-text yonalish_error"></span>
              </div>   
                <div class="col-3 mt-4">
                    <button type="submit" class="btn btn-success">Saqlash</button>
                </div>
            </div>
        </form>
        <div class="row">
            <table class="tab">
                <thead>
                    <tr>
                        <th>Ism</th>
                        <th>Familiya</th>
                        <th>Tel...</th>
                        <th>Yashash joyi</th>
                        <th>Yo`nalish</th>
                        <th>Kunlik to`chka</th>
                        <th>Y / O`</th>
                    </tr>
                </thead>
                <tbody id="live_dok">

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
          <form id="delForm" action="{{ route('dokpost') }}" method="POST">
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
</div>

<div id="tavar2">
  <div class="modal-header">
      <svg xmlns="http://www.w3.org/2000/svg" id="nazadclicke" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
      </svg>
  </div>
  <table class="tab">
    <thead>
        <tr class="pol">
            <th>Mijoz</th>
            <th>Familiya</th>
            <th>Sana</th>
            <th>Tel...</th>
            <th>Yashash joyi</th>
            <th>Masul Shifokor</th>
            <th>Texnalog</th>
            <th>Tolov summa</th>
            <th>Sana</th>
        </tr>
    </thead>
    <tbody id="liv_onli">
      
    </tbody>
  </table>
</div>


<script>
    
    $(document).on("click", "#sms", function (){
      var id = $(this).data("id");
      $.ajax({
          url:"{{ route('userlar') }}",
          method:'GET',
          data:{id:id},
          dataType:'json',
          success:function(data)
          {
            $("#liv_onli").html(data);
            $('#tavar2').show('drop', 700);
          }
      });
    });

    $( "#nazadclicke" ).on( "click", function() {
      $('#tavar2').toggle('drop', 700);
    });

    function fetch_cus(query = '')
    {
        $.ajax({
            url:"{{ route('live_dok') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#live_dok').html(data);
            }
        });
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
              $('#name1').val('');
              $('#fam1').val('');
              $('#yonalish1').val('');
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
              $('#name1').val('');
              $('#fam1').val('');
              $('#yonalish1').val('');
              $('#post-modal').modal('hide');
             toastr.success("Bajarildi");
            }           
          }
        });
      });
    
      $(document).on("click", "#editpost", function (){
        $('#id1').val($(this).data("id"));
        $('#name1').val($(this).data("name"));
        $('#fam1').val($(this).data("fam"));
        $('#tel1').val($(this).data("tel"));
        $('#yonalish1').val($(this).data("yonalish"));
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
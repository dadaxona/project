@extends('welcome')
@section('content')
<style>
  #otkaz{
    margin-left: 44%;
  }
  /* #sqladjami{
    border: 1px solid;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 2px;
    border-radius: 6px;
  } */
</style>
<div class="page-body button-page">
<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-3 d-flex alert alert-primary">
        <h6 class="mx-3">Жами савдо:</h6>
        <h6 id="jamisavdo"></h6>
      </div>
      <div class="col-3 d-flex alert alert-danger">
        <h6 class="mx-3">Жами карз:</h6>
        <h6 id="jamikarz"></h6>
      </div>
      <div class="col-3 d-flex alert alert-info">
        <h6 class="mx-3">Жами прибл:</h6>
        <h6 id="jamipribl"></h6>
      </div>
      <div class="col-3 d-flex alert alert-success">
        <h6 class="mx-3">Склад сумма:</h6>
        <h6 id="sqladjami"></h6>
      </div>    
    </div>
    <div class="d-flex mt-0">
      <div class="d-flex">
        <input type="date" class="form-control" id="data">
        <input type="date" class="form-control mx-2" id="data2">
      </div>  
    </div>   
        </div>
            <table class="tab table-hover">
              <thead>
              <tr>
                  <th>Слент</th>
                  <th>Товар</th>
                  <th>Товар сони</th>
                  <th>Сумма</th>
                  <th>Итого</th>
              </tr>
              </thead>
              <tbody id="clent">

              </tbody>
              <tbody id="clent2">

              </tbody>    
          </table>
      </div>
  </div>
</div>
  
 
<script>
  // let _token  = $('meta[name="csrf-token"]').attr('content');
  function getel(data,  data2){
    $.ajax({
        url: "{{ route('getel') }}",
        type: "GET",
        data:{
          data: data,
          data2: data2,
        },
        dataType:'json',
        success: function(data) {
          console.log(data.data);
          $("#jamisavdo").html(data.data.jami);
          $("#jamikarz").html(data.data.karz);
          $("#jamipribl").html(data.data.pribl);
          $("#sqladjami").html(data.data.vse);
          $("#clent").html(data.output);
          $("#clent2").html(data.output2);
        }
    });
  }
  getel();

$(document).on("change", "#data2", function (){
  var data = $("#data").val();
  var data2 = $(this).val();
  getel(data, data2);
});
</script>

@endsection
@extends('welcome')

@section('brend')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner coru">

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div class="row mt-5" id="sicl">      
 
    </div>  

   <div class="reqlama">
    <img src="carusel/6f3c6e59-f86b-4cc6-a750-2e30330626f1.jpg" alt="">
   </div>

     <div class="row mt-5" id="sicl2">      

    </div>

   <div class="reqlama">
    <img src="carusel/reqlam.jpg" alt="">
   </div>

   <div class="row mt-5" id="sicl3">      

  </div>  
    <script>
        function izobr(){
          $.ajax({
            url: "{{ route('izobr') }}",
            type: "GET",
            success:function(data){
              let rows =  '';
              rows += `
              <div class="carousel-item active">
                  <div class="itemrty">
                    <img src="https://hitechdash.uz/corusel/${data.img.img}" alt="New york" class="karimg">
                    <div class="carousel-caption d-none d-md-block" id="rezmer">
                    </div>
                  </div>
                </div>
              `;
              data.data.forEach(room => {       
                rows += `
                <div class="carousel-item">
                  <div class="itemrty">
                    <img src="https://hitechdash.uz/corusel/${room.img}" alt="New york" class="karimg">
                    <div class="carousel-caption d-none d-md-block" id="rezmer">
                    </div>
                  </div>
                </div>
                `;
                });
                $(".coru").html(rows);
            }
          });
        }
        function foremse(){
          $.ajax({
            url: "{{ route('sicl1') }}",
            type: "GET",
            success:function(data){
              let rows =  '';
              data.forEach(room => {
              if(room.prodaja){
                  var summa = room.prodaja;
              }else{
                  var summa = '';
              }
              rows += `
                <div class="col-6	col-sm-4	col-md-3	col-lg-3	col-xl-2	col-xxl-2 boom">
                  <img class="img-responsive ribbon_installment daf" src="carusel/rassrochka.svg" alt="installment">
                  <div class="card">
                    <div class="suari">
                      <img class="rasim" src="https://hitechdash.uz/images/${room.img}" alt="Chicago">
                    </div>
                    <div class="card-body cardbo">    
                    <img src="carusel/dostavkapoUzb.svg" alt="" class="img-responsive img-2">
                    <h3 class="card-text">${room.tipname}</h3> 
                    <p class="card-text">${room.name}</p>
                      <h3 class="">${summa} $</h3>
                      <a href="#" class="btn btn-danger">Карзину</a>
                    </div>
                  </div>
                </div>
                `;
                });
                $("#sicl").html(rows);
            }
          });
        }
        function foremse2(){
          $.ajax({
            url: "{{ route('sicl2') }}",
            type: "GET",
            success:function(data){
              let rows =  '';
              data.forEach(room => {
              if(room.prodaja){
                  var summa = room.prodaja;
              }else{
                  var summa = '';
              }
              rows += `
              <div class="col-6	col-sm-4	col-md-3	col-lg-3	col-xl-2	col-xxl-2 boom">
                  <img class="img-responsive ribbon_installment daf" src="carusel/rassrochka.svg" alt="installment">
                  <div class="card">
                    <div class="suari">
                      <img class="rasim" src="https://hitechdash.uz/images/${room.img}" alt="Chicago">
                      </div>
                    <div class="card-body cardbo">    
                    <img src="carusel/dostavkapoUzb.svg" alt="" class="img-responsive img-2">
                    <h3 class="card-text">${room.tipname}</h3> 
                    <p class="card-text">${room.name}</p>
                      <h3 class="">${summa} $</h3>
                      <a href="#" class="btn btn-danger">Карзину</a>
                    </div>
                  </div>
                </div>
                `;
                });
                $("#sicl2").html(rows);
            }
          });
        }
        function foremse3(){
          $.ajax({
            url: "{{ route('sicl3') }}",
            type: "GET",
            success:function(data){
              let rows =  '';
              data.forEach(room => {
              if(room.prodaja){
                  var summa = room.prodaja;
              }else{
                  var summa = '';
              }
              rows += `
              <div class="col-6	col-sm-4	col-md-3	col-lg-3	col-xl-2	col-xxl-2 boom">
                  <img class="img-responsive ribbon_installment daf" src="carusel/rassrochka.svg" alt="installment">
                  <div class="card">
                    <div class="suari">
                      <img class="rasim" src="https://hitechdash.uz/images/${room.img}" alt="Chicago">                    
                      </div>
                    <div class="card-body cardbo">    
                    <img src="carusel/dostavkapoUzb.svg" alt="" class="img-responsive img-2">
                    <h3 class="card-text">${room.tipname}</h3> 
                    <p class="card-text">${room.name}</p>
                      <h3 class="">${summa} $</h3>
                      <a href="#" class="btn btn-danger">Карзину</a>
                    </div>
                  </div>
                </div>
                `;
                });
                $("#sicl3").html(rows);
            }
          });
        }
        // setInterval(() => {
          izobr();
          izobr();
          foremse();
          foremse();
          foremse2();
          foremse2();
          foremse3();
          foremse3();
        // }, 10000);
    </script>
@endsection

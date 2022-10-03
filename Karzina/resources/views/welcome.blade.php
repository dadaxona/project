
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link href="bootstrap-5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
<script src="jquery-3.6.0/dist/jquery.min.js"></script>
<meta name="csrf-token" content="4ZJ2D9IL1pSh8tNPW1Rbi9mNPHQseQVpSQ24ZEmB" />
<link rel="stylesheet" href="toastr/toastr.min.css" />
<script src="toastr/toastr.min.js"></script>
    <title>Document</title>
    <style>
      /* .po{
        position: fixed;
        z-index: 1;
        width: 100%;
      } */
        #withe{
            width: 194px;
            height: 188px;
        }
        .imas{
            width: 100%;
            height: 562px;
        }
        #karzina{
            border: none;
            color: rgb(195, 0, 0);
            background-color: white;
        }
        #laki{
            border: none;
            color: rgb(195, 0, 0);
            background-color: white;
        }

        #pokupka{
            border: none;
            border-radius: 5px;
        }
        
        #im{
            width: 40px;
            height: 35px;
        }
        .sss{
          border-radius: 50px;
        }

        #input{
          width: 34px;
          border: none;
          padding-left: 15px;
        }
    </style>
</head>
<body style="background-color: #e9e9e9;">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light po">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
            height="15"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="create">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#" id="but">
          <i class="fas fa-shopping-cart"></i>
          <span class="badge rounded-pill badge-notification bg-danger" id="count"></span>
        </a>
  
        <!-- Notifications -->
        <div class="dropdown">
          <a
            class="text-reset me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger"></span>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
              class="rounded-circle"
              height="25"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
        <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-indicators">
              <button
                type="button"
                data-mdb-target="#carouselExampleCaptions"
                data-mdb-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-mdb-target="#carouselExampleCaptions"
                data-mdb-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-mdb-target="#carouselExampleCaptions"
                data-mdb-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="imas" alt="Wild Landscape"/>
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="imas" alt="Camera"/>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="imas" alt="Exotic Fruits"/>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          {{-- x-data="{dropdown: [], toggle(praduct){
            datae = localStorage.getItem('praduct')
              if(datae){
                this.dropdown = JSON.parse(datae);
                this.dropdown.push(praduct);
                localStorage.setItem('praduct', JSON.stringify(this.dropdown));
              }else{
                this.dropdown.push(praduct);
                localStorage.setItem('praduct', JSON.stringify(this.dropdown));
              }
            }}" --}}
          <div class="container">
            <div class="modal fade" id="exam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <tr>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Caunt</td>
                        <td>Summa</td>
                        <td>Delete</td>
                      </tr>
                      <tbody id="tbody">
                     
                      </tbody>                      
                  </table>
                  <h4 id="h4"></h4>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

        <div class="row mt-5 mb-5" id="carde">

    </div>
  </div>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="">
    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #45526e"
            >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                Company name
              </h6>
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">praduct</h6>
              <p>
                <a class="text-white">MDBootstrap</a>
              </p>
              <p>
                <a class="text-white">MDWordPress</a>
              </p>
              <p>
                <a class="text-white">BrandFlow</a>
              </p>
              <p>
                <a class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                Useful links
              </h6>
              <p>
                <a class="text-white">Your Account</a>
              </p>
              <p>
                <a class="text-white">Become an Affiliate</a>
              </p>
              <p>
                <a class="text-white">Shipping Rates</a>
              </p>
              <p>
                <a class="text-white">Help</a>
              </p>
            </div>
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
              <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
  
        <hr class="my-3">
  
        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/"
                   >MDBootstrap.com</a
                  >
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-facebook-f"></i
                ></a>
  
              <!-- Twitter -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
  
              <!-- Google -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-google"></i
                ></a>
  
              <!-- Instagram -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class="fab fa-instagram"></i
                ></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->
  </div>

  
<script>
  
  function conso() {
    var data = JSON.parse(localStorage.getItem("praduct"));
    let sum = localStorage.getItem("summa");
    if(data){      
      $("#h4").html(sum);
      $("#count").html(data.length);
    }else{

    }
  }
  conso();

  function storing(){
    var data = JSON.parse(localStorage.getItem("praduct"));
    if(data){
      var pra = "";
      for (let i = 0; i < data.length; i++) {
        pra += "";
        pra += "<tr>";
        pra += "<td>"+data[i].name+"</td>";
        pra += "<td><img src="+data[i].img+"  id='im'/></td>";
        pra += "<td class='d-flex'>";
          pra += "<button id='minus' data-minus="+data[i].id+" data-delet2="+i+" data-summa2="+data[i].summa2+" class=''>-</button>";
          pra += "<input id='input' value="+data[i].count+" />";
          pra += "<button id='plus' data-plus="+data[i].id+" data-summa2="+data[i].summa2+" class=''>+</button>";
          pra += "</td>";
          pra += "<td>" +data[i].summa2+ "</td>";
          pra += "<td><button id='delet' data-delet="+i+" data-summa2="+data[i].summa2+">X<button</td>";
        pra += "</tr>";      
      }
      $("#tbody").html(pra);
    }else{
      
    }
  }
  storing();

  $(document).on("click", "#but", function(){
    $("#exam").modal("show");
  });

  function imge(){
    $.ajax({
    url:"praduct",
    method:'GET',         
    dataType:'json',
    success:function(data)
    {
      let rows =  '';
      data.forEach(room => {
        rows += `
        <div class="col-3 mb-2">
          <img src="images/${room.img}" id="withe">
              <h4>${room.name}</h4>
              <h5>${room.son} / Ostatka</h5>
              <p>Summa: ${room.summa2}</p>    
          <button id="karzina">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
              </svg>
          </button>
        <button class="ml-5" id="laki">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
        </button>
          <button class="btn-success" data-id="${room.id}" data-name="${room.name}" data-img="images\/${room.img}"  data-son="${room.son}" data-count="1" data-summa2="${room.summa2}" id="pokupka">
            Пакупка
        </button>
        </div>`;
        
      });
      $("#carde").html(rows);
    }                
  });
}
imge();
function summa (payment, val){
  let sum = JSON.parse(localStorage.getItem("summa"));
  if(sum){
    if(val == 1){
      var javob = sum + parseFloat(payment);
      localStorage.setItem('summa', JSON.stringify(javob));
    }else{
      var javob = sum - parseFloat(payment);
      localStorage.setItem('summa', JSON.stringify(javob));
      var plus = JSON.parse(localStorage.getItem("praduct"));
      if(plus.length == 0){
        localStorage.setItem('summa', JSON.stringify(0));
      }else{}
    }
  }else{
    localStorage.setItem('summa', JSON.stringify(parseFloat(payment)));
  }
}

var praduct = [];
$(document).on("click", "#pokupka", function(){
  var data = [];
  var id = $(this).data("id");
  var name = $(this).data("name");
  var img = $(this).data("img");
  var count = $(this).data("count");
  var son = $(this).data("son");
  var summa2 = $(this).data("summa2");
  data2 = {id , name, img, son, count, summa2};
  praduct = data2;
  let pro = localStorage.getItem("praduct");
    if(pro){
      data = JSON.parse(pro);
      data.push(data2);
      localStorage.setItem('praduct', JSON.stringify(data));
      summa(summa2, 1);
      conso();
      storing();
      toastr.success("Success full").fadeOut(700);
    }else{
      data.push(data2);
      localStorage.setItem('praduct', JSON.stringify(data));
      summa(summa2);
      conso();
      storing();
      toastr.success("Success full").fadeOut(700);
    }
  });

  $(document).on("click", "#plus", function () {
    var i = $(this).data("plus");
    var summa2 = $(this).data("summa2");
    var plus = JSON.parse(localStorage.getItem("praduct"));
    plus.forEach(m => {
      if (m.id == i) {
        m.count ++;
        if(m.count > m.son){
          toastr.error("Tavar etarli emas").fadeOut(1000);
        }else{
          localStorage.setItem("praduct", JSON.stringify(plus));
          summa(summa2, 1);
          conso();
          storing();
          return ;
        }
      }else{
        return ;
      }
    });
  });

  $(document).on("click", "#minus", function () {
    var i = $(this).data("minus");
    var summa2 = $(this).data("summa2");
    var plus = JSON.parse(localStorage.getItem("praduct"));
    plus.forEach(m => {
      if (m.id == i) {
        m.count --;
        if(m.count == 0){
          var p = $(this).data("delet2");
          let pro = localStorage.getItem("praduct");
          praduct = JSON.parse(pro);
          praduct.splice(p, 1);
          localStorage.setItem("praduct", JSON.stringify(praduct));
          summa(summa2, 0);
          conso();
          storing();
          toastr.error("Delete Success").fadeOut(1000);
          return ;
        }else{
          localStorage.setItem("praduct", JSON.stringify(plus));
          summa(summa2, 0);
          conso();
          storing();
          return ;
        }
      }else{
        return ;
      }
    });
  });

  $(document).on("click", "#delet", function () {
    var i = $(this).data("delet");
    var summa2 = $(this).data("summa2");
    let pro = localStorage.getItem("praduct");
    praduct = JSON.parse(pro);
    praduct.splice(i, 1);
    localStorage.setItem("praduct", JSON.stringify(praduct));
    summa(summa2, 0);
    conso();
    storing();
    toastr.error("Delete Success").fadeOut(1000);
  });

</script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
  <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
  <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
</body>
</html>
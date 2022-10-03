<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="UTF-8">  
  <title>Hi-Tech Mebel Xorazm</title>
  <meta name="description" content="Hi-Tech Mebel Xorazm bo'ylab barcha turdagi mebel xizmatlar"/>
  <meta name="keywords" content="Hi-Tech Mebel Xorazm bo'ylab barcha turdagi mebel xizmatlar">
  <meta name="google-site-verification" content="aGVcoW_gerT_Ql39oF_vwvoFc0Tw9-V8U1ohmeRIpQA" />
  <meta name="yandex-verification" content="e4020885f17b7b6f" />
  <link href="bootstrap-5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="toastr/toastr.min.css" />
  <script src="toastr/toastr.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <style>
    .container{
      padding: 0;
      
    }
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    /* p, h3{
      padding: 0;
      margin: 0;
    } */
    .row{
      margin: 0;
      padding: 2px;
    }
    .sele{
      background-color: #f1f1f1;
      width: 60%;
      font-size: 12px;
      border-radius: 5px 0 0 5px;
    }
    .borderr{
      border-radius: 0 5px 5px 0;
    }
    .rang svg{
      color: #fb6908
    }
    .rang:hover  svg{
      color: #fb6908
    }
  .inpul{
    border-radius: 3px 0 0 3px;
  }
  .inpul2{
    border-radius: 0 3px 3px 0;
    padding-block: 1px;
  }
  .blo{
    display: none;
  }

  .mnou{
    display: none;
}
.img{
    margin-left: 2px;
    height: 50px;
}

.colemn{
    margin-left: -15px;
}
.sssimg{
  font-weight: 700;
    font-size: 18px;
    margin-top: 5px;
}
.btnd{
    position: relative;
    margin-left: -34px;
    color: #ff8000;
    cursor: pointer;
}
.ahref span{
    font-size: 13px;
 }
.der{
    color: #34aada;
}
.ahref{
    text-decoration: none;
    color: #000;
    text-align: center;
    padding: 0 12px;
}

.ahref:hover  svg{
  color: #000;
}
.ahref:hover  span{
    color:#ff8000;
  }
.hr{
    opacity: 1;
}
#praduct{
    border-top: 2px solid rgb(222, 222, 222);
    border-bottom: 2px solid rgb(221, 221, 221);
    width: 100%;
    overflow-x: scroll;
}
#praduct ul {
  margin: 0px;
    padding: 0px;
    display: flex;
}
#praduct ul li{
    list-style: none;
    padding: 10px 20px;
    
}
#praduct ul li a{
    text-decoration: none;
    color: #3c3c3c;
    font-weight: bold;
}

#praduct ul li:hover a{
    color: #ff8000;
    transition: all 0.5s;
}
.item{
    width: 100%; 
    height: 500px;
}
.card{
    border: 1px solid rgb(223, 223, 223);
    margin: 8px 0px;
}
.derde{
    color: white;
}
.derer{
    color: #70d7ff;
}
.rtthy{
    background-color: #333;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.pder{
    padding-left: 5%;
}

.ull li a{
    color: rgb(213, 213, 213);
    text-decoration: none;
}

.ull li a:hover{
    color:#ff8000;
}

.diiiv{
    color: rgb(213, 213, 213);
    text-decoration: none;
}

.diiiv:hover{
    color:#ff8000;
}
.oppo{
    width: 100%;
    height: 1px;
    background-color: rgb(255, 251, 251);
    margin-bottom: 20px;
}


.karimg{
  width: 100%;
    height: 455px;
}
.boom{
  position: relative;
}
.daf{
  position: absolute;
  width: 66px;
  left: 8px;
  top: 1px;
  z-index: 1;
}
.img-2{
  position: absolute; 
  width: 110px;
  top: 50%;
  right: 0;
}
.rasim{
  width: 80%;
  height: 95%;
  padding-right: 6%;
}
.reqlama{
  margin: 20px 0;
  width: 100%;
  height: 5%;
  border-radius: 10px;
}
.reqlama img{
  width: 100%;
  height: 5%;
  border-radius: 10px;
}

.boom .card h3{
       color:rgb(255, 191, 42);
    }

    .toggler{
  display: none
}
.toggler { 
  width: 200px; 
  height: 100vh;
  position: fixed;
  z-index: 101;
  background-color: #ffffff;
  margin-top: 0;
 }
 .x{
 
    border-radius: 63%;

    color: rgb(103, 103, 103);
    width: 25px;
    margin-left: 85%;
    padding: 3px;
    cursor: pointer;
 }
 .toggler ul{
  
  width: 100%;
  height: auto;
 }
 .toggler ul li{
  
  list-style: none;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1px 10px 0 0;
  border-bottom: 1px solid rgb(191, 191, 191);
 }
 .toggler ul li a{
  text-decoration: none;
  color: rgb(56, 55, 55);

 font-size: 13px;
  
 }
 .sub-menu-1{
  display: none;
  padding: 8px;
 }
 .sub-menu-1 ul li span svg{
  margin-top: -5px;
 }
 #praduct ul li:hover .sub-menu-1{
  display: block;
  position: absolute;
  z-index: 102;
  background-color: #ffffff;
  
 }
 #praduct ul li:hover .sub-menu-1 ul{
  display: block;
 }
.sub-menu-1 ul li{
  border-bottom: 1px solid rgb(210, 210, 210);
 }
 .sub-menu-2{
  display: none;
  padding: 8px;
 }
 .sub-menu-2 ul li span svg{
  margin-top: -5px;
 }
.sub-menu-1 ul li:hover .sub-menu-2{
  display: block;
  position: absolute;
  z-index: 103;
  background-color: #ffffff;
  margin-left: 90px;
}
 .sub-menu-1 ul li:hover .sub-menu-2 ul{
  display: block;
 }

 .sub-menu{
  display: none;
  padding: 8px;
 }

 .bl:hover .sub-menu{
  display: block;
  position: absolute;
  z-index: 103;
  background-color: #ffffff;
  margin-left: 10px;
  margin-top: -33px;
 }

 .sub-menu-2 ul li{
  border-bottom: 1px solid rgb(210, 210, 210);
 }

.bordem{
  border: 1px solid rgb(235, 235, 235);
  border-radius: 6px;
}
.samuray{
  width: 100%;
  height:100%;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
}
.samuray:hover{
  box-shadow: 1px 1px 5px  rgb(235, 226, 226);
}
.suari{
  position: relative;
    width: 100%;
    height: 178px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.suari::before{
  content: '';
  position: absolute;
  left: -200%;
  width: 170%;
  height: 100px;
  background: linear-gradient(180deg, rgb(255 255 255 / 0%), rgb(255 255 255) 40%, rgb(255 255 255 / 60%) 60%, rgb(255 255 255 / 0%));
  opacity: .4;
  transform: rotate(45deg);
  animation: animat 2s linear infinite;
  -webkit-animation-name: animat;
  animation-name: animat;
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.samuray-1{
  position: relative;
  width: 240px;
  height: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
 
}
.itemrty::before{
  content: '';
  position: absolute;
  left: -300%;
  width: 170%;
  height: 100px;
  background: linear-gradient(180deg, rgb(255 255 255 / 0%), rgb(255 255 255) 40%, rgb(255 255 255 / 60%) 60%, rgb(255 255 255 / 0%));
  opacity: .4;
  transform: rotate(45deg);
  animation: animat 4s linear infinite;
  -webkit-animation-name: animat;
  animation-name: animat;
  -webkit-animation-duration: 9s;
  animation-duration: 9s;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.samuray-1::before{
  content: '';
  position: absolute;
  left: -200%;
  width: 170%;
  height: 100px;
  background: linear-gradient(180deg, rgb(255 255 255 / 0%), rgb(255 255 255) 40%, rgb(255 255 255 / 60%) 60%, rgb(255 255 255 / 0%));
  opacity: .4;
  transform: rotate(45deg);
  animation: animat 2s linear infinite;
  -webkit-animation-name: animat;
  animation-name: animat;
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}
.widz{
  width: 177px;
}
@keyframes animat{
  0%{
    left: -200%;
  }

  100%{
    left: 200%;
  }
}

@keyframes animatdfd{
  0%{
    left: -150%;
  }

  100%{
    left: 100%;
  }
}
.samuray-1 img{
  width: 80%;
  height: 90%;
}
.samuray-2{
  width: 65%;
  height: 100%;
  padding-top:3%; 
}
.samuray-2 p{
  font-size: 17px;
  padding: 0;
  margin: 0; 
}
.samuray-2 p:hover{
  color: #ff6600;

}
.samuray-2 h3{
  color: #ff6600;
  margin: 0;
  padding: 0;
}
.yuz{
  padding-top: 10px;
}

.yuz a button{
  padding: 5px 10px;
  border-radius:5px; 
  color: #ffffff;
  font-weight: 500;
  background: #2e3a47;
  border:none;
}
.yuz a button span svg{
  margin-right: 5px;
}
.yuz a button:hover{
  background: #ff6600;
  transition: all 0.5s;
}

#rezmer{
  margin: 0;
    top: 200px;
    left: 73px;
    color: #303030;
}
#rezmer2{
  margin: 0;
    top: 200px;
    left: 73px;
    color: #303030;
}

@media (max-width: 1200px){
  .img{
        height: 40px;
        margin-top: 5px;
        width: 100%;
    }
    .colemn{
        width: 33%;
        margin-left: 0;
    }
    .dert{
        width: 17%;
    }
    .sele{
        width: 60%;
        font-size: 10px;      
    }
    .svg .izbore{
      display: none;
    }
    .sss{
        width: 16%;
        margin-top: 1px;
    }
    .sss img{
        width: 99px;
    }
  
    .btnd{
        width: 25px;
        height: 34px;
    }
    #praduct ul li{
        list-style: none;
        padding: 7px 13px;
    }
    .item{
        width: 100%; 
        height: 400px;
    }
    .inpul2 {
        font-size: 10px;
        width: 110px;
        
    }
    .inpul {
        
      font-size: 13px;
      
    }
  .izbore{
    display: none;
  }
}
@media (max-width: 1195px){
  #praduct ul li {
    padding: 7px 10px;
}
.img-2 {
    position: absolute;
    width: 79px;
    top: 49%;
    right: 0;
}
}
@media (max-width: 992px) {
  .desage{
        margin: 0;
        border-bottom: 2px solid #cccccc;
        margin-bottom: 4px;
    }
    .row {
        margin-top: -8px;
    }
    .mnou{
        display: block;
        width: 8%;
    }
   
    #men{
        color: coral;
        border: 1px solid;
        border-radius: 5px;
        padding: 3px;
        background-color: white;
        margin-top: 10px;
        margin-left: 6px;
    
    }
    .dert {
        width: 19%;
        margin-top: 3px;
    }
    .img{
      height: 36px;
      margin-top: 2px;
    }
    .sss{
        display: none;
    }
    .colemn{
        width: 48%;
    }
    .svg{
        width: 22%;
        margin-top: 4px;
    }
    .sele{
        width: 70%;
        font-size: 10px;      
    }
    .izbore{
        display: none;
    }
    .ahref svg{
        width: 23px;
    }
    .ahref span{
        display: none;
    }
    .rang{
        color: #ff8000;
    }
    .item{
        width: 100%; 
        height: 250px;
    }
    .inpul2 {
        font-size: 9px;
        width: 90px;
        
    }
    #praduct{
        display: none;
    }
    #carouselExampleFade{
    margin-top: 20px;
   }
    .inpul {        
      font-size: 12px;
      margin-left: 19px;
    }
    .zxz{
        width: 30px;
        height: 30px;
        margin-left: 18px;
    }
    .ppp{
        font-size: 13px;
    }
   .karimg {
        width: 100%;
        height: 333px;
    }
    .rrow2{
      margin-top: 8px;
    }

    .rrow3{
      margin-top: 0;
    }
  }

  @media (max-width: 769px) {
    .dert {
        display: none;
    }
    .mnou{
      width: 11%;
    }
    .karimg {
      height: 218px;
    }
    .colemn {
     width: 57%;
  }
  .svg {
    width: 24%;
    margin-top: 4px;
    margin-left: 12px;
}
  .blo{
    display: block;
    width: 100%;
    border-top: 2px solid #d0d0d0;
    margin-top: 9px;

  }
  .dert2{
    width: 68%;

  }
  .img {
    height: 37px;
    width: 65%;
    margin-top: 11px;
}
.dert3{
  width: 30%;
    padding-left: 26px;
}
.sssimg{
 
 margin-top: 17px;
 height: 30px;

}
  .ahref {
      padding: 0 7px;
  }
  .rasim{
    width: 98%;
    height: 77%;
    margin-left: 4px;
  }
  .cardbo h3{
    font-size: 18px;
    margin: 3px;
  }
  .cardbo p{
    font-size: 10px;
    margin: 3px;
  }
}

@media (max-width: 575px) {
  .colemn {
    width: 55%;
}
  .ahref {
  padding: 0 6px;
}

.dert2{
    width: 68%;
  }
  .dert3 {
    width: 29%;
}
  .rasim{
    width: 81%;
    height: 100%;
    padding: 9px;
    margin-left: 0px;
  }
  .cardbo h3{
    font-size: 22px;
    margin: 0;
  }
  .cardbo p{
    font-size: 10px;
    margin: 3px;
  }
  .cardbo .img-2{
    position: absolute;
    width: 98px;
    top: 50%;
    right: 8px;
  }
}
@media (max-width: 549px) {

  .dert2{
    width: 60%;
  }
  .dert3 {
    width: 35%;
  }

}
@media (max-width: 491px) {
    .svg {
      margin-left: 2px;
    }
    .blo .dert2 {
        width: 62%;
    }
    .telegr {
        display: none;        
    }
    .colemn {  
      width: 57%;
    }
    .mnou {
        width: 14%;
    }
    .blo .dert2{
      width: 60%;
    }
    .blo{
      width: 100%;
    }
    .bordem22{
      display: none;
    }
    .dl{
      width: 100%;
    }
}
@media (max-width: 471px) {
    .inpul2 {
        font-size: 9px;
    width: 36%;        
    }
    .inpul {
      font-size: 12px;
      margin-left: 19px;
    } 
}
@media (max-width: 462px) {
  .dert2{
    width: 50%;
  }
  .dert3 {
    width: 40%;
  } 
}
@media (max-width: 435px) {
  .svg {
    margin-left: 0;
  }
    .telegr {
        display: none;        
    }
    .voyt{
      margin-left: 21%;
    }
    .ahref {
        padding: 0 2px;
    }
    .colemn {
      width: 55%;
  }
  .sssimg {
    margin-top: 11px;
    height: 24px;
    margin-left: 9px;
  }
  .karimg {
    height: 160px;
  }
    .mnou {
        width: 14%;
    }
    .blo .dert2 {
      width: 100%;
    text-align: center;
    }
    .img {
    height: 100%;
  }
  .dert3 {
    display: none;
  } 
    .blo{
      width: 100%;
    }
    .item{
        height: 200px;
    }
    .boom{
        width: 100%;
    }
    .boom .card .imgesa{
       padding: 20px;
    }

    .reqlama {
        margin: auto;
        width: 94%;
    }
    .pder {
    padding-left: 12%;
  }
}

 </style>
</head>
<body>
  
  <div class="container">
    <div class="toggler">
      <ul id="togglerul">
   
  
      </ul>
    </div>
    <div class="row pt-3 pb-2 desage">
      <div class="col-1 mnou">
        <button id="men">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>
      </div>
      <div class="col-3 dert">
        <a href="/">
          <img src="carusel/home24.png" alt="" class="img">
        </a>
      </div> 
      <div class="col-3 pt-3 colemn">
      <div class="d-flex btn-group">
        <select class="form-select sele">

        </select>
        <input type="search" class="form-control borderr" id="serch">
        <svg xmlns="http://www.w3.org/2000/svg" class="btnd" onclick="btnd()" width="35" height="35" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </div>
      </div>
      <div class="col-2 pt-3 text-center sss">
        <div  class="sssimg">
          (91) 999 99 01
        </div>
      </div>
      <div class="col-4 pt-3 d-flex svg">
        <a href="#" class="ahref telegr ">
          <svg xmlns="http://www.w3.org/2000/svg" class="der" width="25" height="25" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
          </svg><br>
          <span>Канал</span>
        </a>
      <a href="#" class="ahref voyt">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
          <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
        </svg><br>
        <span>Войти</span>
      </a>
      <a href="#" class="ahref">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
        </svg><br>
        <span>Избранное</span>
      </a>
      <a href="#" class="ahref izbore">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
        </svg><br>
        <span>Сравнение</span>
      </a>
      <a href="#" class="ahref rang">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg><br>
        <span>Корзина</span>
      </a>
      </div>
      <div class="col-12 blo">
        <div class="row">
          <div class="col-9 dert2">
            <a href="/">
              <img src="carusel/home24.png" alt="" class="img">
            </a>
          </div>
          <div class="col-3 dert3">
            <div  class="sssimg">
              (91) 999 99 01
            </div>
          </div>
        </div>
      </div>
    </div> 
    
    <div id="praduct" class="mb-4">
      <ul id="glavul">

      
      </ul>
    </div>
@yield('brend')
<footer class="text-white rtthy p-4">
  <div class="row mt-5">
    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 d-flex pder">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope-fill " viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
      </svg>
      <p class="mx-3 ppp">ПОДПИШИТЕСЬ<br>на наши новости</p>
    </div>
    <div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4 ">
      <div class="d-flex mb-5">
        <input type="text" class="form-control inpul" name="" id="" placeholder="Введите свой e-mail">
        <button class="btn btn-warning inpul2">
          ПОДПИСАТЬСЯ
        </button>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-2">
      <span class="m-5">МЫ В СОЦСЕТЯХ</span>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="derde" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
      </a>
      <a href="#" class="ahref">
        <svg xmlns="http://www.w3.org/2000/svg" class="derer" width="21" height="21" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
        </svg>
      </a>
    </div>
  </div>

  <div class="oppo">
      
  </div>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5">
      <div class="mx-5">
        <a href="#" class="diiiv">Hi-Tech Mebel.uz Интернет-магазин в Ургенч</a><br>
        <p> Разработка и продвижение сайта</p>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5">
      <div class="mx-5 d-flex">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg>
        </span>
        <p class="mx-2"> Телефон: +998 (91) 9999901</p>
      </div>
      <div class="mx-5 d-flex">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
          </svg>
        </span>
        <span class="mx-2">Gmail:</span><a href="#" class="diiiv">hitechmebel@gmail.com</a>
      </div>
    </div>
  </div>
</footer>

</div>  {{-- .col-	.col-sm-	.col-md-	.col-lg-	.col-xl-	.col-xxl- --}}
  <script>
    $("#men").on("click", function(){
      $(".toggler").toggle("slide");
    });

    $(document).on("click", ".x", function(){
      $(".toggler").toggle("slide");
    });

    
    function sele() {
      $.ajax({
        url: "{{ route('sele') }}",
        type: "GET",
        success:function(data){
          let rows =  '';
          rows += `<option selected>Все катигория</option>`;
          data.forEach(room => {
              rows += `
              <option value="${room.id}">${room.name}</option>`;
              });
          $(".sele").html(rows);
        }
      });
    }
    sele();
    sele();
    
    function link() {
      $.ajax({
        url: "{{ route('link') }}",
        type: "GET",
        success:function(data){
          $("#glavul").html(data);
        }
      });
    }
    link();
    link();

    function toggler() {
      $.ajax({
        url: "{{ route('toggler') }}",
        type: "GET",
        success:function(data){
          $("#togglerul").html(data);
        }
      });
    }
    toggler();
    toggler();
    
    function btnd() {
      var sele = $(".sele").val();
      var serch = $("#serch").val();
      var id = {sele, serch};
      localStorage.clear();
      localStorage.setItem('prom', JSON.stringify(id));
      window.location.href = "/sotuv";
    }
    function hrref(id) {
      localStorage.clear();
      localStorage.setItem('tid', JSON.stringify(id));
      window.location.href = "/sotuv";
    }
  </script>
  <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
  <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
</body>
</html>
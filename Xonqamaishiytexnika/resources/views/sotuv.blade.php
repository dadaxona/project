@extends('welcome')
@section('content')
<style>

    #itog{
        background: #ffffff;
        border: none;
        font-size: 25px;
        border-bottom: 2px solid;
    }
    #itogdok{
        background: #ffffff;
        border: none;
        font-size: 25px;
        border-bottom: 2px solid;
    }

    #itog2{
        background: #ffffff;
        border: none;
        font-size: 25px;
        border-bottom: 2px solid;
    }
    #itog2dok{
        background: #ffffff;
        border: none;
        font-size: 25px;
        border-bottom: 2px solid;
    }
    #kurs{
        background: #ffffff;
        border: none;
        font-size: 20px;
        border-bottom: 2px solid;
    }
    #kursdok{
        background: #ffffff;
        border: none;
        font-size: 20px;
        border-bottom: 2px solid;
    }
    #kurs2{
        background: #ffffff;
        border: none;
        font-size: 20px;
        border-bottom: 2px solid;
    }
    #kurs2dok{
        background: #ffffff;
        border: none;
        font-size: 20px;
        border-bottom: 2px solid;
    }
    #belgi{
        background: #ffffff;
        border: none;
        font-size: 20px;
        border-bottom: 2px solid;
    }
    #belgidok{
        background: #ffffff;
        border: none;
        font-size: 20px;
        border-bottom: 2px solid;
    }
    .fff{
        background: #ffffff;
        border: none;
        font-size: 20px;
    }
    .itogsw{
        background-color: white;
        color: black;
        font-size: 20px;
    }
    .form-con {
        font-size: 37px;
        border-radius: 9px;
        border: 1px solid #000000;
    }

    #zaqazmodaldok{
        display: none;
        background-color: rgb(0 0 0/0.8);
        padding: 32px;
        width: 99%;
        margin: auto;
        position: absolute;
        border-radius: 9px;
        color: white;
    }

    #zaqazmodal{
        display: none;
        background-color: rgb(0 0 0/0.8);
        padding: 32px;
        width: 99%;
        margin: auto;
        position: absolute;
        border-radius: 9px;
        color: white;
    }
    .tab0{
        border-right: 1px solid;
        color: #ffffff;
    }
    .tab01{
        color: #ffffff;
    }
  #srok{
    width: 81%;
    margin-left: 10px;
  }
  #srokdok{
    width: 81%;
    margin-left: 10px;
  }
  #oplata{
    width: 50%;
    text-align: center;
  }
  #nazadsd{
    width: 50%;
    text-align: center;
  }
  #oplatadok{
    width: 50%;
    text-align: center;
  }
  #nazaddok{
    width: 50%;
    text-align: center;
  }
</style>
@if ($brends->count == "1" || $brends->count == "3" || $brends->count == "4")
<div class="page-body button-page">
    <div class="col-sm-12 card">
        <div class="row">
        <div class="card col-9">
            <div class="extr25552 scrolll2">
                  <div class="row">
                    <div class="col-4">
                        <a class="btn btn-success mt-2 p-1" href="#" onclick="event.preventDefault(); document.getElementById('expo').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                            </svg>
                            Excel
                        </a>
                        <a class="btn btn-danger mt-2 p-1" href="#" onclick="event.preventDefault(); document.getElementById('deelet').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                            ?????? ??????????????
                        </a>
                    </div>
                    <div class="col-4 mt-3 "></div>
                    <div class="col-3 mt-3 ">
                        <a class="d-flex"><h5>?????????? ??????:</h5> <h5 class="clnam mx-3"></h5></a>
                    </div>                    
                </div>
                  <form action="{{ route('exports8') }}" method="GET" id="expo">
                </form>
                <form action="{{ route('deeletkarzina') }}" method="GET" id="deelet">
                </form>
                <div class="rty2">
                    <table class="tab table-hover">
                        <thead>
                            <tr>
                                <th>????????</th>
                                <th>?????????????? ????????</th>
                                <th>????????</th>
                                <th>??????????????</th>
                                <th>??????????</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">

                        </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card col-1">
        <button onclick="deciremente()" id="deciremente" class="btn btn-info mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
              </svg>
        </button>
        <button onclick="inceremente()" id="inceremente" class="btn btn-danger mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
              </svg>
        </button>
        <button onclick="yangilash()" class="btn btn-warning mt-1 m-0" style="color: black;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
              </svg>
        </button>
        <button onclick="udalit()" id="udalit" class="btn btn-danger mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
              </svg>
        </button>
        <button id="aqsh" class="btn btn-primary mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
        </button>
        <button id="tayyor" class="btn btn-success mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
              </svg>
        </button>
        <button id="zaqas" class="btn btn-dark mt-1 m-0">
           ??????????
        </button>
        <input type="hidden" id="radio">
    </div>
    <div class="card col-2">
        <label for="message-text" class="col-form-label m-0 text-right">??????????: <span id="kkkkkk"></span></label>
        <input type="text" id="itog" class="form-control text-right" disabled value="0">
        <label for="message-text" class="col-form-label m-0 text-right">????????</label>
        <input type="text" id="kurs" class="form-control text-right" disabled>
        <button onclick="kursm()" id="kursm" class="btn btn-secondary mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                </svg>
        </button>
        <div class="form-check mt-4">
            <input class="form-check-input" type="radio" name="exampleRadios" id="Radio1" value="option1">
            <label class="form-check-label" for="exampleRadios1">
                ?????????????????? ????????
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="Radio2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                ?????????????? ????????
            </label>
        </div>        
        <input type="text" id="belgi" class="form-control mt-1 m-0" disabled style="text-align: center;background-color: white;">
        <input type="hidden" name="id" id="belgi2">
    </div>
</div>
<div class="row">
<div class="card col-8">
    <div class="card-header">
        <input type="hidden" id="onval" value="0">
          <div class="row col-5">
            <div class="col-5 mr-4">
                <input type="text" name="search" id="search" class="form-control" placeholder="??????????" /> 
            </div>
        </div>
    </div>
        <div class="table-responsive mailbox-messages">
            <div class="extr25552 scrolll2">
                <div class="rty2">
                    <table class="tab table-hover">
                        <thead class="">
                            <tr>
                            <th>????????</th>
                            <th>????</th>
                            <th>?????????????? ????????</th>
                            <th>?????????????????? ????????</th>
                            </tr>
                        </thead>
                        <tbody id="tbody2">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card col-4">
        <div class="card-header">
            <input type="hidden" id="onval" value="0">
            <div class="row">
                <div class="col-5 mx-2">
                    <div class="row">
                        <input type="text" name="search" id="searchclent" class="form-control" placeholder="??????????" />                    
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5 row">
                    <button type="button" class="btn btn-primary p-2" onclick="addPost()">???????????? ????????????</button>
                </div>
            </div>
        </div>
        <div class="table-responsive mailbox-messages">
            <div class="extr25552 scrolll2">
                <div class="rty2">
                    <table class="tab table-hover">
                        <thead class="">
                            <tr>
                                <th>????????</th>
                                <th>??????</th>
                            </tr>
                        </thead>
                        <tbody id="tbody2clent">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>        
</div>

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"><input type="text" class="form-control fff" id="name2" disabled></h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-6 mb-3">
                <label for="message-text" class="col-form-label">?????????? ????????</label>
                <input type="text" class="form-control form-con" name="son" id="son">
            </div>
            <div class="col-6 mb-3">
                <label for="message-text" class="col-form-label">?????????????? ??????????</label>
                <input type="text" class="form-control form-con" name="summo" id="summo">
                <input type="hidden" id="summ2">
            </div>
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">?????????? ??????????????</label>
            <input type="text" class="form-control form-con" name="summ" id="summ">
            <input type="hidden" id="sum2">
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">??????????????</label>
            <input type="text" class="form-control form-con" name="cheg" id="cheg">
        </div>          
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="nazad">??????????</button>
      <button type="submit" class="btn btn-primary" id="saqlash">??????????????????</button>
    </div>

  </div>
</div>
</div>

<div class="modal fade" id="kurrrr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">???????????? ??????????????????</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control form-con" name="usdkurd" id="usdkurd">
            </div>          
        </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="nazad">??????????</button>
      <button type="submit" class="btn btn-primary" id="usdkurd2">??????????????????</button>
    </div>

  </div>
</div>
</div>


<div class="modal fade" id="jonatish" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
      <div class="text-center mt-3">
          <h4 id="clentranam"></h4>
      </div>
    <div class="modal-header" id="exampleModalLabeldokse">
    </div>
    <div class="modal-body">
            <div class="mb-3 d-flex">
               <div class="col-4">
                    <h5 class="mt-2 mx-2">??????????:</h5>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control text-right itogsw" name="itogs" id="itogs" disabled>
                </div>
            </div>
            <div class="mb-3 d-flex">
                <select name="clentra" id="clentra" class="form-control text-center">
                    <option value="">???????????????? ????????????</option>
                    @foreach ($clents as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <h5 class="mt-2 mx-2">????????????????:</h5>
                </div>                    
               <div class="col-6">
                    <input type="text" class="form-control text-right itogsw" name="naqt" id="naqt">
                    <input type="hidden" id="naqttr">
               </div>
               <div class="col-2">
                    <button class="btn btn-success" id="naqtteng">
                        =
                    </button>
               </div>
            </div>
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <h5 class="mt-2 mx-2">??????????:</h5> 
                </div>
                <div class="col-6">
                    <input type="text" class="form-control text-right itogsw" name="plastik" id="plastik">
                </div>
                <div class="col-2">
                    <button class="btn btn-success" id="plastikteng">
                        =
                    </button>
               </div>
            </div>  
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <h5 class="mt-2 mx-2">????????:</h5>    
                </div>
                <div class="col-6">
                    <input type="text" class="form-control text-right itogsw" name="bank" id="bank">
                </div>
                <div class="col-2">
                    <button class="btn btn-success" id="bankteng">
                        =
                    </button>
               </div>
            </div>
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <h5 class="mt-2 mx-2">????????:</h5>    
                </div>
                <div class="col-8">
                    <input type="text" class="form-control text-right itogsw" name="karzs" id="karzs" disabled>
                </div>
            </div>
            <div class="mb-3 d-flex" id="channgem">    
            </div>
            <div class="form-check">
                <input type="hidden" id="checkshidden">
                <div class="mb-3 d-flex">
                    <div class="col-4 mt-2">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="checks" value="1">
                        <label class="form-check-label">
                            ??????????
                        </label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control text-right itogsw" id="malumot">
                    </div>
                </div>
            </div>
        </div>
        <hr>
    <div class="d-flex p-3 pb-5">
        <button type="button" class="btn btn-danger mr-2" data-bs-dismiss="modal" id="nazadsd">??????????</button>
        <button type="submit" class="btn btn-success" id="oplata">????????????</button>       
    </div>

  </div>
</div>
</div>

<div id="zaqazmodal">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">?????????? ????????????</h5>
    <svg xmlns="http://www.w3.org/2000/svg" id="nazadclicke" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
    </svg>
</div>
    <div class="row">
        <input type="hidden" id="user_zaq">
        <input type="hidden" id="diomiy">
        <div class="col-3">
            <table class="tab table-hover tab0">
                <thead>
                <tr>
                    <th>??????</th>
                </tr>
                </thead>
                <tbody id="imya">

                </tbody>
            </table>
        </div>
        <div class="col-9">
            <table class="tab table-hover tab01">
                <thead>
                    <tr>
                        <th>????????????</th>
                        <th>?????????? ????????</th>
                        <th>?????????????? ????????</th>
                        <th>????????</th>
                        <th>??????????????</th>
                        <th>??????????</th>
                    </tr>
                </thead>
                <tbody id="zaqazz123">

                </tbody>
            </table>
        </div>
    </div>  
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" id="nazadclick">??????????</button>
    <button id="SubmitCkicked" class="btn btn-primary">??????????????????</button>
</div>
</div>

<div class="modal fade" id="zaqazaytModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">?????????? ????????????</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    
      <div class="text-center pb-4 pt-4">
          <button type="button" class="btn btn-primary mx-4" id="zzzz">????????????????</button>
          <button type="submit" id="zzzz2" class="btn btn-success">??????????????</button>
      </div>
  </div>
</div>
</div>

<div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">???????????? ????????????</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="userForm" action="{{ route('storead') }}" method="POST">
              @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">???????????? ????????</label>
              <input type="text" class="form-control" name="name">
              <span class="text-danger error-text name_error"></span>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">??????????????</label>
              <input type="number" class="form-control" name="tel">
              <span class="text-danger error-text tel_error"></span>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">???????????????? ?????? ????</label>
              <input type="text" class="form-control" name="chatid">
              <span class="text-danger error-text chatid_error"></span>
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">?????????? ????????</label>
                <input type="text" class="form-control" name="firma">
                <span class="text-danger error-text firma_error"></span>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">?????????? ??????</label>
                <input type="text" class="form-control" name="inn">
                <span class="text-danger error-text inn_error"></span>
              </div>
              <input type="hidden" name="summa" value="0">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">??????????</button>
          <button type="submit" class="btn btn-primary">??????????????????</button>
        </div>
      </form>
      </div>
    </div>
  </div>

@elseif($brends->count == "2")
<div class="page-body button-page">
    <div class="col-sm-12 card">
        <div class="row">
        <div class="card col-9">
            <div class="extr25552 scrolll2">
                <a class="btn btn-success mt-2 p-1" href="#" onclick="event.preventDefault(); document.getElementById('expodok').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                      <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                    </svg>
                    Excel
                  </a>
                  <a class="btn btn-danger mt-2 p-1" href="#" onclick="event.preventDefault(); document.getElementById('deeletdok').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                      </svg>
                    ?????? ??????????????
                  </a>
                  <form action="{{ route('exports8dok') }}" method="GET" id="expodok">
                </form>
                <form action="{{ route('deeletkarzinadok') }}" method="GET" id="deeletdok">
                </form>
                <div class="rty2">
                    <table class="tab table-hover">
                        <thead>
                            <tr>
                                <th>????????</th>
                                <th>?????????????? ????????</th>
                                <th>????????</th>
                                <th>??????????????</th>
                                <th>??????????</th>
                                <th>????</th>
                            </tr>
                        </thead>
                        <tbody id="tbodydok">

                        </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card col-1">
        <button onclick="decirementedok()" id="decirementedok" class="btn btn-info mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
              </svg>
        </button>
        <button onclick="incerementedok()" id="incerementedok" class="btn btn-danger mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
              </svg>
        </button>
        <button onclick="yangilashdok()" class="btn btn-warning mt-1 m-0" style="color: black;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
              </svg>
        </button>
        <button onclick="udalitdok()" id="udalitdok" class="btn btn-danger mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
              </svg>
        </button>
        <button id="aqshdok" class="btn btn-primary mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
        </button>
        <button id="tayyordok" class="btn btn-success mt-1 m-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
              </svg>
        </button>
        <button id="zaqasdok" class="btn btn-dark mt-1 m-0">
           ??????????
        </button>
        <input type="hidden" id="radiodok">
    </div>
    <div class="card col-2">
            <label for="message-text" class="col-form-label m-0 text-right">??????????</label>
            <input type="text" id="itogdok" class="form-control text-right" disabled value="0">
            <label for="message-text" class="col-form-label m-0 text-right">????????</label>
            <input type="text" id="kursdok" class="form-control text-right" disabled>
            <button onclick="kursmdok()" id="kursm" class="btn btn-secondary mt-1 m-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                  </svg>
            </button>
            <div class="form-check mt-4">
                <input class="form-check-input" type="radio" name="exampleRadios" id="Radio1dok" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    ?????????????????? ????????
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="Radio2dok" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    ?????????????? ????????
                </label>
            </div>
        
        <input type="text" id="belgidok" class="form-control mt-1 m-0" disabled style="text-align: center;background-color: white;">
        <input type="hidden" name="id" id="belgi2dok">
    </div>
</div>
<div class="row">
<div class="card col-12">
    <div class="card-header">
        <input type="hidden" id="onvaldok" value="0">
        <div class="row col-5">
          <div class="col-5 mr-4">
              <input type="text" name="search" id="searchdok" class="form-control" placeholder="??????????" /> 
          </div>
          {{-- <div class="form-check form-switch col-3 mt-1">
              <input class="form-check-input" type="checkbox"  role="switch" id="ondok">
              <label class="form-check-label" for="">?????????? 2</label>
          </div> --}}
      </div>
    </div>
        <div class="table-responsive mailbox-messages">
            <div class="extr25552 scrolll2">
                <div class="rty2">
                    <table class="tab table-hover">
                        <thead class="">
                            <tr>
                            <th>????????</th>
                            <th>????</th>
                            <th>?????????????? ????????</th>
                            <th>?????????????????? ????????</th>
                            </tr>
                        </thead>
                        <tbody id="tbody2dok">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>        
</div>

<div class="modal fade" id="editdok" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"><input type="text" class="form-control fff" id="name2dok" disabled></h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-6 mb-3">
                <label for="message-text" class="col-form-label">?????????? ????????</label>
                <input type="text" class="form-control form-con" name="son" id="sondok">
            </div>
            <div class="col-6 mb-3">
                <label for="message-text" class="col-form-label">?????????????? ??????????</label>
                <input type="text" class="form-control form-con" name="summo" id="summodok">
                <input type="hidden" id="summ2dok">
            </div>
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">?????????? ??????????????</label>
            <input type="text" class="form-control form-con" name="summ" id="summdok">
            <input type="hidden" id="sum2dok">
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">??????????????</label>
            <input type="text" class="form-control form-con" name="cheg" id="chegdok">
        </div>          
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="nazaddok">??????????</button>
      <button type="submit" class="btn btn-primary" id="saqlashdok">??????????????????</button>
    </div>

  </div>
</div>
</div>

<div class="modal fade" id="kurrrrdok" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">???????????? ??????????????????</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control form-con" name="usdkurd" id="usdkurddok">
            </div>          
        </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="nazaddok">??????????</button>
      <button type="submit" class="btn btn-primary" id="usdkurd2dok">??????????????????</button>
    </div>

  </div>
</div>
</div>


<div class="modal fade" id="jonatishdok" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header" id="exampleModalLabeldoksedok">
    </div>
    <div class="modal-body">
            <div class="mb-3 d-flex">
               <div class="col-4">
                    <h5 class="mt-2 mx-2">??????????:</h5>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control text-right itogsw" name="itogs" id="itogsdok" disabled>
                </div>
            </div>
            <div class="mb-3 d-flex">
                <select name="clentra" id="clentradok" class="form-control text-center">
                    <option value="">???????????????? ????????????</option>
                    @foreach ($clentsdok as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <h5 class="mt-2 mx-2">????????????????:</h5>
                </div>                    
               <div class="col-6">
                <input type="text" class="form-control text-right itogsw" name="naqt" id="naqtdok">
                <input type="hidden" id="naqttrdok">
               </div>
               <div class="col-2">
                <button class="btn btn-success" id="naqtdokteng">
                    =
                </button>
               </div>
            </div>
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <h5 class="mt-2 mx-2">??????????:</h5> 
                </div>
                <div class="col-6">
                    <input type="text" class="form-control text-right itogsw" name="plastik" id="plastikdok">
                </div>
                <div class="col-2">
                    <button class="btn btn-success" id="plastikdokteng">
                        =
                    </button>
                </div>
            </div>  
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <h5 class="mt-2 mx-2">????????????:</h5>    
                </div>
                <div class="col-6">
                    <input type="text" class="form-control text-right itogsw" name="bank" id="bankdok">
                </div>
                <div class="col-2">
                    <button class="btn btn-success" id="bankdokteng">
                        =
                    </button>
                </div>
            </div>
            <div class="mb-3 d-flex">
                <div class="col-4">
                    <h5 class="mt-2 mx-2">????????:</h5>    
                </div>
                <div class="col-8">
                    <input type="text" class="form-control text-right itogsw" name="karzs" id="karzsdok" disabled>
                </div>
            </div>
            <div class="mb-3 d-flex" id="channgemdok">    
            </div>
            <div class="form-check">
                <input type="hidden" id="checkshiddendok">
                <div class="mb-3 d-flex">
                    <div class="col-4 mt-2">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="checksdok" value="1">
                        <label class="form-check-label">
                            ??????????
                        </label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control text-right itogsw" id="malumotdok">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex p-3 pb-5">
            <button type="button" class="btn btn-danger mr-2" data-bs-dismiss="modal" id="nazaddok">??????????</button>
            <button type="submit" class="btn btn-success" id="oplatadok">????????????</button>       
        </div>

  </div>
</div>
</div>

<div id="zaqazmodaldok">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">?????????? ????????????</h5>
    <svg xmlns="http://www.w3.org/2000/svg" id="nazadclickedok" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
    </svg>
</div>
    <div class="row">
        <input type="hidden" id="user_zaqdok">
        <input type="hidden" id="diomiydok">
        <div class="col-3">
            <table class="tab table-hover tab0">
                <thead>
                <tr>
                    <th>??????</th>
                </tr>
                </thead>
                <tbody id="imyadok">

                </tbody>
            </table>
        </div>
        <div class="col-9">
            <table class="tab table-hover tab01">
                <thead>
                    <tr>
                        <th>????????????</th>
                        <th>?????????? ????????</th>
                        <th>?????????????? ????????</th>
                        <th>????????</th>
                        <th>??????????????</th>
                        <th>??????????</th>
                    </tr>
                </thead>
                <tbody id="zaqazz123dok">

                </tbody>
            </table>
        </div>
    </div>  
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" id="nazadclickdok">??????????</button>
    <button id="SubmitCkickeddok" class="btn btn-primary">??????????????????</button>
</div>
</div>

<div class="modal fade" id="zaqazaytModaldok" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">?????????? ????????????</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    
      <div class="text-center pb-4 pt-4">
          <button type="button" class="btn btn-primary mx-4" id="zzzzdok">????????????????</button>
          <button type="submit" id="zzzz2dok" class="btn btn-success">??????????????</button>
      </div>
  </div>
</div>
</div>
@else
    
@endif
<script type="text/javascript">
    let _token = $('meta[name="csrf-token"]').attr('content');
    $( function() {
        $( "#tbody2" ).selectable();
    } );
    
    $( function() {
        $( "#zaqazz123" ).selectable();
    } );

    $( function() {
        $( "#tbody" ).selectable();
    } );

    function addPost() {
        $("#id").val('');
        $('#post-modal').modal('show');
    }

    $(document).on("click", "#pokupka", function(){
        var id = $(this).data("id");
        var name = $(this).data("name");
        $(".clnam").html(name);
        $("#clentra").val(id);
        $("#clentranam").html(name);
        toastr.success("????????????????").fadeOut(1500);;
    });

    function tbody2clent(name = '') {
        $.ajax({
            url: "{{ route('tbody2clent') }}",
            method: "GET",
            data:{name: name},
            dataType:'json',
            success:function(data){
                let rows =  '';
                data.forEach(room => {
                rows += `
                    <tr style="border-bottom: 1px solid;" data-id="${room.id}" data-name="${room.name}" id="pokupka">
                        <td>${room.name}</td>
                        <td>${room.tel}</td>             
                    </tr>
                `;
                });
            $("#tbody2clent").html(rows);
            }
        });
    }
    tbody2clent();
    $(document).on("keyup", "#searchclent", function(){
        var name = $(this).val();
        tbody2clent(name);
    });

    function namecler(data, form) {
        $(form)[0].reset();
        tbody2clent();
        $('#name').val('');
        $('#tel').val('');
        $('#firma').val('');
        $('#inn').val('');
        $('#post-modal').modal('hide');
        toastr.success(data.msg);
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
                namecler(data, form);
            }
            if(data.code == 0){
                $.each(data.error, function(prefix, val){
                    $(form).find('span.'+prefix+'_error').text(val[0]);
                });
                toastr.error(data.msg);
            }
            if(data.code == 201){
                namecler(data, form);
            }           
        }
        });
    });

    $(document).on('change', '#clentra', function(){
        var id = $(this).val();
        var inputdate = "<span class='mt-2'>???????? ????????:</span><input type='date' class='form-control' id='srok' />";
        var itogs = $("#itogs").val();
        $("#karzs").val(itogs);
        var karzs = $("#karzs").val();
        $.ajax({
            url:"{{ route('usersumma') }}",
            method:'GET',
            data:{
                id:id,
                karzs: karzs
            },
            dataType:'json',
            success:function(data)
            {
                if(data.usd == 1){
                    if(data.summa >= karzs){
                        let pay = data.summa - karzs;
                        $("#channgem").html('');
                        $("#karzs").val('');
                        $(".clnam").html(data.name);
                        $("#clentra").val(id);
                        $("#clentranam").html(data.name);
                        $("#exampleModalLabeldokse").html("<span class='modal-title alert alert-success'>?????????? ??????????????  " + data.summa + "$  " + "???????? ?????????????????? ???? ?????????????????? ?????????????????? ??????????  " + pay + "$ </span>");

                    }else{
                        let pay2 = karzs - data.summa;
                        $("#karzs").val(pay2);
                        $("#naqttr").val(data.summa);
                        $("#channgem").html(inputdate);
                        $(".clnam").html(data.name);
                        $("#clentra").val(id);
                        $("#clentranam").html(data.name);
                        $("#exampleModalLabeldokse").html("<span class='modal-title alert alert-danger'>?????????? ??????????????  " + data.summa + "$  " + "?????????????? ???????????? ??????????????????????.  " + pay2 + "$  ?????????? ???????????? ???????? ???????????? ???????????? ???????????????????? ?????????? ???????????? ?????????????? ????????????</span>");
                    }
                }
                else{
                    if(data.summa >= karzs){
                        let pay3 = data.summa - karzs;
                        $("#channgem").html('');
                        $("#karzs").val('');
                        $(".clnam").html(data.name);
                        $("#clentra").val(id);
                        $("#clentranam").html(data.name);
                        $("#exampleModalLabeldokse").html("<span class='modal-title alert alert-success'>?????????? ??????????????  " + data.summa + " ??????  " + "???????? ?????????????????? ???? ?????????????????? ?????????????????? ??????????  " + pay3 + " ?????? </span>");
                    }else{
                        let pay4 = karzs - data.summa;
                        $("#karzs").val(pay4);
                        $("#naqttr").val(data.summa);
                        $("#channgem").html(inputdate);
                        $(".clnam").html(data.name);
                        $("#clentra").val(id);
                        $("#clentranam").html(data.name);
                        $("#exampleModalLabeldokse").html("<span class='modal-title alert alert-danger'>?????????? ??????????????  " + data.summa + " ??????  " + "?????????????? ???????????? ??????????????????????.  " + pay4 + " ??????  ?????????? ???????????? ???????? ???????????? ???????????? ???????????????????? ?????????? ???????????? ?????????????? ????????????</span>");
                    }
                }
            }
        });
    });


    $(document).on('click', '#on', function(){
        var a = $("#onval").val();
        var query = '';
        if(a == 0){
            $("#onval").val(1);     
            $.ajax({
                url:"{{ route('live_searchdokon') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#tbody2').html(data.table_data);
                }
            });        
        }else{
            $("#onval").val(0);   
            $.ajax({
                url:"{{ route('live_search') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#tbody2').html(data.table_data);                    
                }
            });        
        }
    });

    function kursm(){
        $.ajax({
            url: "{{ route('kursm') }}",
            type: 'GET',
            data: {
                _token: _token
            },
            success: function(data) {
                $("#usdkurd").val(data.kurs);
                $('#kurrrr').modal('show');
            }
        });
    }

    $(document).on('click', '#zaqas', function(){
        $("#zaqazaytModal").modal('show');
    });

    $('#zzzz').on('click', function(){
        $("#zaqazaytModal").modal('hide');
        $('#zaqazmodal').toggle('fold');
        $("#user_zaq").val('');
        $("#diomiy").val(0);
        var query = '';
        $.ajax({
            url:"{{ route('zzzz') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#imya').html(data);
            }
        });        
    });

    $(document).on('click', '#data2' ,function(){
        var id = $(this).data("id");
        $("#user_zaq").val(id);        
        $.ajax({
            url:"{{ route('zzzzcli') }}",
            method:'GET',
            data:{
                id: id,
            },
            dataType:'json',
            success:function(data)
            {
                $('#zaqazz123').html(data);
            }
        });
    });

    $("#zzzz2").on( "click", function() {
        $("#zaqazaytModal").modal('hide');
        $('#zaqazmodal').toggle('fold');
        $("#user_zaq").val('');
        $("#diomiy").val(1);
        var query = '';  
        $.ajax({
            url:"{{ route('zzzzaaaa') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#imya').html(data);
            }
        });      
    });

    $(document).on('click', '#data22' ,function(){
        var id = $(this).data("id");
        $("#user_zaq").val(id);  
        $.ajax({
            url:"{{ route('zzzzclick') }}",
            method:'GET',
            data:{
                id: id,
            },
            dataType:'json',
            success:function(data)
            {
                $('#zaqazz123').html(data);
            }
        });
    });

    $('#nazadclicke').on('click', function(){
        $('#zaqazmodal').toggle('fold');
        $("#user_zaq").val('');  
    });

    $("#nazadclick").on( "click", function() {
        $('#zaqazmodal').toggle('fold');
        $("#zaqazaytModal").modal('show');
        $("#user_zaq").val('');
    });
    
    $(document).on('click', '#checks', function(){
        var son = $("#checks").val();
        var ch = $("#checkshidden").val();
        if(ch == 1){
            $("#checkshidden").val(0);
        }
        if(ch == 0){
            $("#checkshidden").val(son);
        }
    });

    $(document).on('keyup', '#son', function(){
        var son = $("#son").val();
        var summo = $("#summo").val();
        $("#summ").val(son * summo);
        $("#sum2").val(son * summo);
        $("#cheg").val("");
    });
    $(document).on('keyup', '#summo', function(){
        var son = $("#son").val();
        var summo = $("#summo").val();
        var summ2 = $("#summ2").val();
        var j = summ2 - summo;
        $("#sum2").val(summo * son); 
        $("#summ").val(summo * son);
        $("#cheg").val("");
    });
    $(document).on('keyup', '#cheg', function(){
        var cheg = $("#cheg").val();         
        var summo = $("#summo").val();
        var son = $("#son").val();
        var sum2 = $("#sum2").val();
        var j = summo / 100;
        var j2 = cheg * j;
        var j3 = son * j2;
        $("#summ").val(sum2 - j3);
        var sss = $("#summ").val();
        $("#summo").val(sss / son);

    });
    $(document).on('keyup', '#summ', function(){
        var son = $("#son").val();     
        var summ = $("#summ").val();
        var sum2 = $("#sum2").val();
        var a = summ / sum2;
        var j = a * 100;
        $("#summo").val(summ / son);
        $("#cheg").val(100 - j);
    });


    $(document).on('keyup', '#naqt', function(){
        var itogs = $("#itogs").val();
        var naqt = $("#naqt").val();
        var naqttr = $("#naqttr").val();
        var plastik = $("#plastik").val();
        var bank = $("#bank").val();
        var sss = itogs - naqttr - naqt - plastik - bank;
        $("#karzs").val(sss);
        var kar = $("#karzs").val();
        var inputdate = "<span class='mt-2'>???????? ????????:</span><input type='date' class='form-control' id='srok' />";
        if(kar > 0){
            $("#channgem").html(inputdate);
        }
        if(kar < 0){
            toastr.error("?????????? ?????? ??????????????");
            $("#channgem").html(inputdate);
        }
        if(kar == 0){
            $("#channgem").html('');
        }
    });

    $(document).on('keyup', '#plastik', function(){
        var itogs = $("#itogs").val();
        var naqt = $("#naqt").val();
        var plastik = $("#plastik").val();
        var bank = $("#bank").val();
        var naqttr = $("#naqttr").val();
        var sss = itogs - naqttr - naqt - plastik - bank;
        $("#karzs").val(sss);
        var kar = $("#karzs").val();
        var inputdate = "<span class='mt-2'>???????? ????????:</span><input type='date' class='form-control' id='srok' />";
        if(kar > 0){
            $("#channgem").html(inputdate);
        }
        if(kar < 0){
            toastr.error("?????????? ?????? ??????????????");
            $("#channgem").html(inputdate);
        }
        if(kar == 0){
            $("#channgem").html('');
        }
    });

    $(document).on('keyup', '#bank', function(){
        var itogs = $("#itogs").val();
        var naqt = $("#naqt").val();
        var naqttr = $("#naqttr").val();
        var plastik = $("#plastik").val();
        var bank = $("#bank").val();
        var sss = itogs - naqttr - naqt - plastik - bank;
        $("#karzs").val(sss);
        var kar = $("#karzs").val();
        var inputdate = "<span class='mt-2'>???????? ????????:</span><input type='date' class='form-control' id='srok' />";
        if(kar > 0){
            $("#channgem").html(inputdate);
        }
        if(kar < 0){
            toastr.error("?????????? ?????? ??????????????");
            $("#channgem").html(inputdate);
        }
        if(kar == 0){
            $("#channgem").html('');
        }
    });
    $(document).on('click', '#naqtteng', function(){
        var itogs = $("#itogs").val();
        $("#naqt").val(itogs);
        $("#plastik").val('');
        $("#bank").val('');
        $("#karzs").val(0);
    });

    $(document).on('click', '#plastikteng', function(){
        var itogs = $("#itogs").val();
        $("#naqt").val('');
        $("#plastik").val(itogs);
        $("#bank").val('');
        $("#karzs").val(0);
    }); 
    
    $(document).on('click', '#bankteng', function(){
        var itogs = $("#itogs").val();
        $("#naqt").val('');
        $("#plastik").val('');
        $("#bank").val(itogs);
        $("#karzs").val(0);
    });

        function fetch_customer_data(query = '')
        {
            $.ajax({
                url:"{{ route('sotuv') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {                 
                    $('#tbody').html(data.table_data);
                }
            });
        }
        fetch_customer_data();
        fetch_customer_data();

        function lister(){
            $.ajax({
                url:"{{ route('lister') }}",
                method:'GET',
                success:function(data)
                {
                    $("#itog").val(data.itogo);
                    $("#itogs").val(data.itogo);
                    $("#karzs").val(data.itogo);
                    $("#kurs").val(data.kurs);
                    if(data.usd == 1){
                        $("#kkkkkk").html("USD");
                    }else{
                        $("#kkkkkk").html("UZS");
                    }
                }
            });
        }
        lister();
        lister();
      
        function fetch_customer_data2(query = '')
        {
            $.ajax({
                url:"{{ route('live_search') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#tbody2').html(data.table_data);                    
                }
            })
        }
        fetch_customer_data2();
        fetch_customer_data2();

        $("#usdkurd2").on('click', function(){
            var usdkurd = $("#usdkurd").val();
            $.ajax({
                url: "{{ route('usdkurd2') }}",
                type: 'GET',
                data: {
                    kurs: usdkurd,
                    _token: _token
                },
                success: function(data) {                 
                    $('#kurrrr').modal('hide');
                    chaqirish2();
                    toastr.success(data.msg).fadeOut(1500);
                }
            });
        });

        $(document).on('click', '#SubmitCkicked' ,function(){
            var id = $("#user_zaq").val();
            var doimiy = $("#diomiy").val();
            if(id){
                $.ajax({
                    url:"{{ route('submitckicked') }}",
                    method:'POST',
                    data:{
                        id: id,
                        doimiy: doimiy,
                        _token: _token
                    },
                    dataType:'json',
                    success:function(data)
                    {
                        chaqirish2();
                        $("#user_zaq").val('');
                        $('#zaqazmodal').toggle('fold');
                        toastr.success(data.msg).fadeOut(1500);
                    }
                });
            }else{
                toastr.error("?????????????? ??????????????????").fadeOut(1500);
            }
        });
        $("#Radio1").on('click', function(){
            var aaa = $("#Radio1").val();
            $("#radio").val(aaa);        
        });
        $("#Radio2").on('click', function(){
            var aaa = $("#Radio2").val();
            $("#radio").val(aaa);        
        });
 
        $("#aqsh").on('click', function(){
            var kurs = $("#kurs").val();
            if(kurs < 1){
                toastr.error("???????????????? ????????");
            }else{
                $.ajax({
                    url: "{{ route('tugle') }}",
                    type: 'POST',
                    data: {
                        _token: _token
                    },
                    success: function(data) {
                        chaqirish2();
                    }
                });            
            }            
        });

        // $("#tayyor").on('click', function(){
        //     var itog = $("#itog").val();
        //     if(itog <= 0){
        //         toastr.error("???????? 0").fadeOut(1500);
        //     }else{
        //         $.ajax({
        //             url: "{{ route('rachot') }}",
        //             type: 'GET',
        //             success: function(data) {                                     
        //                 $("#channgem").html('');
        //                 $("#exampleModalLabeldokse").html('');
        //                 $("#jonatish").modal("show");                        
        //             }
        //         });
        //     }
        // });

        $("#tayyor").on('click', function(){
            var itog = $("#itog").val();
            var clentra = $("#clentra").val();
            if (clentra) {
                if(itog <= 0){
                    toastr.error("???????? 0").fadeOut(1500);
                }else{
                    $.ajax({
                        url: "{{ route('rachot') }}",
                        type: 'GET',
                        success: function(data) {
                            $("#itogs").val(data.itogo);
                            var inputdate = "<span class='mt-2'>???????? ????????:</span><input type='date' class='form-control' id='srok' />";
                            var itogs = $("#itogs").val();
                            $("#karzs").val(itogs);
                            var karzs = $("#karzs").val();
                            $.ajax({
                                url:"{{ route('usersumma') }}",
                                method:'GET',
                                data:{
                                    id: clentra,
                                    karzs: itogs
                                },
                                dataType:'json',
                                success:function(data)
                                {
                                    if(data.usd == 1){
                                        if(data.summa >= karzs){
                                            let pay = data.summa - karzs;
                                            $("#channgem").html('');
                                            $("#karzs").val('');
                                            $("#exampleModalLabeldokse").html("<span class='modal-title alert alert-success'>?????????? ??????????????  " + data.summa + "$  " + "???????? ?????????????????? ???? ?????????????????? ?????????????????? ??????????  " + pay + "$ </span>");
                                            $("#jonatish").modal("show");
                                        }else{
                                            let pay2 = karzs - data.summa;
                                            $("#karzs").val(pay2);
                                            $("#naqttr").val(data.summa);
                                            $("#channgem").html(inputdate);
                                            $("#exampleModalLabeldokse").html("<span class='modal-title alert alert-danger'>?????????? ??????????????  " + data.summa + "$  " + "?????????????? ???????????? ??????????????????????.  " + pay2 + "$  ?????????? ???????????? ???????? ???????????? ???????????? ???????????????????? ?????????? ???????????? ?????????????? ????????????</span>");
                                            $("#jonatish").modal("show");
                                        }
                                    }
                                    else{
                                        if(data.summa >= karzs){
                                            let pay3 = data.summa - karzs;
                                            $("#channgem").html('');
                                            $("#karzs").val('');
                                            $("#exampleModalLabeldokse").html("<span class='modal-title alert alert-success'>?????????? ??????????????  " + data.summa + " ??????  " + "???????? ?????????????????? ???? ?????????????????? ?????????????????? ??????????  " + pay3 + " ?????? </span>");
                                            $("#jonatish").modal("show");
                                        }else{
                                            let pay4 = karzs - data.summa;
                                            $("#karzs").val(pay4);
                                            $("#naqttr").val(data.summa);
                                            $("#channgem").html(inputdate);
                                            $("#exampleModalLabeldokse").html("<span class='modal-title alert alert-danger'>?????????? ??????????????  " + data.summa + " ??????  " + "?????????????? ???????????? ??????????????????????.  " + pay4 + " ??????  ?????????? ???????????? ???????? ???????????? ???????????? ???????????????????? ?????????? ???????????? ?????????????? ????????????</span>");
                                            $("#jonatish").modal("show");
                                        }
                                    }
                                }
                            });                      
                        }
                    });
                }                
            }else{
                if(itog <= 0){
                    toastr.error("???????? 0").fadeOut(1500);
                }else{
                    $("#channgem").html('');
                    $("#exampleModalLabeldokse").html('');
                    $("#jonatish").modal("show");          
                }
            }
        });
        

        function pustoy(){
            $("#belgi").val('');
            $("#belgi2").val('');
            $("#itogs").val("");
            $("#naqt").val("");
            $("#plastik").val("");
            $("#bank").val("");
            $("#karzs").val("");
            $("#clentra").val("");
            $(".clnam").html("");
            $("#clentranam").html("");
            toastr.success("???????????????????? ????????????????").fadeOut(2000);
            $("#jonatish").modal("hide");
        }

        function chaqirish(){
            fetch_customer_data();
            fetch_customer_data2();
            lister();
            pustoy();
        }

        function chaqirish2(){
            fetch_customer_data();
            fetch_customer_data();
            lister();
        }

        function printer(k) {
            $.ajax({
                url: "http://printer/printer",
                type: "GET",
                data: {
                    text: k
                },
            });
        }

        function bot_chat_id(data, _token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot,srok){
            var s = plastik + naqt + bank;
            var k= "";
            k+= "?????????? ????????????????" + " " + data.user.name + " " + "?????????????? ???????????????????????????? ??????????????.";
            k+= " \n";
            k+= " \n";
            for(i = 0;i < data.context.length; i++){
                k+= ""
                k+= data.context[i]["name"];
                k+= "--" + data.context[i]["soni"];
                k+= "*" + data.context[i]["itog"];
                k+= ";\n";
            }
            k+= "\n";
            k+= "???????? ??????????????" + " , " + itogs;
            k+= ";\n";
            k+= "??????????????" + " , " + s;
            k+= ";\n";
            k+= "????????????????????" + " , " + karzs;
            k+= ";\n";
            k+= "?????????? ??????????????" + " , " + srok;
            k+= ";\n";
            k+= "???????? ????????????????????" + " , " + data.javob;
            k+= "\n";
            k+= "\n";
            k+= "???????????? ?????????? << ID Group >>";
            $.ajax({
                url: "https://api.telegram.org/bot5473083753:AAGZa2nwaz0Ndj53tJskF--Owqxe-ApZdnA/sendMessage",
                type: "GET",
                data: {
                    chat_id: data.user.chatid,
                    text: k
                },
                success: function(data) {
                    $.ajax({
                        url: "{{ route('oplata') }}",
                        type: 'POST',
                        data:{
                            id: clentra,
                            itogs: itogs,
                            naqt: naqt,
                            plastik: plastik,
                            bank: bank,
                            karzs: karzs,
                            checks: checks,
                            srok: srok,
                            _token: _token
                        },
                        success: function(data) {                               
                            chaqirish();
                        }
                    });
                }
            });
            printer(k);
        }

        function bot_no_id(data, _token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot,srok){
            var s = plastik + naqt + bank;
            var k= "";
            k+= "?????????? ????????????????" + " " + data.user.name + " " + "?????????????? ???????????????????????????? ??????????????.";
            k+= " \n";
            k+= " \n";
            for(i = 0;i < data.context.length; i++){
                k+= ""
                k+= data.context[i]["name"];
                k+= "--" + data.context[i]["soni"];
                k+= "*" + data.context[i]["itog"];
                k+= ";\n";
            }
            k+= "\n";
            k+= "???????? ??????????????" + " , " + itogs;
            k+= ";\n";
            k+= "??????????????" + " , " + s;
            k+= ";\n";
            k+= "????????????????????" + " , " + karzs;
            k+= ";\n";
            k+= "?????????? ??????????????" + " , " + srok;
            k+= ";\n";
            k+= "???????? ????????????????????" + " , " + data.javob;
            k+= "\n";
            k+= "\n";
            k+= "???????????? ?????????? << ID Group >>";
            $.ajax({
                url: "{{ route('oplata') }}",
                type: 'POST',
                data:{
                    id: clentra,
                    itogs: itogs,
                    naqt: naqt,
                    plastik: plastik,
                    bank: bank,
                    karzs: karzs,
                    checks: checks,
                    srok: srok,
                    _token: _token
                },
                success: function(data) {                               
                    chaqirish();                                  
                }
            });
            printer(k);
        }

        function birlamchi_bot(data, _token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot,srok){
            var s = plastik + naqt + bank;
            var k= "";
            k+= "?????????? ???????????????? ?????????? ?????????????? ???????????????????????????? ??????????????.";
            k+= " \n";
            k+= " \n";
            for(i = 0;i < data.context.length; i++){
                k+= ""
                    k+= data.context[i]["name"];
                    k+= "--" + data.context[i]["soni"];
                    k+= "*" + data.context[i]["itog"];
                    k+= ";\n";
            }
            k+= "\n";
            k+= "???????? ??????????????" + " , " + itogs;
            k+= ";\n";
            k+= "??????????????" + " , " + s;
            k+= "\n";
            k+= "\n";
            k+= "???????????? ?????????? << ID Group >>";
            $.ajax({
                url: "{{ route('oplata') }}",
                type: 'POST',
                data:{
                    id: clentra,
                    itogs: itogs,
                    naqt: naqt,
                    plastik: plastik,
                    bank: bank,
                    karzs: karzs,
                    checks: checks,
                    _token: _token
                },
                success: function(data) {                     
                    chaqirish();                       
                }
            });
            printer(k);
        }

        function zakazlarsqladi(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot) {
            $.ajax({
                url: "{{ route('zakazayt') }}",
                type: 'POST',
                data:{
                    id: clentra,
                    malumot: malumot,
                    itogs: itogs,
                    naqt: naqt,
                    plastik: plastik,
                    bank: bank,
                    checks: checks,
                    karzs: karzs,
                    _token: _token
                },
                success: function(data) {
                    if(data.code == 0){
                        toastr.error(data.msg).fadeOut(2000);
                    }else{
                        chaqirish();
                        location.reload(true);
                    }
                }
            });
        }

        $("#oplata").on('click', function(){
            var itogs = $("#itogs").val();
            var naqt = $("#naqt").val();
            var plastik = $("#plastik").val();
            var bank = $("#bank").val();
            var karzs = $("#karzs").val();
            var clentra = $("#clentra").val();
            var checks = $("#checkshidden").val();
            var malumot = $("#malumot").val();
            var srok = $("#srok").val();
            var s = plastik + naqt + bank;
            if(checks == 1){
                if(malumot){
                    zakazlarsqladi(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot);
                }else{
                    toastr.error("???????????????????? ????????????????").fadeOut(2000);
                }
            }else{
                if(karzs > 0){
                    if(clentra == null){
                        toastr.error("?????????????? ??????????????").fadeOut(2000);
                    }else{
                        if(srok){
                            $.ajax({
                                url: "{{ route('bot') }}",
                                type: 'POST',
                                data:{
                                    id: clentra,
                                    karzs: karzs,
                                    _token: _token
                                },
                                success: function(data) {
                                    if(data.user.chatid){
                                        bot_chat_id(data,_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot,srok);
                                    }else{
                                        bot_no_id(data, _token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot,srok);
                                    }
                                }
                            });
                        }else{
                            toastr.error("???????????? ??????????????????").fadeOut(2000);
                        }
                    }
                }
                if(karzs < 0){
                    toastr.error("?????????? ?????????????? ??????????????. ???????????????? ???????????????? ???????????? ????????????");
                }
                if(karzs == 0){
                    if(clentra == null){
                        $.ajax({
                            url: "{{ route('bot2') }}",
                            type: 'GET',
                            data:{
                                id: clentra,
                                karzs: karzs,
                                _token: _token
                            },
                            success: function(data) {
                                birlamchi_bot(data,_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot,srok);
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('bot') }}",
                            type: 'POST',
                            data:{
                                id: clentra,
                                karzs: karzs,
                                _token: _token
                            },
                            success: function(data) {
                                if(data.user.chatid){
                                    bot_chat_id(data,_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot,srok);
                                }else{
                                    bot_no_id(data, _token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot,srok);
                                }
                            }
                        });
                    }
                }
            }
        });


    function yangilash() {
        var id = $("#belgi2").val();
        if(id){
            $.ajax({
                url: "{{ route('belgi2') }}",
                type: 'GET',
                data: {
                    id: id,
                    _token: _token
                },
                success: function(data) {
                    $("#name2").val(data.name);
                    $("#son").val(data.soni);
                    $("#summ").val(data.itog);
                    $("#summo").val(data.summa2);
                    $("#summ2").val(data.summa2);                    
                    $("#sum2").val(data.itog);
                    $("#cheg").val('');
                    $('#edit').modal('show');
                }
            });
        }else{ 
            toastr.error("?????????????? ??????????????????????");
        }
    }
    
        $("#saqlash").on('click', function(){
            var id = $("#belgi2").val();
            var son = $("#son").val();
            var summo = $("#summo").val();
            var summ = $("#summ").val();
            var cheg = $("#cheg").val();            
            let _token  = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('yangilash') }}",
                type: 'POST',
                data: {
                    id: id,
                    soni: son,
                    summo: summo,
                    summ: summ,
                    cheg: cheg,
                    _token: _token
                },
                success: function(data) {
                    if(data.code == 0){
                        toastr.error(data.msg);
                    }else{
                        chaqirish2();
                        $("#belgi").val(data.data.name);
                        $("#belgi2").val(data.data.id);
                        $("#son").val(data.data.soni);
                        $('#edit').modal('hide');
                        toastr.success(data.msg).fadeOut(1500);
                    }                  
                }
            });            
        });
    
    $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        var ser = $("#onval").val();
        if(ser == 0){
            fetch_customer_data2(query);
        }else{           
            $.ajax({
                url:"{{ route('live_searchdokon') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#tbody2').html(data.table_data);                    
                }
            });                
        }
    });

    function plus(id) {
        let _token   = $('meta[name="csrf-token"]').attr('content');
        var kurs = $("#kurs").val();
        var radio = $("#radio").val();
        if(kurs < 1 ){
            toastr.error("???????????????? ????????").fadeOut(2000);
        }else{
            if(radio){
                    $.ajax({
                    url: "{{ route('sazdat') }}",
                    type: 'POST',
                    data: {
                        id: id,
                        radio: radio,
                        _token: _token
                    },
                    success: function(data) {
                        if(data.code == 0){
                            toastr.error(data.msg).fadeOut(2500);
                        }else{
                            chaqirish2();
                            toastr.success(data.msg).fadeOut(1500);
                        }
                    }
                });
            }else{
                toastr.error("?????? ????????????").fadeOut(2000);
            }
        }
    }

    function belgilash(id){
        $.ajax({
            url: "{{ route('belgila') }}",
            type: 'POST',
            data: {
                id: id,
                _token: _token
            },
            success: function(data) {
                $("#belgi").val(data.name);
                $("#belgi2").val(data.id);
                toastr.success("????????????????").fadeOut(1500);
            }
        });
    }

    function deciremente() {
        var id = $("#belgi2").val();
        var radio = $("#radio").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        if(radio){
            $.ajax({
                url: "{{ route('plus') }}",
                type: 'POST',
                data: {
                    id: id,
                    radio: radio,
                    _token: _token
                },
                success: function(data) {
                    if(data.error == 400){
                        toastr.error(data.msg).fadeOut(1500);
                    }else{
                        $("#belgi").val(data.data.name);
                        $("#belgi2").val(data.data.id);
                        $("#son").val(data.data.soni);
                        $("#summ").val(data.data.itog);
                        chaqirish2();
                    }
                }
            });
        }else{
            toastr.error("?????? ????????????").fadeOut(2000);
        }
    }
    
    function inceremente() {
        var id = $("#belgi2").val();
        var radio = $("#radio").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        if(radio){
            $.ajax({
                url: "{{ route('minus') }}",
                type: 'POST',
                data: {
                    id: id,
                    radio: radio,
                    _token: _token
                },
                success: function(data) {           
                    if(data.error == 400){
                        chaqirish2();
                        $("#belgi").val('');
                        $("#belgi2").val('');
                        $("#son").val(data.data.soni);
                        $("#summ").val(data.data.itog);
                        toastr.error(data.msg).fadeOut(1500);
                    }else{
                        chaqirish2();
                        $("#belgi").val(data.data.name);
                        $("#belgi2").val(data.data.id);
                        $("#son").val(data.data.soni);
                        $("#summ").val(data.data.itog);
                    }
                }
            });
        }else{
            toastr.error("?????? ????????????").fadeOut(2000);
        }
    }

    function udalit() {
        var id = $("#belgi2").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{ route('udalit') }}",
            type: 'POST',
            data: {
                id: id,
                _token: _token
            },
            success: function(data) {
                chaqirish2();
                $("#belgi").val('');
                $("#belgi2").val('');
                toastr.error(data.msg).fadeOut(1500);
            }            
        });
    }























    $(document).on('change', '#clentradok', function(){
        var id = $(this).val();
        var inputdate = "<span class='mt-2'>???????? ????????:</span><input type='date' class='form-control' id='srokdok' />";
        var itogs = $("#itogsdok").val();
        $("#karzsdok").val(itogs);
        var karzs = $("#karzsdok").val();
        $.ajax({
            url:"{{ route('usersummadok') }}",
            method:'GET',
            data:{
                id:id,
                karzs: karzs
            },
            dataType:'json',
            success:function(data)
            {
                if(data.usd == 1){
                    if(data.summa >= karzs){
                        let pay = data.summa - karzs;
                        $("#channgemdok").html('');
                        $("#karzsdok").val('');
                        $("#exampleModalLabeldoksedok").html("<span class='modal-title alert alert-success'>?????????? ??????????????  " + data.summa + "$  " + "???????? ?????????????????? ???? ?????????????????? ?????????????????? ??????????  " + pay + "$ </span>");

                    }else{
                        let pay2 = karzs - data.summa;
                        $("#karzsdok").val(pay2);
                        $("#naqttrdok").val(data.summa);
                        $("#channgemdok").html(inputdate);
                        $("#exampleModalLabeldoksedok").html("<span class='modal-title alert alert-danger'>?????????? ??????????????  " + data.summa + "$  " + "?????????????? ???????????? ??????????????????????.  " + pay2 + "$  ?????????? ???????????? ???????? ???????????? ???????????? ???????????????????? ?????????? ???????????? ?????????????? ????????????</span>");
                    }
                }
                else{
                    if(data.summa >= karzs){
                        let pay3 = data.summa - karzs;
                        $("#channgemdok").html('');
                        $("#karzsdok").val('');
                        $("#exampleModalLabeldoksedok").html("<span class='modal-title alert alert-success'>?????????? ??????????????  " + data.summa + " ??????  " + "???????? ?????????????????? ???? ?????????????????? ?????????????????? ??????????  " + pay3 + " ?????? </span>");
                    }else{
                        let pay4 = karzs - data.summa;
                        $("#karzsdok").val(pay4);
                        $("#naqttrdok").val(data.summa);
                        $("#channgemdok").html(inputdate);
                        $("#exampleModalLabeldoksedok").html("<span class='modal-title alert alert-danger'>?????????? ??????????????  " + data.summa + " ??????  " + "?????????????? ???????????? ??????????????????????.  " + pay4 + " ??????  ?????????? ???????????? ???????? ???????????? ???????????? ???????????????????? ?????????? ???????????? ?????????????? ????????????</span>");
                    }
                }
            }
        });
    });

    fetch_customer_datadok();
    function fetch_customer_datadok(query = '')
    {
        $.ajax({
            url:"{{ route('sotuvdok') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#tbodydok').html(data.table_data);
            }
        });
    }

    fetch_customer_data2dok();
    function fetch_customer_data2dok(query = '')
    {
        $.ajax({
            url:"{{ route('live_searchdok') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#tbody2dok').html(data.table_data);                
            }
        })
    }

    function kursmdok(){
        $.ajax({
            url: "{{ route('kursmdok') }}",
            type: 'GET',
            data: {
                _token: _token
            },
            success: function(data) {
                $("#usdkurddok").val(data.kurs);
                $('#kurrrrdok').modal('show');
            }
        });
    }

    $(document).on('click', '#zaqasdok', function(){
        $("#zaqazaytModaldok").modal('show');
    });

    $('#zzzzdok').on('click', function(){
        $("#zaqazaytModaldok").modal('hide');
        $('#zaqazmodaldok').toggle('fold');
        $("#user_zaqdok").val('');
        $("#diomiydok").val(0);
        var query = '';
        $.ajax({
            url:"{{ route('zzzzdok') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#imyadok').html(data);
            }
        });
        
    });

    $(document).on('click', '#data2dog' ,function(){
        var id = $(this).data("id");
        $("#user_zaqdok").val(id);        
        $.ajax({
            url:"{{ route('zzzzclidok') }}",
            method:'GET',
            data:{
                id: id,
            },
            dataType:'json',
            success:function(data)
            {
                $('#zaqazz123dok').html(data);
            }
        });
    });

    $("#zzzz2dok").on( "click", function() {
        $("#zaqazaytModaldok").modal('hide');
        $('#zaqazmodaldok').toggle('fold');
        $("#user_zaqdok").val('');
        $("#diomiydok").val(1);
        var query = '';
        $.ajax({
            url:"{{ route('zzzzaaaadok') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#imyadok').html(data);
            }
        });        
    });

    $(document).on('click', '#data22dok' ,function(){
        var id = $(this).data("id");
        $("#user_zaqdok").val(id);
        $.ajax({
            url:"{{ route('zzzzclickdok') }}",
            method:'GET',
            data:{
                id: id,
            },
            dataType:'json',
            success:function(data)
            {
                $('#zaqazz123dok').html(data);
            }
        });
    });

    $('#nazadclickedok').on('click', function(){
        $('#zaqazmodaldok').toggle('fold');
        $("#user_zaqdok").val('');  
    });

    $("#nazadclickdok").on( "click", function() {
        $('#zaqazmodaldok').toggle('fold');
        $("#zaqazaytModaldok").modal('show');
        $("#user_zaqdok").val('');
    });
    
    $(document).on('click', '#checksdok', function(){
        var son = $("#checksdok").val();
        var ch = $("#checkshiddendok").val();
        if(ch == 1){
            $("#checkshiddendok").val(0);
        }
        if(ch == 0){
            $("#checkshiddendok").val(son);
        }
    });

    $(document).on('keyup', '#sondok', function(){
        var son = $("#sondok").val();
        var summo = $("#summodok").val();
        $("#summdok").val(son * summo);
        $("#sum2dok").val(son * summo);
        $("#chegdok").val("");
    });
    $(document).on('keyup', '#summodok', function(){
        var son = $("#sondok").val();
        var summo = $("#summodok").val();
        var summ2 = $("#summ2dok").val();
        var j = summ2 - summo;
        $("#sum2dok").val(summo * son); 
        $("#summdok").val(summo * son);
        $("#chegdok").val("");
    });
    $(document).on('keyup', '#chegdok', function(){
        var cheg = $("#chegdok").val();         
        var summo = $("#summodok").val();
        var son = $("#sondok").val();
        var sum2 = $("#sum2dok").val();
        var j = summo / 100;
        var j2 = cheg * j;
        var j3 = son * j2;
        $("#summdok").val(sum2 - j3);
        var sss = $("#summdok").val();
        $("#summodok").val(sss / son);

    });
    $(document).on('keyup', '#summdok', function(){
        var son = $("#sondok").val();
        var summ = $("#summdok").val();
        var sum2 = $("#sum2dok").val();
        var a = summ / sum2;
        var j = a * 100;
        $("#summodok").val(summ / son);
        $("#chegdok").val(100 - j);
    });

    $(document).on('keyup', '#naqtdok', function(){
        var itogs = $("#itogsdok").val();
        var naqt = $("#naqtdok").val();
        var plastik = $("#plastikdok").val();
        var bank = $("#bankdok").val();
        var naqttr = $("#naqttrdok").val();
        var sss = itogs - naqttr - naqt - plastik - bank;
        $("#karzsdok").val(sss);
    });

    $(document).on('keyup', '#plastikdok', function(){
        var itogs = $("#itogsdok").val();
        var naqt = $("#naqtdok").val();
        var plastik = $("#plastikdok").val();
        var bank = $("#bankdok").val();
        var naqttr = $("#naqttrdok").val();
        var sss = itogs - naqttr - naqt - plastik - bank;
        $("#karzsdok").val(sss);
    });

    $(document).on('keyup', '#bankdok', function(){
        var itogs = $("#itogsdok").val();
        var naqt = $("#naqtdok").val();
        var plastik = $("#plastikdok").val();
        var bank = $("#bankdok").val();
        var naqttr = $("#naqttrdok").val();
        var sss = itogs - naqttr - naqt - plastik - bank;
        $("#karzsdok").val(sss);
    });

    $(document).on('click', '#naqtdokteng', function(){
        var itogs = $("#itogsdok").val();
        $("#naqtdok").val(itogs);
        $("#plastikdok").val('');
        $("#bankdok").val('');
        $("#karzsdok").val(0);
    });

    $(document).on('click', '#plastikdokteng', function(){
        var itogs = $("#itogsdok").val();
        $("#naqtdok").val('');
        $("#plastikdok").val(itogs);
        $("#bankdok").val('');
        $("#karzsdok").val(0);
    });
    
    $(document).on('click', '#bankdokteng', function(){
        var itogs = $("#itogsdok").val();
        $("#naqtdok").val('');
        $("#plastikdok").val('');
        $("#bankdok").val(itogs);
        $("#karzsdok").val(0);
    });

    $(document).on('click', '#ondok', function(){
        var a = $("#onvaldok").val();
        var query = '';
        if(a == 0){
            $("#onvaldok").val(1);            
            $.ajax({
                url:"{{ route('live_search') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#tbody2dok').html(data.table_data);
                }
            });
            
        }else{
            $("#onvaldok").val(0);            
            $.ajax({
                url:"{{ route('live_searchdok') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#tbody2dok').html(data.table_data);                    
                }
            });                
        }
    });

    $("#usdkurd2dok").on('click', function(){
        var usdkurd = $("#usdkurddok").val();
        $.ajax({
            url: "{{ route('usdkurd2dok') }}",
            type: 'GET',
            data: {
                kurs: usdkurd,
                _token: _token
            },
            success: function(data) {
                $("#itogdok").val(data.data.itogo);
                $("#kursdok").val(data.data.kurs);
                $('#kurrrrdok').modal('hide');
                fetch_customer_datadok();
                fetch_customer_data2dok();
                toastr.success(data.msg).fadeOut(1500);
            }
        });
    });

    $(document).on('click', '#SubmitCkickeddok' ,function(){
        var id = $("#user_zaqdok").val();
        var doimiy = $("#diomiydok").val();
        if(id){
            $.ajax({
                url:"{{ route('submitckickeddok') }}",
                method:'POST',
                data:{
                    id: id,
                    doimiy: doimiy,
                    _token: _token
                },
                dataType:'json',
                success:function(data)
                {
                    fetch_customer_datadok();
                    $("#itog2dok").val(data.data.itogo);
                    $("#itogdok").val(data.data.itogo);
                    $("#kursdok").val(data.data.kurs);
                    $("#user_zaqdok").val('');
                    $('#zaqazmodaldok').toggle('fold');
                    if(data.data.usd == 1){
                        $("#kkkkkk").html("USD");
                    }else{
                        $("#kkkkkk").html("UZS");
                    }
                    toastr.success(data.msg).fadeOut(1500);
                }
            });
        }else{
            toastr.error("?????????????? ??????????????????").fadeOut(1500);
        }
    });
    $("#Radio1dok").on('click', function(){
        var aaa = $("#Radio1dok").val();
        $("#radiodok").val(aaa);        
    });
    $("#Radio2dok").on('click', function(){
        var aaa = $("#Radio2dok").val();
        $("#radiodok").val(aaa);        
    });



    $("#aqshdok").on('click', function(){
        var kurs = $("#kursdok").val();
        if(kurs < 1 ){
            toastr.error("???????????????? ????????");
        }else{
            $.ajax({
                url: "{{ route('tugledok') }}",
                type: 'POST',
                data: {
                    _token: _token
                },
                success: function(data) {                    
                    $("#itog2dok").val(data.data.itogo);
                    $("#itogdok").val(data.data.itogo);
                    fetch_customer_datadok();
                }
            });            
        }            
    });

    $("#tayyordok").on('click', function(){
        var itog = $("#itogdok").val();
        var itog2 = $("#itog2dok").val();
        if(itog < 1 || itog2 < 1){
            toastr.error("???????? 0").fadeOut(1500);
        }else{
            $.ajax({
                url: "{{ route('rachotdok') }}",
                type: 'GET',
                success: function(data) {
                    $("#itogsdok").val(data.itogo);
                    $("#karzsdok").val(data.itogo);
                    $("#channgemdok").html('');
                    $("#jonatishdok").modal("show");                        
                }
            });
        }
    });

    function dok2bot(data) {
        fetch_customer_datadok();
        fetch_customer_data2dok();
        $("#itogdok").val(data.itogo);
        $("#belgidok").val('');
        $("#belgi2dok").val('');
        $("#itogsdok").val("");
        $("#naqtdok").val("");
        $("#plastikdok").val("");
        $("#bankdok").val("");
        $("#karzsdok").val("");
        $("#clentradok").val("");
        toastr.success("???????????????????? ????????????????").fadeOut(2000);
        $("#jonatishdok").modal("hide");
    }

    function bot_dok_server(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot) {
        var s = plastik + naqt + bank;
        var k= "";
            k+= "?????????? ????????????????" + " " + data.user.name + " " + "?????????????? ???????????????????????????? ??????????????.";
            k+= " \n";
            k+= " \n";
            for(i = 0;i < data.context.length; i++){
                k+= ""
                k+= data.context[i]["name"];
                k+= "--" + data.context[i]["soni"];
                k+= "*" + data.context[i]["itog"];
                k+= ";\n";
            }
            k+= "\n";
            k+= "???????? ??????????????" + " , " + itogs;
            k+= ";\n";
            k+= "??????????????" + " , " + s;
            k+= ";\n";
            k+= "????????????????????" + " , " + karzs;
            k+= ";\n";
            k+= "?????????? ??????????????" + " , " + srok;
            k+= ";\n";
            k+= "???????? ????????????????????" + " , " + data.javob;
            k+= "\n";
            k+= "\n";
            k+= "???????????? ?????????? << ID Group >>";
            $.ajax({
                url: "https://api.telegram.org/bot5473083753:AAGZa2nwaz0Ndj53tJskF--Owqxe-ApZdnA/sendMessage",
                type: "GET",
                data: {
                    chat_id: data.user.chatid,
                    text: k
                },
                success: function(data) {
                    $.ajax({
                        url: "{{ route('oplatadok') }}",
                        type: 'POST',
                        data:{
                            id: clentra,
                            itogs: itogs,
                            naqt: naqt,
                            plastik: plastik,
                            bank: bank,
                            karzs: karzs,
                            checks: checks,
                            srok: srok,
                            _token: _token
                        },
                        success: function(data) {                               
                            dok2bot(data);
                        }
                    });
                }
            });
            $.ajax({
                url: "http://printer/printer",
                type: "GET",
                data: {
                    text: k
                },
            });
    }

    function bot_dok_server2(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot) {
        var s = plastik + naqt + bank;
        var k= "";
        k+= "?????????? ????????????????" + " " + data.user.name + " " + "?????????????? ???????????????????????????? ??????????????.";
        k+= " \n";
        k+= " \n";
        for(i = 0;i < data.context.length; i++){
            k+= ""
            k+= data.context[i]["name"];
            k+= "--" + data.context[i]["soni"];
            k+= "*" + data.context[i]["itog"];
            k+= ";\n";
        }
        k+= "\n";
        k+= "???????? ??????????????" + " , " + itogs;
        k+= ";\n";
        k+= "??????????????" + " , " + s;
        k+= ";\n";
        k+= "????????????????????" + " , " + karzs;
        k+= ";\n";
        k+= "?????????? ??????????????" + " , " + srok;
        k+= ";\n";
        k+= "???????? ????????????????????" + " , " + data.javob;
        k+= "\n";
        k+= "\n";
        k+= "???????????? ?????????? << ID Group >>";
        $.ajax({
            url: "{{ route('oplatadok') }}",
            type: 'POST',
            data:{
                id: clentra,
                itogs: itogs,
                naqt: naqt,
                plastik: plastik,
                bank: bank,
                karzs: karzs,
                checks: checks,
                srok: srok,
                _token: _token
            },
            success: function(data) {                               
                dok2bot(data);
            }
        });
        $.ajax({
            url: "http://printer/printer",
            type: "GET",
            data: {
                text: k
            },
        });
    }

    function dok_oddiy_server(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot){
        var s = plastik + naqt + bank;
        var k= "";
            k+= "?????????? ???????????????? ?????????? ?????????????? ???????????????????????????? ??????????????.";
            k+= " \n";
            k+= " \n";
            for(i = 0;i < data.context.length; i++){
                k+= ""
                    k+= data.context[i]["name"];
                    k+= "--" + data.context[i]["soni"];
                    k+= "*" + data.context[i]["itog"];
                    k+= ";\n";
            }
            k+= "\n";
            k+= "???????? ??????????????" + " , " + itogs;
            k+= ";\n";
            k+= "??????????????" + " , " + s;
            k+= "\n";
            k+= "\n";
            k+= "???????????? ?????????? << ID Group >>";
        $.ajax({
            url: "{{ route('oplatadok') }}",
            type: 'POST',
            data:{
                id: clentra,
                itogs: itogs,
                naqt: naqt,
                plastik: plastik,
                bank: bank,
                karzs: karzs,
                checks: checks,
                _token: _token
            },
            success: function(data) {                     
                dok2bot(data);
            }
        });
        $.ajax({
            url: "http://printer/printer",
            type: "GET",
            data: {
                text: k
            },
        });
    }

    function dokchakir(){
        fetch_customer_datadok();
        fetch_customer_datadok();
    }
    $("#oplatadok").on('click', function(){
        var itogs = $("#itogsdok").val();
        var naqt = $("#naqtdok").val();
        var plastik = $("#plastikdok").val();
        var bank = $("#bankdok").val();
        var karzs = $("#karzsdok").val();
        var clentra = $("#clentradok").val();
        var checks = $("#checkshiddendok").val();
        var malumot = $("#malumotdok").val();
        var srok = $("#srokdok").val();
        var s = plastik + naqt + bank;
        if(checks == 1){
            if(malumot){
                $.ajax({
                    url: "{{ route('zakazaytdok') }}",
                    type: 'POST',
                    data:{
                        id: clentra,
                        malumot: malumot,
                        itogs: itogs,
                        naqt: naqt,
                        plastik: plastik,
                        bank: bank,
                        checks: checks,
                        karzs: karzs,
                        _token: _token
                    },
                    success: function(data) {
                        if(data.code == 0){
                            toastr.error(data.msg).fadeOut(2000);
                        }else{
                            dok2bot(data);          
                            location.reload(true);
                        }
                    }
                });
            }else{
                toastr.error("???????????????????? ????????????????").fadeOut(2000);
            }
        }else{
            if(karzs > 0){
                if(clentra){
                    if(srok){
                        $.ajax({
                            url: "{{ route('botdok') }}",
                            type: 'POST',
                            data:{
                                id: clentra,
                                karzs: karzs,
                                _token: _token
                            },
                            success: function(data) {
                                if(data.user.chatid){
                                    bot_dok_server(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot);
                                }else{
                                    bot_dok_server2(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot);
                                }
                            }
                        });
                    }else{
                        toastr.error("???????????? ??????????????????").fadeOut(2000);
                    }
                }else{
                    toastr.error("?????????????? ??????????????").fadeOut(2000);
                }
            }else{
                if(clentra){
                    $.ajax({
                        url: "{{ route('botdok') }}",
                        type: 'POST',
                        data:{
                            id: clentra,
                            karzs: karzs,
                            _token: _token
                        },
                        success: function(data) {
                            if(data.user.chatid){
                                    bot_dok_server(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot);
                                }else{
                                    bot_dok_server2(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot);
                                }
                        }
                    });
                }else{
                    $.ajax({
                        url: "{{ route('bot2dok') }}",
                        type: 'GET',
                        data:{
                            id: clentra,
                            karzs: karzs,
                            _token: _token
                        },
                        success: function(data) {
                            dok_oddiy_server(_token,itogs,naqt,plastik,bank,karzs,clentra,checks,malumot);
                        }
                    });
                }
            }              
        }
    });

    function yangilashdok() {
        var id = $("#belgi2dok").val();
        if(id){
            $.ajax({
                url: "{{ route('belgi2dok') }}",
                type: 'GET',
                data: {
                    id: id,
                    _token: _token
                },
                success: function(data) {
                    $("#name2dok").val(data.name);
                    $("#sondok").val(data.soni);
                    $("#summdok").val(data.itog);
                    $("#summodok").val(data.summa2);
                    $("#summ2dok").val(data.summa2);                    
                    $("#sum2dok").val(data.itog);
                    $("#chegdok").val('');
                    $('#editdok').modal('show');
                }
            });
        }else{ 
            toastr.error("?????????????? ??????????????????????");
        }

    }
    
        $("#saqlashdok").on('click', function(){
            var id = $("#belgi2dok").val();
            var son = $("#sondok").val();
            var summo = $("#summodok").val();
            var summ = $("#summdok").val();
            var cheg = $("#chegdok").val();            
            let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('yangilashdok') }}",
                type: 'POST',
                data: {
                    id: id,
                    soni: son,
                    summo: summo,
                    summ: summ,
                    cheg: cheg,
                    _token: _token
                },
                success: function(data) {
                    if(data.code == 0){
                        toastr.error(data.msg);
                    }else{
                        dokchakir();
                        $("#belgidok").val(data.data.name);
                        $("#belgi2dok").val(data.data.id);
                        $("#itogdok").val(data.data2.itogo);
                        $("#sondok").val(data.data.soni);
                        $('#editdok').modal('hide');
                        toastr.success(data.msg).fadeOut(1500);
                    }                  
                }
            });            
        });



    $(document).on('keyup', '#searchdok', function(){
        var query = $(this).val();
        var ser = $("#onvaldok").val();
        if(ser == 0){
            fetch_customer_data2dok(query);
        }else{           
            $.ajax({
                url:"{{ route('live_search') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#tbody2dok').html(data.table_data);                    
                }
            });                
        }
    });

    function plusdok(id) {
        let _token   = $('meta[name="csrf-token"]').attr('content');
        var kurs = $("#kursdok").val();
        var radio = $("#radiodok").val();
        if(kurs < 1 ){
            toastr.error("???????????????? ????????").fadeOut(2000);
        }else{
            if(radio){
                    $.ajax({
                    url: "{{ route('sazdatdok') }}",
                    type: 'POST',
                    data: {
                        id: id,
                        radio: radio,
                        _token: _token
                    },
                    success: function(data) {
                        if(data.code == 0){
                            toastr.error(data.msg).fadeOut(2500);
                        }else{
                            dokchakir();
                            $("#itogdok").val(data.data2.itogo);
                            $("#kursdok").val(data.data2.kurs);
                            toastr.success(data.msg).fadeOut(1500);
                        }
                    }
                });
            }else{
                toastr.error("?????? ????????????").fadeOut(2000);
            }
        }
    }

    function belgilashdok(id){
        $.ajax({
            url: "{{ route('belgiladok') }}",
            type: 'POST',
            data: {
                id: id,
                _token: _token
            },
            success: function(data) {
                $("#belgidok").val(data.name);
                $("#belgi2dok").val(data.id);
                toastr.success("????????????????").fadeOut(1500);
            }
        });
    }

    function decirementedok() {
        var id = $("#belgi2dok").val();
        var radio = $("#radiodok").val();
        if(radio){
            $.ajax({
                url: "{{ route('plusdok') }}",
                type: 'POST',
                data: {
                    id: id,
                    radio: radio,
                    _token: _token
                },
                success: function(data) {
                    if(data.error == 400){
                        toastr.error(data.msg).fadeOut(1500);
                    }else{
                        dokchakir();
                        $("#belgidok").val(data.data.name);
                        $("#belgi2dok").val(data.data.id);
                        $("#itogdok").val(data.data2.itogo);
                        $("#sondok").val(data.data.soni);
                        $("#summdok").val(data.data.itog);
                    }
                }
            });
        }else{
            toastr.error("?????? ????????????").fadeOut(2000);
        }
    }

    function incerementedok() {
        var id = $("#belgi2dok").val();
        var radio = $("#radiodok").val();
        if(radio){
            $.ajax({
                url: "{{ route('minusdok') }}",
                type: 'POST',
                data: {
                    id: id,
                    radio: radio,
                    _token: _token
                },
                success: function(data) {           
                    if(data.error == 400){
                        dokchakir();
                        $("#belgidok").val('');
                        $("#belgi2dok").val('');
                        $("#itogdok").val(data.data2.itogo);
                        $("#sondok").val(data.data.soni);
                        $("#summdok").val(data.data.itog);
                        toastr.error(data.msg).fadeOut(1500);
                    }else{
                        dokchakir();
                        $("#belgidok").val(data.data.name);                        
                        $("#belgi2dok").val(data.data.id);
                        $("#itogdok").val(data.data2.itogo);
                        $("#sondok").val(data.data.soni);
                        $("#summdok").val(data.data.itog);
                    }
                }
            });
        }else{
            toastr.error("?????? ????????????").fadeOut(2000);
        }
    }

    function udalitdok() {
        var id = $("#belgi2dok").val();

        $.ajax({
            url: "{{ route('udalitdok') }}",
            type: 'POST',
            data: {
                id: id,
                _token: _token
            },
            success: function(data) {
                dokchakir();
                $("#belgidok").val('');
                $("#belgi2dok").val('');
                $("#itogdok").val(data.data2.itogo);
                toastr.error(data.msg).fadeOut(1500);
            }            
        });
    }

</script>

@endsection
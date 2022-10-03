@extends('welcome')

@section('brend')
<style>
    #li{
        cursor: pointer;
    }
</style>
<div class="row rrow2">
    <div class="col-3 col-md-3 col-lg-3 col-xl-3 p-4 bordem bordem22">
        <ul id="ul">
            
        </ul>
    </div>
    <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 dl">
        <div class="row rrow3">
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <select name="id" id="gla" class="form-control mt-1">
                    
                </select>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <select name="ids" id="tip" class="form-control mt-1">
                    
                </select>
            </div>
            {{-- <div class="col-2 cccol"></div> --}}
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
             <input type="number" class="form-control mt-1" id="sum" placeholder="10 $">
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <input type="number" class="form-control mt-1" id="sum2" placeholder="1000 $">
            </div>
        </div>
        <div class="row sdasdasd">

        </div>
    </div>
</div>
<input type="hidden" id="id1">
<script>
    function getitem(){
        $.ajax({
            url: "{{ route('getdata') }}",
            type: "GET",
            success:function(data){
                let rows =  '';
                data.forEach(room => {
                rows += `
                    <li id="li" data-id="${room.id}">${room.name}</li>
                    `;
                });
                $("#ul").html(rows);
            }
        });
    }
    getitem();
    function getitemgla(){
        $.ajax({
            url: "{{ route('getdgla') }}",
            type: "GET",
            success:function(data){
                let rows =  '';
                rows += `<option value="">Категории выбрать</option>`;
                data.forEach(room => {
                rows += `
                    <option value="${room.id}">${room.name}</option>
                    `;
                });
                $("#gla").html(rows);
            }
        });
    }
    getitemgla();

    function getitemtip(query = ''){
        $.ajax({
            url: "{{ route('getdtip') }}",
            type: "GET",
            data:{
                query: query
            },
            dataType:'json',
            success:function(data){
                let rows =  '';
                rows += `<option value="">Тип выбрать</option>`;
                data.forEach(room => {
                rows += `
                    <option value="${room.id}">${room.name}</option>
                    `;
                });
                $("#tip").html(rows);
            }
        });
    }
    getitemtip();

    $(document).on("change", "#gla", function(){
        var id = $(this).val();
        var sum2 = $("#sum2").val();
        var sum = $("#sum").val();
        var tipid = $("#tip").val();
        var id = $("#gla").val();
        var idthis = $("#id1").val();
        getitemtip(id);
        $.ajax({
        url: "{{ route('getprodgla') }}",
        type: "GET",
        dataType:'json',
        data:{
            id: id,
            tipid: tipid,
            sum: sum,
            sum2: sum2,
            idthis: idthis,
        },
        success:function(data){
            let rows =  '';
            data.forEach(room => {
            if(room.prodaja){
                var summa = room.prodaja;
            }else{
                var summa = '';
            }
            rows += `
                <div class="col-12 mt-4 bordem">
                    <div class="samuray">
                        <div class="samuray-1">
                            <img class="imgesa" src="https://hitechdash.uz/images/${room.img}" alt="Chicago" class="rasmi" >
                            
                        </div>
                        <div class="samuray-2">
                            <h3 class="card-text">${room.tipname}</h3>                            
                            <p class="card-text">${room.name}</p>
                            <h3 class="">${summa} $</h3>
                            <img src="images/yulduz.png" alt="">
                            <div class="yuz">
                                <a href=""><button class="mt-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></span>В корзину</button></a>
                                <a href=""> <button class="mt-2 mb-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg></span>В корзину</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                `;
                });
                $(".sdasdasd").html(rows);
            }
        });
    });

    $(document).on("change", "#tip", function(){
        var tipid = $(this).val();
        localStorage.clear();
        localStorage.setItem('tid', JSON.stringify(tipid));
        var id = $("#gla").val();
        var sum2 = $("#sum2").val();
        var sum = $("#sum").val();
        var tipid = $("#tip").val();
        var idthis = $("#id1").val();
        $.ajax({
        url: "{{ route('getprodgla') }}",
        type: "GET",
        data:{
            id: id,
            tipid: tipid,
            sum: sum,
            sum2: sum2,
            idthis: idthis,
        },
        dataType:'json',
        success:function(data){
            let rows =  '';
            data.forEach(room => {
            if(room.prodaja){
                var summa = room.prodaja;
            }else{
                var summa = '';
            }
            rows += `
                <div class="col-12 mt-4 bordem">
                    <div class="samuray">
                        <div class="samuray-1">
                            <img class="imgesa" src="https://hitechdash.uz/images/${room.img}" alt="Chicago" class="rasmi" >
                            
                        </div>
                        <div class="samuray-2">
                            <h3 class="card-text">${room.tipname}</h3>                            
                            <p class="card-text">${room.name}</p>
                            <h3 class="">${summa} $</h3>
                            <img src="images/yulduz.png" alt="">
                            <div class="yuz">
                                <a href=""><button class="mt-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></span>В корзину</button></a>
                                <a href=""> <button class="mt-2 mb-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg></span>В корзину</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                `;
                });
                $(".sdasdasd").html(rows);
            }
        });
    });

    $(document).on("mouseout", "#sum", function(){
        var sum = $(this).val();
        var sum2 = $("#sum2").val();
        var tipid = $("#tip").val();
        var id = $("#gla").val();
        var idthis = $("#id1").val();
        localStorage.clear();
        localStorage.setItem('tid', JSON.stringify(tipid));
        $.ajax({
        url: "{{ route('getprodgla') }}",
        type: "GET",
        dataType:'json',
        data:{
            id: id,
            tipid: tipid,
            sum: sum,
            sum2: sum2,
            idthis: idthis,
        },
        success:function(data){
            let rows =  '';
            data.forEach(room => {
            if(room.prodaja){
                var summa = room.prodaja;
            }else{
                var summa = '';
            }
            rows += `
                <div class="col-12 mt-4 bordem">
                    <div class="samuray">
                        <div class="samuray-1">
                            <img class="imgesa" src="https://hitechdash.uz/images/${room.img}" alt="Chicago" class="rasmi" >
                            
                        </div>
                        <div class="samuray-2">
                            <h3 class="card-text">${room.tipname}</h3>                            
                            <p class="card-text">${room.name}</p>
                            <h3 class="">${summa} $</h3>
                            <img src="images/yulduz.png" alt="">
                            <div class="yuz">
                                <a href=""><button class="mt-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></span>В корзину</button></a>
                                <a href=""> <button class="mt-2 mb-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg></span>В корзину</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                `;
                });
                $(".sdasdasd").html(rows);
            }
        });
    });

    $(document).on("mouseout", "#sum2", function(){
        var sum2 = $(this).val();
        var sum = $("#sum").val();
        var tipid = $("#tip").val();
        var id = $("#gla").val();
        var idthis = $("#id1").val();
        localStorage.clear();
        localStorage.setItem('tid', JSON.stringify(tipid));
        $.ajax({
        url: "{{ route('getprodgla') }}",
        type: "GET",
        dataType:'json',
        data:{
            id: id,
            tipid: tipid,
            sum: sum,
            sum2: sum2,
            idthis: idthis,
        },
        success:function(data){
            let rows =  '';
            data.forEach(room => {
            if(room.prodaja){
                var summa = room.prodaja;
            }else{
                var summa = '';
            }
            rows += `
                <div class="col-12 mt-4 bordem">
                    <div class="samuray">
                        <div class="samuray-1">
                            <img class="imgesa" src="https://hitechdash.uz/images/${room.img}" alt="Chicago" class="rasmi" >
                            
                        </div>
                        <div class="samuray-2">
                            <h3 class="card-text">${room.tipname}</h3>                            
                            <p class="card-text">${room.name}</p>
                            <h3 class="">${summa} $</h3>
                            <img src="images/yulduz.png" alt="">
                            <div class="yuz">
                                <a href=""><button class="mt-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></span>В корзину</button></a>
                                <a href=""> <button class="mt-2 mb-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg></span>В корзину</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                `;
                });
                $(".sdasdasd").html(rows);
            }
        });
    });

    $(document).on("click", "#li", function(){
        var id = $(this).data("id");
        localStorage.clear();
        localStorage.setItem('tid', JSON.stringify(id));
        $("#id1").val(id);
        $("#sum2").val('');
        $("#sum").val('');
        $("#tip").val('');
        $("#gla").val('');
        $("#id1").val('');
        $.ajax({
        url: "{{ route('getprod') }}",
        type: "GET",
        dataType:'json',
        data:{
            id: id
        },
        success:function(data){
            let rows =  '';
            data.forEach(room => {
            if(room.prodaja){
                var summa = room.prodaja;
            }else{
                var summa = '';
            }
            rows += `
                <div class="col-12 mt-4 bordem">
                    <div class="samuray">
                        <div class="samuray-1">
                            <img class="imgesa" src="https://hitechdash.uz/images/${room.img}" alt="Chicago" class="rasmi" >
                            
                        </div>
                        <div class="samuray-2">
                            <h3 class="card-text">${room.tipname}</h3>                            
                            <p class="card-text">${room.name}</p>
                            <h3 class="">${summa} $</h3>
                            <img src="images/yulduz.png" alt="">
                            <div class="yuz">
                                <a href=""><button class="mt-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></span>В корзину</button></a>
                                <a href=""> <button class="mt-2 mb-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg></span>В корзину</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                `;
                });
                $(".sdasdasd").html(rows);
            }
        });
    });

    function free() {
        let sum = JSON.parse(localStorage.getItem("tid"));
        let prom = JSON.parse(localStorage.getItem("prom"));
        let sum2 = JSON.parse(localStorage.getItem("tid2"));
        if (sum) {
            free2(sum);          
        }
        if (prom) {
            fr(prom.sele, prom.serch);
        }
        else{
            free2(sum2.tid, sum2.name);          
        }
    }
    free();
    function fr(sele, serch){
        $("#sum2").val('');
        $("#sum").val('');
        $("#tip").val('');
        $("#gla").val('');
        $("#id1").val('');
        $.ajax({
        url: "{{ route('getprod') }}",
        type: "GET",
        dataType:'json',
        data:{
            sele: sele,
            serch: serch,
        },
        success:function(data){
            let rows =  '';
            data.forEach(room => {
            if(room.prodaja){
                var summa = room.prodaja;
            }else{
                var summa = '';
            }
            rows += `
                <div class="col-12 mt-4 bordem">
                    <div class="samuray">
                        <div class="samuray-1">
                            <img class="imgesa" src="https://hitechdash.uz/images/${room.img}" alt="Chicago" class="rasmi" >
                            
                        </div>
                        <div class="samuray-2">
                            <h3 class="card-text">${room.tipname}</h3>                            
                            <p class="card-text">${room.name}</p>
                            <h3 class="">${summa} $</h3>
                            <img src="images/yulduz.png" alt="">
                            <div class="yuz">
                                <a href=""><button class="mt-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></span>В корзину</button></a>
                                <a href=""> <button class="mt-2 mb-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg></span>В корзину</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                `;
                });
                $(".sdasdasd").html(rows);
            }
        });
    }
    function free2(id, tid, name){
        $("#id1").val(id);
        $("#sum2").val('');
        $("#sum").val('');
        $("#tip").val('');
        $("#gla").val('');
        $("#id1").val('');
        $.ajax({
        url: "{{ route('getprod') }}",
        type: "GET",
        dataType:'json',
        data:{
            id: id,
            tid: tid,
            name: name,
        },
        success:function(data){
            let rows =  '';
            data.forEach(room => {
            if(room.prodaja){
                var summa = room.prodaja;
            }else{
                var summa = '';
            }
            rows += `
                <div class="col-12 mt-4 bordem">
                    <div class="samuray">
                        <div class="samuray-1">
                            <img class="imgesa" src="https://hitechdash.uz/images/${room.img}" alt="Chicago" class="rasmi" >
                            
                        </div>
                        <div class="samuray-2">
                            <h3 class="card-text">${room.tipname}</h3>                            
                            <p class="card-text">${room.name}</p>
                            <h3 class="">${summa} $</h3>
                            <img src="images/yulduz.png" alt="">
                            <div class="yuz">
                                <a href=""><button class="mt-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></span>В корзину</button></a>
                                <a href=""> <button class="mt-2 mb-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg></span>В корзину</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                `;
                });
                $(".sdasdasd").html(rows);
            }
        });
    }
</script>
@endsection
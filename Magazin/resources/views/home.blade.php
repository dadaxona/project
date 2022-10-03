<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        #im{
            width: 60px;
            height: 60px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/">Magazin</a>
        <h4>Praduct</h4>
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" id="Submit">
            @csrf
            <input type="text" name="name" class="form-control mt-2" id="name" placeholder="Praduct Name">
            <input type="file" name="img" class="form-control mt-2" id="img" placeholder="Praduct Img">
            <input type="text" name="summa" class="form-control mt-2" id="summa" placeholder="Zakupki Summa">
            <input type="text" name="summa2" class="form-control mt-2" id="summa2" placeholder="Pradacha Summa">
            <button type="submit" class="btn btn-success form-control mt-2">Save</button>
        </form>
        <img src="" alt="">
            <table class="table mt-4">
                <tr>
                    <td>Name</td>
                    <td>Img</td>
                    <td>Zakupki</td>
                    <td>Pradacha</td>
                </tr>
                <tbody id="body">
                
                </tbody>
            </table>
    </div>

    <script>
        function imge(){
            $.get("praduct", function(data){
                let rows =  '';
                data.forEach(room => {
                    rows += `
                    <tr id="row_${room.id}">
                        <td>${room.name}</td>
                        <td><img src="images/${room.img}" id="im"></td>
                        <td>${room.summa}</td>
                        <td>${room.summa2}</td>
                    </tr>`;
                    });
                $("#body").html(rows);
            });
        }
        imge();

        $(document).ready(function (e) {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => { 
                    $('#preview-image-before-upload').attr('src', e.target.result); 
                }
                reader.readAsDataURL(this.files[0]); 
            });
            $('#Submit').submit(function(e) {
                e.preventDefault();
                var form = this;
                $.ajax({
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data: new FormData(form),
                    cache:false,
                    contentType: false,
                    processData: false,
                    success:function (data) {
                        if(data.code == 200){
                            $(form)[0].reset();
                            imge();
                            toastr.success(data.msg);
                        }
                        if(data.code == 0){
                            toastr.error(data.msg);
                        }
                    },
                });
            });
        });
    </script>
 {{-- url:$(form).attr('action'),
 method:$(form).attr('method'), --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registratura</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap-5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery-3.6.0/dist/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="toastr/toastr.min.css" />
    <script src="toastr/toastr.min.js"></script>
    <style>
      body{
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>
    
    <div class="container-fluid p-0 m-0">
        @yield("con")
    </div>

    <script>
      

    function hozirgiuchurt(query = '')
    {
        $.ajax({
            url:"{{ route('hozirgiuchurt') }}",
            method:'GET',
            success:function(data)
            {
              if(data.id){
                $('#hozirgio').html("U-" + data.count);
              }else{
                $('#hozirgio').html("U-" + 0);
              }
            }
        });
    }

    function hozirgiuchurtm(query = '')
    {
        $.ajax({
            url:"{{ route('hozirgiuchurtm') }}",
            method:'GET',
            success:function(data)
            {
              if(data.id){
                $('#hozirgiom').html("M-" + data.count);
              }else{
                $('#hozirgiom').html("M-" + 0);
              }
            }
        });
    }
    
    setInterval(() => {
      hozirgiuchurt();
      hozirgiuchurtm();
    }, 5000);
    </script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
    <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAKTI UNAND 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>

<div class="container-fluid">
    
    <div class="col-3 sidebar-column">
       
            @include('partials.sidebar')
      
        
    </div>
    <div class="col-9 content-column">
        
            @include('partials.header')
            {{-- @include('partials.header') --}}
            @yield('content')
       
       
    </div>

    <div id="confirmation-dialog" class="row confirmation-dialog">
        <div class="col dialog-content">
            <div class="row">
                <p>Yakin anda untuk keluar dari akun ini?</p>
                <div class="line-logout"></div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
            <div class=" row dialog-buttons">
                @csrf
                <div class="col-5  d-flex justify-content-center "><button class="btn-confirm">Iya</button></div>
                <div class="col-5 d-flex justify-content-center"><button type="button" class="btn-cancel" onclick="closeDialog()">Tidak</button></div>
            </div>
            </form>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="js/main.js" ></script>
</body>
</html>

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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
  </head>
  <body>

    <div class="container-fluid cm-main">
        <div class="row ">
            <div class="col-md-12 img-group">
                <img class="img-fluid me-2" style="width:3rem;" src="img/logo-unand.png" alt="">
                <img class="img-fluid" style="width:3rem;" src="img/logo-bakti.png" alt="">
            </div>
            
        </div>
        <div class="row coming-header">
            <div class="col-md-6  ">
                <img src="img/coming.svg" alt="" class="img-fluid">
                <div class="row mt-4 d-flex flex-row">
                  <div class="col-md-6"> <input type="email" class="form-control input-notify" id="exampleFormControlInput1" placeholder="name@example.com"></div> 
                   <div class="col-md-6"><button type="button" class="btn btn-primary">Primary</button></div> 
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="row flex flex-row justify-content-start  gap-5">
                        <div class="col-md-2 count-main">
                            <div class="row  count-hari"><p id="days" >00</p></div>
                            <p class="count-lable" >Hari</p>
                            </div>
                            <div class="col-md-2 count-main">
                                <div class="row count-hari"><p id="hours" >00</p></div>
                                <p class="count-lable" >Hari</p>
                                </div>
                                <div class="col-md-2 count-main">
                                    <div class="row count-hari"><p id="minutes" >00</p></div>
                                    <p class="count-lable" >Hari</p>
                                    </div>
                                    <div class="col-md-2 count-main">
                                        <div class="row count-hari"><p id="seconds" >00</p></div>
                                        <p class="count-lable" >Hari</p>
                                        </div>
                </div>
                <div class="row text-start count-final-date">
                    <h1>20 Agustus 2023</h1>
                </div>
                <div class="row start coming-announ">
                    <p><strong>Mark your calendars! </strong>BAKTI 2023 edition coming with surprises</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blank" ></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
        var countDownDate = new Date("August 20, 2023 00:00:00").getTime();
var x = setInterval(function(){
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);



    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;


},1000)
    </script>
 
  </body>
</html>
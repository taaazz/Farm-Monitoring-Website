<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Prak Modul 6</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#kemiringan").load("kemiringan.php");
                $("#led").load("led.php");
                $("#angka_sumbu").load("angka_sumbu.php");
            }, 1000);
        });
    </script>
  </head>
  <body>

  <nav class="navbar navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand mb-0 h1" href="#">
          <img src="aset/aset.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          Praktikum Modul 6</a>
      </div>
    </nav>
    
 
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card text-center mt-5 ">
            <div class="card-header fw-bold">
              Kemiringan
            </div>
            <div class="card-body">
            <h5 class="card-title" id="angka_sumbu">0</h5>

            </div>
            <div class="card-footer text-body-secondary"></div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mt-5">
            <div class="card-header fw-bold">
              Arah Kemiringan
            </div>
            <div class="card-body">
            <h5 class="card-title" id="kemiringan">-</h5>

            </div>
            <div class="card-footer text-body-secondary"></div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mt-5">
            <div class="card-header fw-bold">
              LED
            </div>
            <div class="card-body">
            <h5 class="card-title" id="led">-</h5>

            </div>
            <div class="card-footer text-body-secondary"></div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
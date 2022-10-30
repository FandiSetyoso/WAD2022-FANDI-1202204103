<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: rgba(0, 0, 0, 0.05);">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link" href="home.php">Home</a>
            <a class="nav-link" href="booking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>

<!-- Home -->
    <section id="Home">
      <h5 class="text-center">WELCOME TO EAD RENT</h3>
      <h6 class="text-center">Find Your Best Deal Here!</h5>
      <div class="card-group">
      <div class="card">
        <img src="amg.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mercedes-AMG GT 2015</h5>
          <p class="card-text">Rp.1.000.000/day</p>
          <p class="card-text">2 seater</p>
          <p class="card-text">4.0 L M178 twin-turbocharged V8</p>
          <p class="card-text">7-speed AMG SPEEDSHIFT DCT dual-clutch</p>
          <a href="booking.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
      <div class="card">
        <img src="i8.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BMW i8</h5>
          <p class="card-text">Rp.800.000/day</p>
          <p class="card-text">2 seater</p>
          <p class="card-text">	B38K15T0 1.5L turbocharged I3 engine gasoline Plug-in hybrid</p>
          <p class="card-text">	Aisin F21-360 FT EOP</p>
          <a href="booking.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
      <div class="card">
        <img src="r8.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Audi R8 2017</h5>
          <p class="card-text">Rp.1.000.000/day</p>
          <p class="card-text">2 seater</p>
          <p class="card-text"> V10 5.2 FSI</p>
          <p class="card-text">6-speed Graziano manual</p>
          <a href="booking.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>
    </section>
    
<!-- Footer -->
    <footer>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <h5>© Copyright 2022 : <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color:#000; text-decoration: none;">Fandi_1202204103_SI4402</a></h5>
      </div>
    </footer>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Copyright</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Nama Lengkap : Fandi Ahmad Atqan Setyoso</p>
            <p>NIM : 1202204103</p>
            <p>Kelas : SI4402</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
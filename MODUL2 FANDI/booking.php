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

<!-- Booking -->
<h3 class="text-center">Rent Your Car Now!</h3>
        <form method="POST" action="mybooking.php">
        <div class="mb-3">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="nama"/>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Book Date</label>
          <input type="date" class="form-control" name="bookdate">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Start Date</label>
          <input type="time" class="form-control" id="bookstart">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Duration (Days)</label>
          <input type="text" class="form-control" id="duration">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
          <input type="text" class="form-control" name="nomor"/>
        </div>
        <label for="" class="">Car Type</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>choose your car</option>
          <option value="1">Mercedes-AMG GT 2015</option>
          <option value="2">BMW i8</option>
          <option value="3">Audi R8 2017</option>
        </select>
        </div>
        <br>
        <div>
          <label for="" class="">Need Driver ?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Tidak
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="home.php" class="btn btn-primary">Cancel</a></div>

        </form>

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
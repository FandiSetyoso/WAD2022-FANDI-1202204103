<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Isi-->
    <div class="container">
  <div class="row">
    <div class="col">
    <img src="imagelogin.png" alt="..." height="1024px" width="702px">
    </div>
    <div class="col">
    <div class="d-flex gap-5 justify-content-center align-items-center" style="margin-top: 200px; margin-bottom: 200px;">
    <h1>Register</h1>
      <form action="AddRegister.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan Email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan Password">
        <label for="no_hp">No HP</label>
        <input type="number" id="no_hp" name="no_hp" placeholder="Masukkan No HP">
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Daftar</button>
      </form>
      </div>
      <div>
        <h6 class="mb-4" style="text-align: center;">Sudah punya akun ? <a href="Login.php">Login</a></h6>
      </div>
    </div>
</body>
</html>
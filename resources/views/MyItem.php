<?php
require 'Connector.php';

$query = "SELECT * FROM showroom_fandi_table";
$result = mysqli_query($koneksi, $query);

if (isset($_GET['message'])) {
    if ($_GET['message'] == 'succes') {
        // get name
        echo "<script>alert('Ditambahkan ke database!')</script>";
    } else if ($_GET['message'] == 'update') {
        echo "<script>alert('Update database!')</script>";
    } else if ($_GET['message'] == 'delete') {
        echo "<script>alert('Delete dari database!')</script>";
    }
}
?>

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
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav gap-3">
                    <a href="Home.php" class="nav-link">Home</a>
                    <a href="#" class="nav-link" style="color: white;">My Car</a>
                </div>
                <a href="AddItem.php" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500; margin">Add Car</a>
            </div>
        </div>

    </nav>

    <!-- Content -->
    <section id="list">
        <div class="container">
        <div>
            <h1>My Show Room</h1>
            <p>List Show Room Fandi - 1202204103</p>
            <div class="d-flex gap-5">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card cardcontent' style='width: 18rem;'>
                <img src='" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
                <div class='card-body'>
                <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
                <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
                <span class='d-flex'>
                    <a href='ItemDetail.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                    <a href='Delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
                </span>
                </div>
            </div>";
                }
            } else {
                echo "0 results";
            }
            ?>
            </div>
        </div>
        </div>
    </section>

</body>
</html>
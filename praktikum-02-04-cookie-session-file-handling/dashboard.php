<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Dashboard</title>
    <style>
        .container {
            font-size: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            width: 400px;
            padding: 10px;
            background: rgb(255, 255, 255);
        }
    </style>
</head>

<body>
    <h2>
        <center>Dashboard</center>
    </h2>
    <div class="container">
        <div class="row mb-3">
            <?php
            session_start();

            if (isset($_SESSION["username"])) {
                echo "Nama Pangguna: " . $_SESSION["username"];
            } else {
                echo header("location:login.php");
            }
            ?>
        </div>
        <div align="center">
            <a href='logout.php'><button class="btn btn-danger" style="margin-top: 40px;">Logout</button></a>
            <a href='unggah.php'><button  class="btn btn-success" style="margin-top: 40px;">Unggah</button></a>
        </div>
    </div>


</body>

</html>
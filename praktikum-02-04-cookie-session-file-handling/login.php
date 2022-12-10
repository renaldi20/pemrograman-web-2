<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Login</title>
    <style>
        .container {margin-left: 450px;}
    </style>
</head>
<body>
    <h2><center>Form Login</center></h2>
    <form action="" method="post">
   
        <div class="container">
             
            <div class="row mb-1">
                <label for="username" class="col-sm-1 col-form-label">Username</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" name="username" placeholder="username">
            </div>
            </div>
            <div class="row mb-1">
                <label for="password" class="col-sm-1 col-form-label">Password</label>
                <div class="col-sm-3">
                <input type="password" class="form-control" name="password"  placeholder="password">
                </div>
            </div>

            <?php
            session_start();
            $username = 'renaldi';
            $password = '123';
            if (isset($_POST['masuk'])) {
                if ($_POST['username'] == $username && $_POST['password'] == $password){
                    //Membuat Session
                    $_SESSION["username"] = $username; 
                    header("location: dashboard.php");
                    echo "Nama Pangguna: ".$_SESSION["username"];

                } else {
                    // Tampilkan Pesan Error
                   
                    echo '<p>Username Atau Password Tidak Benar</p>';
                }
            }  
            ?>
                <button type="submit" name="masuk" class="btn btn-success" value="login">Login</button>
       
            </div>
        
           
    </form>
</body>
</html>
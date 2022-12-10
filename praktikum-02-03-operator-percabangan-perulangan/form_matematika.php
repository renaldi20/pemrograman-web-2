<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Operator Aritmatika</title>
</head>

<body>
    <h2>
        <center>Operator Aritmatika </center>
    </h2>
    <p>
        <center> 20202205037 - Renaldi</center>
    </p>

    <?php
    $hari = date("l");
    $tanggal = date("d - F - Y");
    switch ($hari) {
        case "Sunday":
            $hari = "Minggu";
            break;
        case "Monday":
            $hari = "Senin";
            break;
        case "Tuesday":
            $hari = "Selasa";
            break;
        case "Wednesday":
            $hari = "Rabu";
            break;
        case "Thursday":
            $hari = "Kamis";
            break;
        case "Friday":
            $hari = "Jumat";
            break;
        case "Saturday":
            $hari = "Sabtu";
            break;
    }
    echo "<center>";
    echo "$hari, $tanggal.";
    echo " " . date("H:i:s") . "<br/>";
    echo "</center>";
    ?>
    <form action="" method="post">

        <div class="container">

            <div class="row mb-3">
                <label for="angka1" class="col-sm-5 col-form-label">Angka Pertama</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="angka1" value="<?= isset($_POST['angka1']) ? $_POST['angka1'] : '' ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="angka2" class="col-sm-5 col-form-label">Angka Kedua</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="angka2" value="<?= isset($_POST['angka2']) ? $_POST['angka2'] : '' ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Hitung</button>

        </div>

        <div class="container">
            <?php
            $angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : "";
            $angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : "";
            if (empty($angka1)) {
                echo '<div class="alert alert-danger" role="alert"> angka pertama tidak boleh kosong </div>';
            } else if (empty($angka2)) {
                echo '<div class="alert alert-danger" role="alert"> angka kedua tidak boleh kosong </div>';
            } else if ($angka1 < $angka2) {
                echo '<div class="alert alert-danger" role="alert">angka pertama tidak boleh lebih kecil daripada angka kedua</div>';
            } else {
                $hasiltambah = $angka1 + $angka2;
                $hasilkurang = $angka1 - $angka2;
                $hasilkali = $angka1 * $angka2;
                $hasilbagi = $angka1 / $angka2;;
                $hasilsisabagi = $angka1 % $angka2;
                echo '<h4>Hasil Operasi Aritmatika</h4>';
                echo '<ul type="#">';
                echo '<li>Penjumlahan    : ' . $hasiltambah . '</li>';
                echo '<li>Pengurangan    : ' . $hasilkurang . '</li>';
                echo '<li>Perkalian      : ' . $hasilkali . '</li>';
                echo '<li>Pembagian      : ' . $hasilbagi . '</li>';
                echo '<li>Hasil Sisa Bagi: ' . $hasilsisabagi . '</li>';
            }
            ?>
        </div>
    </form>
</body>

</html>
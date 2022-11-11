<?php
// membuat Array berindeks otomatis
    $programmer_php = array( "Andi", "Budi", "Wati", "Gunawan", "Baco", "Becce", "Fatma");
    $programmer_python = array ("Andi", "Fatma", "Fadli", "Haris", "Baco");
    $kelompok_php = array("renaldi");

// Programmer PHP dengan nama diurutkan secara Ascending
    echo "<b>A. Programmer PHP dengan nama diurutkan secara Ascending</b> <br/>";
    sort($programmer_php);
    foreach ($programmer_php as $key => $val)
{
    echo "programmer PHP[" . $key . "] = " . $val . "<br>";
}
    echo '<br>';

// Programmer Python dengan nama diurutkan secara Descending
    echo "<b>B. Programmer PHP dengan nama diurutkan secara Descending </b> <br/>";
    rsort($programmer_python);
    foreach ($programmer_python as $key => $val)
{
    echo "programmer Python[" . $key . "] = " . $val . "<br>";
}
    echo '<br>';

// Daftar mahasiswa yang masuk kelompok Programmer PHP tapi tidak termasuk kelompok Programmer Python
    echo "<b>C. Daftar mahasiswa yang masuk kelompok Programmer PHP tapi tidak termasuk kelompok Programmer Python </b> <br/>";
    print_r($programmer_php);
    echo '<br>';
    echo "<br/>";

// Daftar mahasiswa yang masuk kelompok Programmer Python tapi tidak termasuk kelompok Programmer PHP
    echo "<b>D. Daftar mahasiswa yang masuk kelompok Programmer Python tapi tidak termasuk kelompok Programmer PHP </b> <br/>";
    print_r($programmer_php);
    echo '<br>';
    echo "<br/>";

//Daftar mahasiswa yang masuk kelompok Programmer PHP dan Programmer Python sekaligus
    echo "<b>E. Daftar mahasiswa yang masuk kelompok Programmer PHP dan Programmer Python sekaligus </b> <br/>";
    echo "Kelompok Programmer PHP<br/>";
    print_r($programmer_php);
    echo "<br/>";
    echo "<br/>";

    echo "Kelompok Programmer PHP<br/>";
    print_r($programmer_python);
    echo '<br>';
    echo "<br/>";

// penggunaan fungsi array_merge()
echo "<b>F. Penggunaan Fungsi array_merge() </b> <br/>";
    $array = array_merge($programmer_php, $programmer_python);
    print_r($array);
    echo '<br>';
    echo "<br/>";

// penggunaan fungsi array_push()
    echo "<b>Penggunaan Fungsi array_push() </b> <br/>";
    array_push($programmer_php,$kelompok_php);
    print_r($programmer_php);
    echo '<br>';
    echo "<br/>";
?>
<?php

$nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
$nim = isset($_POST["nim"]) ? $_POST["nim"] : "";
$prodi = isset($_POST["prodi"]) ? $_POST["prodi"] : "";

if ($nama != "" AND $nim != "" AND $prodi != "") {
    echo "hai perkenalkan, nama saya adalah " . $_POST['nama'] . " dengan NIM : " . $_POST['nim'] . " . Saya adalah Mahasiswa Jurusan " . $_POST['prodi'] . " <a href='input.html'>disini</a> ";
} else {
    echo "Isi semua data. Klik <a href='input.html'>disini</a> untuk kembali";
}

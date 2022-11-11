<!DOCTYPE html>
<html>
<head>
<title>Mengakses Variabel Array</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.cs
s" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCO
mLASjC" crossorigin="anonymous">
</head>
<body>
<?php
$mahasiswa = array
(
array("nim"=>"TI-001", "nama_mahasiswa"=>"Andi","program_studi"=>"Teknik Informatika"),

array("nim"=>"TI-002", "nama_mahasiswa"=>"Budi","program_studi"=>"Teknik Informatika"),

array("nim"=>"TI-003", "nama_mahasiswa"=>"Wati","program_studi"=>"Teknik Informatika"),

array("nim"=>"SI-001", "nama_mahasiswa"=>"Fatma","program_studi"=>"Sistem Informasi"),

array("nim"=>"SI-002", "nama_mahasiswa"=>"Wawan","program_studi"=>"Sistem Informasi") );

?>
<table class="table table-striped">
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Program Studi</th>
</tr>
<?php

$nomor = 1;
foreach ($mahasiswa as $rows => $row)
{
    echo "<tr>";
    echo "<td>$nomor</td>";
    
	foreach ($row as $col => $cell)
	{
        
		echo "<td>" . $cell . "</td>";

	}	
$nomor++;
}

?>
</table>
</body>
</html>
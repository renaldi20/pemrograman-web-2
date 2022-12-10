<?php
    $data=array(); // 2. Buatlah sebuah variabel array dengan nama $data dengan kondisi masih kosong(belum memiliki value)
    for($i=1; $i<=100; $i++) //3.Lakukanlah perulangan sebanyak 100 kali dengan menggunakan perintah FOR atau WHILE.
    {
        $angka_acak= rand(1, 1000); //4. function rand().
        array_push($data, $angka_acak);//5. function array_push().
    }
    print_r($data);

    foreach ($data as $nilai)
    {
        $hasil_bagi=$nilai%2;
        if($hasil_bagi==0)
        {
            
            echo  $nilai."<br>";
        }
    }
?>
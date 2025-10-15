<?php

    echo "<h3>Operator Aritmatika</h3>";
    
    $penjumlahan = 1 + 299;
    var_dump($penjumlahan);

    echo "<br>";

    $pengurangan = 299 - 1;
    var_dump($pengurangan);

    echo "<br>";

    $perkalian = 299 * 1;
    var_dump($perkalian);

    echo "<br>";

    $pembagian = 299 / 2;
    var_dump($pembagian);

    echo "<br>";

    $modulus = 299 % 2;
    var_dump($modulus);

    echo "<br>";

    $pangkat = 2 ** 3;
    var_dump($pangkat);

    echo "<br>";

    // operator penggabungan string / konkatenasi
    $nama_depan = "Agung";
    $nama_belakang = "Pratama";
    $nama_lengkap = $nama_depan . " " . $nama_belakang;
    var_dump("nama lengkap: " . $nama_lengkap);
    
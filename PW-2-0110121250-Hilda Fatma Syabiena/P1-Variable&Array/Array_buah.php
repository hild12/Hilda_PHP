<?php

    //mendeklarasikan array buah 
    $buah = ['Pisang', 'Apel', 'Jeruk', 'Mangga'];

    //menampilkan isi array 
    echo 'Buah index 0 => '.$buah[0].'<br>';
    echo 'Buah index 1 => '.$buah[1].'<br>';
    echo 'Buah index 2 => '.$buah[2].'<br>';
    echo 'Buah index 3 => '.$buah[3].'<br>';

    //menambahkan data pada array
    $buah [] = 'Alpukat';

    echo 'Buah index 4 => '.$buah[4].'<br>';

    //menampilkan jumlah array
    echo '<br>Jumlah array : '.count($buah);

    //menghapus data pada array
    unset($buah[4]);
?>
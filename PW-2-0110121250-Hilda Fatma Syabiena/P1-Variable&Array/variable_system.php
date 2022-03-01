<?php

//mendeklarasikan konstanta
define( 'PHI', 3.14);
define( 'DBSERVER','localhost_2');
define( 'DBNAME','db_mahasiswa');
define( 'DBUSER','root');
define( 'DBPASS','password');

//luas lingkaran
$r=10;
$luas = PHI * $r * $r;
$keliling = 2 * PHI * $r;

//menampilkan hasil
echo 'Luas Lingkaran : '.$luas.'<br>';
echo 'Keliling Lingkaran : '.$keliling.'<br>';

echo '<hr';

//menampilkan konstanta
echo 'Nilai PHI : '.PHI.'<br>';
echo 'Nilai DBSERVER : '.DBSERVER.'<br>';
echo 'Nilai DBNAME : '.DBNAME.'<br>';
echo 'Nilai DBUSER : '.DBUSER.'<br>';
echo 'Nilai DPASS : '.DBPASS.'<br>';

?>
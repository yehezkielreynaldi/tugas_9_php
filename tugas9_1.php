<?php
$angka_sebelumnya = 0;
$angka_sekarang = 1;


echo "$angka_sebelumnya $angka_sekarang";

for ($i = 0; $i < 20; $i++) {

    $output = $angka_sekarang + $angka_sebelumnya;
    echo " $output";


    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
}
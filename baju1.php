<?php
require_once 'baju.php';

$siswa = new siswa('kemeja', 'kaos pendek', 'kaos panjang', 'switer');

echo "baju kerah disebut.......... ".$organisasi->get_kemeja(). "<br>";
echo "baju tanpa kerah..... ".$organisasi->get_kaosp(). "<br>";
echo "baju tanpa kerah 2.. ".$organisasi->get_kasope()."<br>";
echo "baju yang menghangat kan. ".$organisasi->get_switer();
?>
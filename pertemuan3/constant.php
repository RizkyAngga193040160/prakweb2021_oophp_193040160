<?php
// RizkyAnggaSaputra-193040160
// https://github.com/RizkyAngga193040160/prakweb2021_oophp_193040160
// Pertemuan 3 - 24 September 2021


define('NAMA', 'Rizky Angga');
echo NAMA;

echo "<br>";

const UMUR = 32;
echo UMUR;

echo "<hr>";

// class Coba {
//     const NAMA = 'Rizky Angga';
// }

// echo Coba::NAMA;

echo "<hr>";
//Magic Constant
echo __LINE__; //Baris
echo "<br>";
echo __FIle__; //Menampilkan alamat dari file 
echo "<br>";
echo __DIR__;//Menampilkan Directory file
echo "<br>";

function coba(){
    return __FUNCTION__;    // Menampilkan nama function
}
echo coba();
echo "<br>";

class Coba {
    public $kelas = __class__;      //Menampilkan nama class
}
$obj = new Coba;
echo $obj->kelas;
echo "<br>";

echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;

?>
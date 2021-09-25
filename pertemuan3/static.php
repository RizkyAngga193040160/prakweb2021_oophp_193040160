<?php
// RizkyAnggaSaputra-193040160
// https://github.com/RizkyAngga193040160/prakweb2021_oophp_193040160
// Pertemuan 3 - 24 September 2021


// class ContohStatic{
//     public static $angka = 1;

//     public static function halo(){
//         return "Halo." . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public function halo(){
        return "Halo " .self::$angka++. " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";                            // Meneruskan penghitungan meskipun sudah di instasiasi objek baru

$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

?>
<?php

// class contohstatic {
//		public static $angka = 1;

//		public static function_exists halo(){
//			retrun "Halo" . self::$angka++ . "kali.";	
// 		}	
// } 

// echo contohstatic::$angka;
// echo "<br>";
// echo contohstatic::halo();
// echo "<hr>";
// echo contohstatic::halo();

class contoh{
	public static $angka = 1;

	public function halo(){
		return  "Halo" . self::$angka++ . "kali. <br>";
	}
}

$ojb = new contoh;
echo $ojb->halo();
echo $ojb->halo();
echo $ojb->halo();

echo "<hr>";

$ojb2 = new contoh;
echo $ojb2->halo();
echo $ojb2->halo();
echo $ojb2->halo();
?>
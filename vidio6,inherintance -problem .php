<?php

class produk{
	public  $judul,
	 		$penulis,
	 		$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;


			public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
				$this->judul = $judul;
				$this->penulis = $penulis;
				$this->penerbit = $penerbit;
				$this->harga = $harga;
				$this->jmlHalaman = $jmlHalaman;
				$this->waktuMain = $waktuMain;
				$this->tipe = $tipe;
			}
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap () {
		// komik : Naruto | Mashashi Kishimoto, shonen Jump (Rp. 30000) -100 halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "Komik"){
			$str .= " - {$this->jmlHalaman} halaman.";
		} else if( $this->tipe == "Game"){
			$str .= " ~ {$this->waktuMain} jam.";
		}
		return $str;
	}

}



class CetaInfoProduk {
	public function cetak( produk $produk ) {
		$str = "{ $produk->judul } | {$produk->getLabel()} (Rp. {$produk->harga}) ";
		return $str;
	}
}


$produk1 = new produk("Doraemon", "Micall", "Alexa", 40000, 100, 0, "Komik");
$produk2 = new produk("promise", "Bela", "Amanda", 550000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


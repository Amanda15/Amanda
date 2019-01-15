<?php

class produk{
	public  $judul,
	 		$penulis,
	 		$penerbit,
			$harga;


			public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
				$this->judul = $judul;
				$this->penulis = $penulis;
				$this->penerbit = $penerbit;
				$this->harga = $harga;
			}
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}



class CetaInfoProduk {
	public function cetak( produk $produk ) {
		$str = "{ $produk->judul } | {$produk->getLabel()} (Rp. {$produk->harga}) ";
		return $str;
	}
}


$produk1 = new produk("Doraemon", "Micall", "Alexa", 40000);
$produk2 = new produk("promise", "Bela", "Amanda", 550000);
$produk3 = new produk("i love from 38000ft");

echo "komik : " . $produk1->getLabel();
echo "<br>" ;
echo "Game : " . $produk2->getLabel();
echo "<br>" ;

$infoProduk1 = new CetaInfoProduk();
echo $infoProduk1->cetak($produk1);




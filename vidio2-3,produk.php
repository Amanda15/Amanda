<?php

class produk{
	public $judul = "Mimi_Peri",
	 $penulis = "Amanda_Sri_Lestari",
	 $penerbit = "Dinni_Risanti",
	 $harga = 0;

	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}
}

//$produk1 = new produk();
//$produk1->judul = "Doraemon";
//var_dump($produk2);

//$produk2 = new produk();
//$produk2->judul = "uncharted";
//$produk2->tambahproperty = "yuhuuu";
//var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Doraemon";
$produk3->penulis = "Micall";
$produk3->penerbit = "Alexa";
$produk3->harga = 40000;

$produk4 = new produk();
$produk4->judul = "promise";
$produk4->penulis = "Bela";
$produk4->penerbit = "Amanda";
$produk4->harga = 550000;

echo "komik : " . $produk3->getLabel();
echo "<br>" ;
echo "Game : " . $produk4->getLabel();





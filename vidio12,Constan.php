<?php 
// define('NAMA','Amanda Sri Lestari');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// class coba{
// 	const NAMA = 'Amanda Sri Lesatri';
// }

// echo coba::NAMA;



// echo __FILE__;

// function coba(){
// 	return __FUNCTION__;
// }

// ECHO coba();

class coba{
	public $kelas = __CLASS__;
}

$ojb = new coba;
echo $ojb->kelas;
?>
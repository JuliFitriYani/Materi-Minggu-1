<?php 

class Hewan
{
	public $jumlah_kaki,
	       $bisa_terbang = "Bisa terbang",
	       $bersuara;	
}
/**
 * 
 */
class kucing extends Hewan
{
	public $bisa_terbang = "Tidak bisa terbang";

	function jumlahkaki()
	{
		return $this->jumlah_kaki;
	}
	public function terbang()
	{
		return $this->bisa_terbang;
	}

	public function bersuara()
	{
		return "Meoong";
	}
}
/**
 * 
 */
 class anjing extends Hewan{
 	public $bisa_terbang = "Tidak bisa terbang";

	function jumlah_kaki()
	{
		return $this->jumlah_kaki;
	}
	
	public function terbang()
	{
		return $this->bisa_terbang;
	}

	public function bersuara()
	{
		return "Guk Guk Guk";
	} 	
}
/**
 * 
 */
 class elang extends Hewan{

	function jumlah_kaki()
	{
		return $this->jumlah_kaki;
	}
	
	public function terbang()
	{
		return $this->bisa_terbang;
	}

	public function bersuara()
	{
		return "Miip Miip";
	}	
}
/**
 * 
 */
 class angsa extends Hewan{

	function jumlah_kaki()
	{
		return $this->jumlah_kaki;
	}
	
	public function terbang()
	{
		return $this->bisa_terbang;
	}

	public function bersuara()
	{
		return "Kwak Kwak";
	}	
}
/**
 * 
 */
class sapi extends Hewan{
	public $bisa_terbang = "Tidak bisa terbang";
	
	function jumlah_kaki()
	{
		return $this->jumlah_kaki;
	}
	
	public function terbang()
	{
		return $this->bisa_terbang;
	}

	public function bersuara()
	{
		return "moooo";
	}	
}

 $Pendek = new kucing;
 $Pendek->jumlah_kaki = 4;
 echo "Pendek adalah Seekor kucing <br>";
 echo "Mempunyai kaki sebanyak : ". $Pendek->jumlah_kaki."<br>";
 echo $Pendek->bisa_terbang."<br>";
 echo "Pendek bersuara  : ". $Pendek->bersuara(). "<br>";
 
 echo "<hr>";

 $doggo= new anjing;
 $doggo->jumlah_kaki = 4;
 echo "doggo adalah Seekor anjing <br>";
 echo "Mempunyai kaki sebanyak : ". $doggo->jumlah_kaki."<br>";
 echo $doggo->bisa_terbang."<br>";
 echo "doggo bersuara : ". $doggo->bersuara(). "<br>";

 echo "<hr>";
 
 $zya = new elang;
 $zya->jumlah_kaki = 2;
 echo "zya adalah Seekor elang<br>";
 echo "Mempunyai kaki sebanyak : ". $zya->jumlah_kaki."<br>";
 echo $zya->bisa_terbang. "<br>";
 echo "zya bersuara : ". $zya->bersuara(). "<br>";

 echo "<hr>";

 $Masha = new angsa;
 $Masha->jumlah_kaki = 2;
 echo "Masha adalah Seekor angsa <br>";
 echo "Mempunyai kaki sebanyak : ". $Masha->jumlah_kaki."<br>";
 echo $Masha->bisa_terbang. "<br>";
 echo "Masha bersuara : ". $Masha->bersuara(). "<br>";

 echo "<hr>";

 $misca = new sapi;
 $misca->jumlah_kaki = 4;
 echo "Misca adalah Seekor sapi <br>";
 echo "Mempunyai kaki sebanyak : ". $misca->jumlah_kaki."<br>";
 echo $misca->bisa_terbang."<br>";
 echo "Misca bersuara  : ".$misca->bersuara(). "<br>";

 echo "<hr>";

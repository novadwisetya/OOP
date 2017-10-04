<?
// Interface
interface fungsiAlat {
    public function menulis();
	public function menggambar();	
}
class alatTulis{
// Encaptulation
	 private $tipe;
	 private $merk;
	 private $harga;

// Constructor	 
	function __construct( $t, $m, $h ) {
	   $this->tipe = $t;
	   $this->merk = $m;
	   $this->harga = $h;
	}
    function getTipe(){
        echo "Tipe : " . $this->tipe . "</br>";
    }
	function getMerk(){
		echo "Merk : " . $this->merk . "</br>"; 
	}
	function getHarga(){
		echo "Harga : " . $this->harga . "</br>";
	}
}
// Inheritance
class pencil extends alatTulis implements fungsiAlat{

	function __construct($tipe, $merk, $harga) {
       parent::__construct($tipe, $merk, $harga);     
   }
	public function menulis(){
		echo "Bisa digunakan untuk menulis <br>";
   }
	public function menggambar(){
		echo "Bisa digunakan untuk menggambar <br>";
	}		
}
// Inheritance
class pensilMekanik extends pencil{

	function __construct($tipe, $merk, $harga) {
       parent::__construct($tipe, $merk, $harga);     
   }
   
// Overriding
	public function menulis(){
		echo "Bisa digunakan untuk menulis <br>";
   }
	public function menggambar(){
		echo "Digunakan untuk menggambar gambar mekanik <br>";
	}
// Overloading
	public function __call($method, $args){
		if($method === 'menghitung'){
		echo 'Sum is calculated to ' . $this->_getSum($args) . "<br>";
		}else {
		echo 'Called method' . $method;
		}
	}
	public function _getSum($args){
		$sum = 0;
		foreach($args as $arg){
		$sum += $arg;
		}
		return $sum;
	}
}

// Instance
$ob1 = new pencil("Pensil 2B", " Stadler", " Rp 2000");
$ob1->getTipe();
$ob1->getMerk();
$ob1->getHarga();
echo "<br>";
$ob1->menulis();
$ob1->menggambar();

echo "=======================================<br><br>";

$ob2 = new pensilMekanik(" Pensil Mekanik", " Rotring", 500000);
$ob2->getTipe();
$ob2->getMerk();
$ob2->getHarga();
echo "<br>";
$ob2->menulis();
$ob2->menggambar();
$ob2->menghitung(50000, 2);
$ob2->menghitung(50000, 3, 0.2);

?>
<?
// Abstraction
abstract class absText{
	abstract protected function hapusText($text);
}
class penghapus extends absText{
	
	public function hapusText($text){
		if(strlen($text) > 15){
		echo $text = "";
		}else{
		echo $text;
		}
	}
}
$obj = new penghapus;
$obj->hapusText("qwe");
?>
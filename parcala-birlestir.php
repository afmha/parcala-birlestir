<?php
	
	class afmha{
		function parcala($a,$b,$c){
			global $parcalanan;
			$parcalanan = explode($a,$b,$c="255");
		}
		function birlestir($a,$b=","){
			global $birlestirilen;
			$birlestirilen = implode($a,$b);
		}
	}
	
	$afmha = new afmha();

?>

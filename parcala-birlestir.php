<?php
	
	class afmha{
		function parcala($a,$b){
			global $parcalanan;
			$parcalanan = explode($a,$b);
		}
		function birlestir($a,$b=","){
			global $birlestirilen;
			$birlestirilen = implode($a,$b);
		}
	}
	
	$afmha = new afmha();

?>

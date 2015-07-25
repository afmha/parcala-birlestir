<?php

	include("parcala.php");
	
	$veri = "Bu yazılım işleri biraz daha basitleştirmek ve Türkçeleştirmek için hazırlanmıştır.";
	
	$afmha->parcala("biraz",$veri);
	
	$afmha->birlestir($parcalanan);
	
	/*
		birlestir();
		Bu fonksiyon 2 argüman alabilir.Sadece 1. argüman önemlidir. 2.argüman otomatik olarak virgül(,) değerini alır.
		Dışarı $birlestirilen isminde global bir değişken çıkarır.
	*/
	
	echo $birlestirilen;

?>

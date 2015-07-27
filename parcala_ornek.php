<?php

	include("parcala.php");
	
	$veri = "Bu yazılım işleri biraz daha basitleştirmek ve Türkçeleştirmek için hazırlanmıştır.";
	
	$afmha->parcala("biraz",$veri);
	
	/*
			$afmha();
			afmha sınıfı içinde 2 adet fonksiyon bulunur.Bunlar sırasıyla:
				1-parcala();
				2-birlestir();
				
			parcala();
			Bu fonksiyon explode(); fonksiyonu ile aynı işlevi yapar.
			Sadece 2 argüman alır.Bunlar sırasıyla:
				1-Veri içinde hangi değer parçalanacak.
				2-Hangi veri kullanılacak.
				3-Limit Değer. (Otomatik olarak 255 değerini alır.)
			
			parcala(); fonksiyonu dışarı $parcalanan isminde Global bir değişken çıkarır.Bu değişkendeki veri bir array yani bir dizi olduğu için echo komudu ile çağırmak yerine echo var_dump(); veya print_r(); komutları kullanılır.
			
			explode(); fonksiyonunun 3.argümanı olan Limit değeri güncelleme ile sisteme eklendi.
	*/
	
	echo var_dump($parcalanan);
	
	print_r($parcalanan);

?>

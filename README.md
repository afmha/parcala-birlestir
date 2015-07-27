# parcala-birlestir
PHP üzerinde Türkçe parçala ve birleştir fonksiyonlarını kullanın.

$afmha();
			afmha sınıfı içinde 2 adet fonksiyon bulunur.Bunlar sırasıyla:
				1-parcala();
				2-birlestir();
				
			parcala();
			Bu fonksiyon explode(); fonksiyonu ile aynı işlevi yapar.
			Sadece 2 argüman alır.Bunlar sırasıyla:
				1-Veri içinde hangi değer parçalanacak.
				2-Hangi veri kullanılacak.
			
			parcala(); fonksiyonu dışarı $parcalanan isminde Global bir değişken çıkarır.Bu değişkendeki veri bir array yani bir dizi olduğu için echo komudu ile çağırmak yerine echo var_dump(); veya print_r(); komutları kullanılır.
			
			explode(); fonksiyonunun 3.argümanı olan Limit değeri şuan da bu fonksiyonda çalışmamaktadır.

      birlestir();
      	Bu fonksiyon 2 argüman alabilir.Sadece 1. argüman önemlidir. 2.argüman otomatik olarak virgül(,) değerini alır.
    		Dışarı $birlestirilen isminde global bir değişken çıkarır.

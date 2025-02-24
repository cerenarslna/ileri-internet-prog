<?php
// // //yeni txt dökümanı oluşturdu
// touch("webtasarimi2.txt");
// // //deneme klasörü içerisine dosya oluşturdu.
// touch("deneme/yeni_dosya.txt");

touch("ogrenci2.txt");
$belge=fopen("ogrenci2.txt","w+");
fwirte($belge, "Adım Soyadım: Ceren Arslan,\tOkul: GELİŞİM ÜNİVESİTESİ, \nProgramlama Dilleri:PHP");
echo "Belge üzerine metin eklendi";
fclose($belge);







?>
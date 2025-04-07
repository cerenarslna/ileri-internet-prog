<?php
// //base64 ile şifreleme 
// $sifre="gelisimüniversitesi";
// $sifrelendi=base64_encode($sifre);
// $sifre_cozuldu=base64_decode($sifrelendi);
// echo "girilen şifre".$sifre."<br>". 
// "şifrelenmiş veri:".$sifrelendi."<br>". 
// "şifrenin çözümlenmiş hali: ".$sifre_cozuldu."<br>";



// //gzcompress ile şifreleme 
// echo"<h4><i>string ifade boyutu küçültme</i></h4>";
// $yazi="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,, comes from a line in section 1.10.32.";
// $kucultme=gzcompress($yazi);
// echo "orijinal boyut".strlen($yazi)."<br>". 
// "sıkıştırılmış boyut: ".strlen($kucultme)."<br>";


// echo "<h4><i>şifreleme</i></h4>";
// $sifre="Gelişimüniversitesi34";
// $sifrelendi=gzcompress($sifre);
// $sifre_cozuldu=gzuncompress($sifrelendi);
// echo "Girilen şifre: " .$sifre."<br>". 
// "Şifrelenmiş veri : ".$sifrelendi."<br>". 
// "Şifrenin çözümlenmiş hali: ".$sifre_cozuldu."<br>";




//urlencode kullanımı
// $sifre="gelişim üniversitesi meslek yüksekokulu ";
// $sifrelendi=urlencode($sifre);
// $sifre_cozuldu=urldecode($sifrelendi);
// echo "Girilen şifre: ".$sifre."<br>". 
// "Şifrelenmiş veri: ".$sifrelendi."<br>". 
// "Şifrenin çözümlenmiş hali: ".$sifre_cozuldu."<br>";



//şifrenin zor kırılması için : 
// base64_enecode(gzcompress(urlencode)) -->kullan 


// brute force saldırısı --> deneme yanılma yoluyla şifre kırılması


// md5--> kolay kırlıyor
// geriye dönüştüreülemiyor




// //MD5 Kullanımı 
// echo "<h4>MD5 Kullanımı</h4>";
// $sifre="Gelisimüniversitesi34";
// $sifrelendi=md5($sifre);
// echo "Girilen şifre: ".$sifre."<br>". 
// "Şifrelenmiş veri: ".$sifrelendi."<br>";


// echo "<h4>MD5 Kullanımı Şifreye Yazı Ekleme </h4>";
// $sifre="Gelisimüniversitesi34";
// $ekle="Avcılar".$sifre;
// $sifrelendi=md5($sifre);
// $sifrelendi2=md5($ekle);
// echo "Girilen şifre: ".$sifre."<br>". 
// "Şifrelenmiş veri: ".$sifrelendi."<br>". 
// "İfade eklenmiş şifre: ".$sifrelendi2."<br>";




// //SHA1 İle şifreleme 
// echo "<h4>Sha1 Kullanımı</h4>"."<br>";
// $sifre="Gelisimuniveristesi34";
// $sifrelendi=sha1($sifre);
// echo "Girilen şifre: ".$sifre."<br>". 
// "Şifrelenmiş veri: ".$sifrelendi."<br>";
// $guvenlisifre=sha1(md5($sifre));
// echo "Güvenli şifre oluşturmanın yolu : ".$guvenlisifre."<br>";




// //CRC32 kullanımı
// echo "<h4>CRC32 Kullanımı </h4>"."<br>";
// $sifre="Gelisimüniversitesi34";
// $sifrelendi=crc32($sifre);
// echo "Girilen şifre: ".$sifre."<br>". 
// "Şifelenmiş veri: ".$sifrelendi."<br>";




// //Hash ile şifreleme
// echo "<h4>Hash Kullanımı </h4>"."<br>";
// $sifre="Gelisimüniversitesi34";
// $sifrelendi=hash('sha256', $sifre);
// echo "Girilen şifre: ".$sifre."<br>". 
// "Şifelenmiş veri: ".$sifrelendi."<br>";


// //CRYPT ile şifreleme
// echo "<h4>Crypt ile şifreleme </h4>"."<br>";
// error_reporting();


// //Basit Kullanım 
// $sifre="Gelsimüniversitesi34";
// // $sifrelendi=crypt($sifre);
// echo "Basit kullanım ile Şifreleme: ".$sifre."<br>";

// //CRYPT_STD_DES Kullanım 
// if(CRYPT_STD_DES)
// {
//     $sifrelendi=crypt($sifre, 'Ge');
//     echo "Standart DES Şifrelemesi: ".$sifrelendi."<br>";
// }
// if(CRYPT_EXT_DES)
// {
//     $sifrelendi=crypt($sifre,"Gelisimun");
//     echo "Gelişmiş DES Şifrelemsi: ".$sifrelendi."<br>";
// }
// if(CRYPT_MD5)
// {
//     $sifrelendi=crypt($sifre,'$1Gelisimunive$');
//     echo "MD5 Şifrelemesi : ".$sifrelendi."<br>";
// }
// if(CRYPT_BLOWFISH)
// {
//     $sifrelendi=crypt($sifre, '$2a$Gelisimuniversite$');
//     echo "Blowfish Şifrelemesi: ".$sifrelendi."<br>";
// }
// if(CRYPT_SHA256)
// {
//     $sifrelendi=crypt($sifre,'$5$Gelisimuniversite$');
//     echo "SHA256 Şifrelemesi: ".$sifrelendi."<br>";
    
// }
// if(CRYPT_SHA512)
// {
//     $sifrelendi=crypt($sifre, '$6$Gelisimuniversite$');
//     echo "SHA212 Şifrelemesi: ".$sifrelendi."<br>";
// }





// //Password_hash kullanımı ---> PROJEDE BUNU KULLAN (sifrelenmiş veri sürekli değisiyo)
// echo "<h4>Password_hash Kullanımı</h4>"."<br>";
// $sifre="Gelisimuniversitesi34";
// $sifrelendi=password_hash($sifre,PASSWORD_DEFAULT);
// echo "Girilen şifre: ".$sifre."<br>". 
// "Şifrelenmiş veri :".$sifrelendi."<br>";










?>
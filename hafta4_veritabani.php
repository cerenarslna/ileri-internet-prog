<?php
include ("hafta4_baglan.php");
if(isset($_POST["giris"]))
{
    $kadi=$_POST["kullanici_adi"];
    $ksifre=$_POST["sifre"];
    $sorgu=$db->query("SELECT * FROM kullanicilar WHERE kullanici_adi='$kadi' and sifre='$ksifre'",PDO::FETCH_ASSOC);
    if($sorgu->rowCount()>0)
    {
        session_start();
        $ad_soyad=$sorgu->fetch();
        $_SESSION["kadi"]=$kadi;
        $_SESSION["ksifre"]=$ksifre;
        echo "<h3>Hoşgeldiniz".$ad_soyad["ad_soyad"]."sayfamı ziyaret ettiğiniz için teşekkür ederim."."</h3>"."<br>"."<a href='hafta4_cikis.php'>Çıkış Yap</a>";
    }
    else{
        echo"<h3>Hatalı giriş yaptınız. Anasayfaya yönlendiriliyorsunuz.</h3>";
        header("refresh:4; url=hafta4_form.php");
    }
}


?>
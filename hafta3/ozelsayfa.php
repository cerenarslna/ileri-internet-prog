<?php
session_start();
if($_SESSION["kullaniciadi"]=="admin"&&
$_SESSION["kullanicisifre"]==123456)
{
    echo"<h3>Bu sayfa özel sayfadır.Oturumunuz başarıyla gerçekleştiği için bu sayfaya yönlendirildiniz.</h3>"."<br>". 
    "<a href='index.php'>Anasayfa</a>
    <a href='cikis.php'>Çıkış</a>";
}
else 
{
    header("Location:giris.php");
}
?>

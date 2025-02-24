<?php
$db=new PDO("mysql:host=localhost; dbname=durum; charset=utf8","root","");
if(isset($_POST["ekle"]))
{
    $kcilt=$_POST["cilt_no"];
    $kyazar_adi=$_POST["yazar_adi"];
    $kyayinevi=$_POST["yayinevi"];

    if($db)
    {
        echo "Veritabanı bağlantısı gerçekleşti."."<br>";
    }
    $ekle=$db->exec("INSERT INTO durum
    (cilt_no,yazar_adi,yayinevi) VALUES
    ('$kcilt','$kyazar_adi','$kyayinevi')");
    if($ekle)
    {
        echo  "Kayıt ekleme başarılı";
    }
    else
    {
        echo "Kayıt ekleme başarısız";
    }
}
?>
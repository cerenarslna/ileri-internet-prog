<?php
// session_start();
// $_SESSION["mesaj"]="Gelişim Üniversitesine Hoşgeldiniz";
// echo $_SESSION["mesaj"];

$_SESSION["dizi"]=array(

    "kullanici_id"=>123,
    "kullanici_adi"=>"Gelişim Ünivedrsitesi",
    "kullanici_mail"=>"cceren.arslann@gmail.com",
    "kullanici_telefon"=>"0 (212) 422 7000"
);
echo $_SESSION["dizi"]["kullanici_mail"]."<br>";
print_r($_SESSION["dizi"]);







?>
<?php
$veri=simplexml_load_file("hafta4_personel.xml");
// echo "<pre>";
// print_r($veri);
// echo "</pre>";
// foreach($veri->personel as $item)
// {
//     echo "Personelin Adı: ".$item->adsoyad."<br>". 
//     "Personelin Departmanı: ".$item->departman."<br>"."<hr>";
// }
$personel=$veri->addchild("personel");
$personel->addchild("adsoyad","Mehmet Soyal");
$personel->addchild("departman","İGYMO Müdür");
echo $veri->asXML();
foreach($veri->personel as $item)
{
    echo "Personel,n adı: ".$item->adsoyad. "<br>". 
    "Personelin departmanı: ".$item->departman."<br>."."<hr>";
}
?>

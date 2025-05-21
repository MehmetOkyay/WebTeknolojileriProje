<?php
$isim = $_POST["isim"];
$soyisim = $_POST["soyisim"];
$mail = $_POST["mail"];
$adres = $_POST["adres"];
$tarih = $_POST["tarih"];
$telno = $_POST["telno"];
$cinsiyet = $_POST["cinsiyet"];

$eklenecekbilgiler = "İsim : " . $isim  . "\nSoyisim : " . $soyisim . "\nMail : " . $mail . "\nAdres : " . $adres . "\nTarih : " . $tarih . "\nTelefon Numarası : " . $telno . "\nCinsiyet : " . $cinsiyet . "\n"; 

echo "İsim : " . $isim . "<br>";
echo "Soyisim : " . $soyisim . "<br>";
echo "Mail : " . $mail . "<br>";
echo "Adres : " . $adres . "<br>";
echo "Tarih : " . $tarih . "<br>";
echo "Telefon Numarası : " . $telno . "<br>";
echo "Cinsiyet : " . $cinsiyet . "<br>";

file_put_contents("iletişimbilgileri.txt", $eklenecekbilgiler, FILE_APPEND | LOCK_EX);
header("Refresh:2;url=iletisim.html");
?>
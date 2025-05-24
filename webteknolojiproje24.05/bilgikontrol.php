<?php
$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
if (($kullaniciadi == "b241210007@sakarya.edu.tr") && ($sifre == "b241210007")) {
    header("Refresh:2;url=hakkimda.html");
    echo("Giriş Başarılı! Hoşgeldin B241210007!");
}
else {
    header("Refresh:2;url=index.html");
    echo "Giriş Başarısız! Kullanıcı adı veya şifre hatalı. Giriş ekranına dönüyorsunuz...";
}
?>
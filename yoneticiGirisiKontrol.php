<?php

    include_once "config.php";
    include_once "functions.php";
    
    //formdan gelen veriler
    $kullanici_adi = saveConent($_POST['yoneticiGirisiAd']);
    $sifre = sha1($_POST['yoneticiGirisidSifre']);
    
    //soru_data tablosuna kayıt yapıyoruz. ve az önce oluşturduğumu soru_id'sini de bu tabloya kayıt ediyoruz.
    $yoneticilerSql = "SELECT * FROM yoneticiler";
    $yoneticiler = $DB->get_results( $yoneticilerSql );
?>
<html>
<head>
    <title>İletişim formu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<?php
   //girisin yapılıp yapışmadığını kontrol ediyor. 
   foreach($yoneticiler as $yonetici) {
        if($yonetici->kullanici_adi == $kullanici_adi && $yonetici->sifre == $sifre) {
            header('Location: yonetimPaneli.php');
            exit;
        } else {
            header('Location: yoneticiGirisiFormu.html');
            exit;
        }
    }
?>
</body>
</html>
<?php

    include_once "config.php";
    
    //formdan gelen veri
    $baslik = $_POST['yeniSoruBaslik'];
    $ad_soyad = $_POST['yeniSoruAdSoyad'];
    $email = $_POST['yeniSoruEmail'];
    
    //dosya
    $soru = $_POST['yeniSoruSoru'];
    $dosya1 = $_FILES['dosya1']['name'];
    $dosya1TempName = $_FILES['dosya1']['tmp_name'];
    
    //phpden gelen veri
    $ip = $_SERVER["REMOTE_ADDR"]; ;
    $tarih = date('Y-m-d H:i:s');
    
    //gecici dosyadan kendi dosyamıza kayıt
    move_uploaded_file($dosya1TempName, 'images/' . $dosya1 );
    
    //sorular tablosuna kayıt yapıp yeni kaydın id'sini alıyoruz
    $yeniSoruSql = "INSERT INTO sorular (soru) VALUES ('$soru')";
    $DB->query($yeniSoruSql);
    $soru_id=$DB->dbh;
    
    //soru_data tablosuna kayıt yapıyoruz. ve az önce oluşturduğumu soru_id'sini de bu tabloya kayıt ediyoruz.
    $yeniSoruSql2 = "INSERT INTO soru_data (baslik, ad_soyad, email, soru_id, dosya, kategori_id, ip, tarih, yayinda) VALUES ('$baslik', '$ad_soyad', '$email', $soru_id->insert_id, '$dosya1', 1, '$ip', '$tarih', 1)";
    $DB->query($yeniSoruSql2);
    echo $DB->last_error;
    
?>
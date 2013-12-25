<?php

    include_once "config.php";
    include_once "functions.php";
    include_once 'classes/mailcontrol_class.php';
    $mail=new MailControl;
    
    //formdan gelen veri
    $baslik = saveConent($_POST['yeniSoruBaslik']);
    $ad_soyad = saveConent($_POST['yeniSoruAdSoyad']);
    $mail->email = $_POST['yeniSoruEmail'];
    
    //dosya
    $soru = saveConent($_POST['yeniSoruSoru']);
    $dosya1 = $_FILES['dosya1']['name'];
    $dosya1TempName = $_FILES['dosya1']['tmp_name'];
    
    //phpden gelen veri
    $ip = $_SERVER["REMOTE_ADDR"]; ;
    $tarih = date('Y-m-d H:i:s');
    
    //gecici dosyadan kendi dosyamıza kayıt
    move_uploaded_file($dosya1TempName, 'images/' . $dosya1 );
    
    //kontroller
    $hatalar = array();
    
    if(empty($baslik)) {
        $hatalar[] = 'Lütfen bir başlık giriniz!';
    }
    
    if(empty($ad_soyad)) {
        $hatalar[] = 'Lütfen adınızı ve soyadınızı giriniz!';
    }
    
    if(empty($mail->email)) {
        $hatalar[] = 'Lütfen email giriniz!';
    } else {
         $emailKontrol=$mail->_mxcontrol();
        if($emailKontrol == 1){
           $email =$mail->email;
        }else{
            $hatalar[] = 'Lütfen geçerli bir email giriniz!';
        }
    }
    
   if(empty($soru)) {
        $hatalar[] = 'Lütfen soru giriniz!';
    }
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>İletişim formu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
</head>
<body>

<?php    
    
    if(count($hatalar)>0)
    {
        foreach($hatalar as $hata) {
            echo $hata . '<br />';
        }
    } else {
        //sorular tablosuna kayıt yapıp yeni kaydın id'sini alıyoruz
        $yeniSoruSql = "INSERT INTO sorular (soru) VALUES ('$soru')";
        $DB->query($yeniSoruSql);
        $soru_id=$DB->insert_id;

        //soru_data tablosuna kayıt yapıyoruz. ve az önce oluşturduğumu soru_id'sini de bu tabloya kayıt ediyoruz.
        $yeniSoruSql2 = "INSERT INTO soru_data (baslik, ad_soyad, email, soru_id, dosya, kategori_id, ip, tarih, yayinda) VALUES ('$baslik', '$ad_soyad', '$email', $soru_id, '$dosya1', 1, '$ip', '$tarih', 1)";
        $DB->query($yeniSoruSql2);
        echo $DB->last_error;
    }    
?>

</body>
</html>
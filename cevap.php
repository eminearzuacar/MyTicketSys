<?php

    include_once "config.php";
    include_once "functions.php";
    
    //formdan gelen veri
    $cevap = saveConent($_POST['soruCevap']);
    
    //urlden gelen veri
    $soru_id = (int)$_GET['soru'];
    
    $tarih = date('Y-m-d H:i:s');
    
    if(empty($cevap)) {
         $hata = 'Hata';
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
    
    if(count($hata)>0)
    {
       echo $hata;
    } else {
        $cevapSoruSql = "UPDATE sorular SET cevap = '1' WHERE soru_id = '$soru_id'";
        $DB->query($cevapSoruSql);
        $cevapSoruSql2 = "INSERT INTO sorular (soru, cevap, ana_soru_id, soru_tarihi) VALUES ('$cevap', '0', $soru_id, '$tarih')";
        $DB->query($cevapSoruSql2);
        echo '<br/>'.$DB->last_error;
    }    
?>

</body>
</html>
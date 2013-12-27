<?php

    include_once "config.php";
    include_once "functions.php";
    
    //linkten gelen soru idsi.
    $soru = $_GET['soruID'];
   
    if(is_integer((int)$soru)) {
        //soru_data tablosuna kayıt yapıyoruz. ve az önce oluşturduğumu soru_id'sini de bu tabloya kayıt ediyoruz.
        $sorularSql = "SELECT * FROM sorular INNER JOIN soru_data ON (sorular.soru_id = soru_data.soru_id) WHERE sorular.soru_id=$soru";
        $sorularDetay = $DB->get_results( $sorularSql );
        foreach($sorularDetay as $soruDetay) {
           echo $soruDetay->soru . '<br />';
        }
    }
    
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
   foreach($sorularDetay as $soruDetay) {
        $soruDetay . '<br />';
    }
?>
</body>
</html>
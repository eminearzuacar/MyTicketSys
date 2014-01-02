<?php

    include_once "config.php";
    include_once "functions.php";
    
    //linkten gelen soru idsi.
    $soru = $_GET['soruID'];
   
    if(is_integer((int)$soru)) {
        //soru_data tablosuna kayıt yapıyoruz. ve az önce oluşturduğumu soru_id'sini de bu tabloya kayıt ediyoruz.
        $sorularSql = "SELECT * FROM sorular LEFT JOIN soru_data ON (sorular.soru_id = soru_data.soru_id) WHERE sorular.soru_id=$soru or sorular.ana_soru_id=$soru ORDER BY soru_tarihi DESC";
        $sorularDetay = $DB->get_results( $sorularSql );
?>

<html>
<head>
    <title>İletişim formu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<div class="yoneticiAlani">
        <div class="yoneticiMenuAlani">
            <ul>
                <li>
                    <a href="yonetimPaneli.php" class="">Tüm Sorular</a>
                </li>
                <li>
                    <a href="yanitBekleyenSorular.php" class="">Yanıt Bekleyen Sorular</a>
                </li>
                <li>
                    <a href="yanitlananSorular.php" class="">Yanıtlanan Sorular</a>
                </li>
                <li>
                    <a href="" class="">Yeni Kategori Ekle</a>
                </li>
                <li>
                    <a href="" class="">Yeni Yönetici Ekle</a>
                </li>
            </ul>
        </div>
        <div class="yoneticiIcerikAlani">  
            <div class="sorularAlani">
<?php        
        foreach($sorularDetay as $soruDetay) {
            echo $soruDetay->soru . '<br />';
        }
?>  
                <form action="cevap.php?soru=<?php echo $soru; ?>" name="soruCevap" class="soruCevap" method="POST">
                   <textarea class="soruCevapTextarea" rows="4" cols="50" name="soruCevap"></textarea>
                   <input type="submit" class="formSubmit"/>
                </form>    
            </div>     
        </div>
    </div>     
</body>
</html>    
<?php   
    }
?>


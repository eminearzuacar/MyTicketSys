<?php
    session_start();
    
    if($_SESSION['yonetici'] === 1) {
    
    include_once "config.php";    
    
    $sorular_data_sorgusu = "SELECT * FROM sorular LEFT JOIN soru_data ON (sorular.soru_id = soru_data.soru_id) where sorular.cevap=1";
    $sorular_data = $DB->get_results( $sorular_data_sorgusu );

    // Tüm soruların dataları burda çekiliyor ve tablo oluşuyor.
    if(count( $sorular_data ) == 0 ){
        $sorular_data_sonuc = 'Hiç soru yok';
    }else{
        $sorular_data_sonuc .= '<table>';
        $sorular_data_sonuc .= '<tr><td>Baslik</td><td>Soru</td><td>Ad Soyad</td><td>Email</td><td>Dosya</td><td>Kategori</td><td>IP</td><td>Tarih</td></tr>';
        foreach ($sorular_data as $soru_data) {
            $sorular_data_sonuc .= '<tr>';
            $sorular_data_sonuc .=
                  '<td>' .
                    $soru_data->baslik .
                  '</td>
                   <td>
                   <a href="soru.php?soruID='.$soru_data->soru_id.'">' .
                    $soru_data->soru .
                  '</a>
                   </td>
                   <td>' .
                    $soru_data->ad_soyad .
                  '</td>
                  <td>' .    
                    $soru_email = $soru_data->email .
                 '</td>
                  <td>' .   
                    $soru_dosya = $soru_data->dosya .
                  '</td>
                   <td>' .
                    $soru_data->kategori_id .
                  '</td>
                   <td>' .
                    $soru_data->ip .
                  '</td>
                   <td>' .
                    $soru_data->tarih .
                  '</td>';      
              $sorular_data_sonuc .= '</tr>';     
        }
        $sorular_data_sonuc .= '</table>';
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                    <a href="kategoriEkle.php" class="">Yeni Kategori Ekle</a>
                </li>
            </ul>
        </div>
        <div class="yoneticiIcerikAlani">
            <?php echo $sorular_data_sonuc; ?>
        </div>
    </div>
</body>
</html>
<?php
    } else {
        header('Location: yoneticiGirisiFormu.html');
        exit;
    }
?>
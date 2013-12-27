<?php

    include_once "config.php";
    
    //soru_data tablosuna kayıt yapıyoruz. ve az önce oluşturduğumu soru_id'sini de bu tabloya kayıt ediyoruz.
    $tumSorularSql = "SELECT * FROM sorular INNER JOIN soru_data ON (sorular.soru_id = soru_data.soru_id)";
    $tumSorular = $DB->get_results( $tumSorularSql );
?>    

<html>
<head>
    <title>İletişim formu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
    <div class="tumSorularDiv">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td>Baslik</td>
                <td>Soru</td>
                <td>Ad - Soyad</td>
                <td>Email</td>
                <td>Dosya</td>
                <td>Kategori ID</td>
                <td>IP</td>
                <td>Tarih</td>
            </tr>
            
<?php

//Tüm soruları ekrana basıyoruz.
foreach($tumSorular as $soru) {
        echo '<tr>';
        echo '<td>' . $soru->baslik . '</td>';
        echo '<td><a href="soru.php?soruID='.$soru->soru_id.'">' . $soru->soru . '</a></td>';
        echo '<td>' . $soru->ad_soyad . '</td>';
        echo '<td>' . $soru->email . '</td>';
        echo '<td>' . $soru->dosya . '</td>';
        echo '<td>' . $soru->kategori_id . '</td>';
        echo '<td>' . $soru->ip . '</td>';
        echo '<td>' . $soru->tarih . '</td>';
        echo '</tr>';
    }
    
?>
        </table>
    </div>
</body>
</html>
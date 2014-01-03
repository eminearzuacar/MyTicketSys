<?php

$sorular_data_sorgusu = "SELECT * FROM sorular LEFT JOIN soru_data ON (sorular.soru_id = soru_data.soru_id) LEFT JOIN kategori ON (kategori.kategori_id = soru_data.kategori_id)";
$sorular_data = $DB->get_results( $sorular_data_sorgusu );

//echo '<pre>'; print_r($sorular_data);

// Tüm soruların dataları burda çekiliyor ve tablo oluşuyor.
if(count( $sorular_data ) == 0 ){
    $sorular_data_sonuc = 'Hiç soru yok';
}else{
    $sorular_data_sonuc .= '<table>';
    $sorular_data_sonuc .= '<tr><td>Baslik</td><td>Soru</td><td>Ad Soyad</td><td>Email</td><td>Dosya</td><td>Kategori</td><td>IP</td><td>Tarih</td></tr>';
    foreach ($sorular_data as $soru_data) {
        if($soru_data->baslik != ""){
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
                $soru_data->kategori .
              '</td>
               <td>' .
                $soru_data->ip .
              '</td>
               <td>' .
                $soru_data->tarih .
              '</td>';      
          $sorular_data_sonuc .= '</tr>'; 
        }    
    }
    $sorular_data_sonuc .= '</table>';
}

?>
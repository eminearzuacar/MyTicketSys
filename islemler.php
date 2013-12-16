<?php

// Tüm soruların dataları burda çekiliyor ve tablo oluşuyor.
if(count( $sorular_data ) == 0 ){
    $sorular_data_sonuc = 'Hiç soru yok';
}else{
    $sorular_data_sonuc .= '<table>';
    $sorular_data_sonuc .= '<tr><td>Baslik</td><td>Email</td><td>Dosya</td></tr>';
    $sorular_data_sonuc .= '<tr>';
    foreach ($sorular_data as $soru_data) {
        $sorular_data_sonuc .=
              '
              <td>' .
                $soru_data->baslik .
              '</td>
              <td>' .    
                $soru_email = $soru_data->email .
             '</td>
              <td>' .   
                $soru_dosya = $soru_data->dosya .
              '</td>';      
    }
    $sorular_data_sonuc .= '</tr>';
    $sorular_data_sonuc .= '</table>';
}

?>
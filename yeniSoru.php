<?php
     include_once "config.php";
     
      $kategoriler_sorgusu = "SELECT * FROM kategori";
      $kategoriler = $DB->get_results( $kategoriler_sorgusu );
?>
<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
   <div class="yeniSoruAlani"> 
       <div class="yeniSoruBaslikAlani">Bize Ulaşın</div>
        <form action="formKayit.php" name="yeniSoruFormu" class="yeniSoruFormu" method="POST" enctype="multipart/form-data"">
            <select name="yeniSoruKategori" class="formSelect">
                <?php
                    foreach ($kategoriler as $kategori) {
                        echo '<option value="'.$kategori->kategori_id.'">'.$kategori->kategori.'</option>';
                    }
                ?>
            </select>
            <input type="text" name="yeniSoruBaslik" class="formInput" placeholder="Başlık"/>
            <input type="text" name="yeniSoruAdSoyad" class="formInput" placeholder="Adınız Soyadınız"/>
            <input type="text" name="yeniSoruEmail" class="formInput" placeholder="Email"/> 
            <input type="text" name="yeniSoruSoru" class="formInput" placeholder="Soru"/>
            <div class="formFile">
                <input type="file" name="dosya1"/>
                <div class="yeniSoruEkle">Dosya Seçiniz</div>
            </div>
            <input type="submit" class="formSubmit"/>
        </form>
    </div>   
</body>
</html>
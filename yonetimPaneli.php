<?php
    include_once "config.php";
    include_once "islemler.php";
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
                <li>
                    <a href="" class="">Yeni Yönetici Ekle</a>
                </li>
            </ul>
        </div>
        <div class="yoneticiIcerikAlani">
            <?php echo $sorular_data_sonuc; ?>
        </div>
    </div>
</body>
</html>
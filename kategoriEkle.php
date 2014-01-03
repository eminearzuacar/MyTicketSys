<?php
    include_once "config.php";
    
    if(isset($_GET['ekle'])) {
        $kategori = $_POST['kategori'];
        $yeniKategoriSql = "INSERT INTO kategori (kategori) VALUES ('$kategori')";
        $DB->query($yeniKategoriSql);
    }
    
    session_start();
    
    if($_SESSION['yonetici'] === 1) {
        
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
            <form action="?ekle=ekle" method="POST" class="kategoriForm">
                Yeni kategori <input type="text" name="kategori"/>
                <input type="submit" />
            </form>
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
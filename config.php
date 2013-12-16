<?php

//1 hataları göster, 0 hataları gizle
error_reporting( 1 );

include_once "lib/ez_sql_core.php";
include_once "lib/ez_sql_mysqli.php";

$DB = new ezSQL_mysqli('root','','myticketsys','localhost');
$DB->query('SET character_set_client = utf8;');
$DB->query('SET character_set_results = utf8;');
$DB->query('SET character_set_connection = utf8;');

$DB->show_errors();

$sorular_data_sorgusu = "SELECT * FROM soru_data";
$sorular_data = $DB->get_results( $sorular_data_sorgusu );

?>
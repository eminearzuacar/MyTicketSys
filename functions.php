<?php

function saveConent($string) {
    if(get_magic_quotes_gpc()) {
            $string = stripslashes($string);
    }
    elseif(!get_magic_quotes_gpc()) {
            $string = addslashes($string);
    }
    $string = @mysql_real_escape_string(trim(htmlspecialchars($string)));
    return $string;
}

?>

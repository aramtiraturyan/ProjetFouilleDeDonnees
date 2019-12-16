
<?php

$file = file_get_contents('dataset.csv', FILE_USE_INCLUDE_PATH);
$str = preg_replace("/[^a-zA-Z0-9\s]/", ' ', $file);
file_put_contents('datanospeccar.csv',  $str);

?>
<?php
require "vendor/autoload.php";
require "vendor/Envms/FluentPDO/src/Query.php";
include 'config/config.php';
include 'Db.php';
include 'engine/function.php';

$query = (new Db)->getConnection()->from('weight_tbl');





var_dump(allMonths($query));

?>


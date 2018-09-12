<?php

ini_set("display_errors", 0);
$connect = mysql_connect('localhost','root','' ) or die ('erro de conexao');
$db = mysql_select_db('master') or die ('erro ao selecionar banco');
mysql_query($db, $connect);

 ?>

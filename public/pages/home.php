<?php
require ("../../bootstrap.php");
/*$email = $_POST['email'];
$password = $_POST['password'];
include_connect();
$sql = mysql_query("SELECT * FROM 'usuarios'");
session_start();

while ($line = mysql_fetch_array($sql)) {
  $_SESSION['keep'] = $line;
  if($_SESSION['email']=$email){
    if($_SESSION['senha']=$password){

    }else{echo "senha errada";}

  }else{echo "email errado";}
}


if (isset($_SESSION['id']))
{

*/
?>
<?php

include_header();

?>
<br>
<br>
<br>
<?php
if(isEmpty()){

  flash('message', 'preencha tudo');
  header("location:../index.php");
}


?>
Agora posso escrever o q eu quiser
<br>

<?php include_footer(); ?>
<?php //}
//else{

//echo "voce nao esta logado";

//}?>

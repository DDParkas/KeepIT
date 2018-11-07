<?php
require_once("../../bootstrap.php");
if(isEmpty()){
  flash('message', 'preencha tudo');
  header("location: ../index.php");
}

login('','../index.php', ' senha errada');

if(isset($_SESSION['keepLog'] )){
  echo "voce está logado<a href='desloga.php'>sair</a>";
}
else{echo "voce nao esta logado ";}
var_dump($_SESSION);
var_dump($_COOKIE);

 ?>

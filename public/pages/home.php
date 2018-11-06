<?php
require_once("../../bootstrap.php");
if(isEmpty()){
  flash('message', 'preencha tudo');
  header("location: ../index.php");

}
login('','../index.php', ' pagina não encontrada :c');

if(isset($_SESSION['id'] )){
  echo "voce está logado";
}
else{echo "voce nao esta logado";}

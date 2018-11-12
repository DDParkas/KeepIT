  <?php

require_once("../../bootstrap.php");
if(isEmpty()){
  flash('message', 'preencha tudo');
  header("location: ../index.php");
}

login('','../index.php', ' Login e/ou senha não encontrado. Tente novamente');

if(isset($_SESSION['keepLog'])){
header("location:index.php");
  }else{echo "voce nao esta logado ";}
  // var_dump($_SESSION);
  // var_dump($_COOKIE);

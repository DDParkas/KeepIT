<?php
require_once("../../bootstrap.php");
if(verificaLogado() == false){
  flash('alert', 'faça o login para ter acesso');
    
}

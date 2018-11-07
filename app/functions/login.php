<?php
function login($true, $false, $mensage){
error_reporting(0);
$login = $_POST['email'];
$senha = $_POST['password'];
$connect = mysqli_connect('localhost','root','','master');

$verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'");
$row_cnt = mysqli_num_rows($verifica);
if ($row_cnt<=0){
  echo"<script language='javascript' type='text/javascript'>alert('{$mensage}');window.location.href='{$false}';</script>";
  die();
  }
else{
	session_start();
	$linha = mysqli_fetch_array($verifica,MYSQLI_ASSOC);
	$_SESSION['keepLog'] = $linha;
  setcookie("login",$login);
  header("Location:{$true}");
  }
}
function verificaLogado(){
$keepLog =false;
if (isset($_SESSION['keepLog'])){
  $keepLog = true;
}else{ header("Location:../index.php");}
return $keepLog;

}
?>

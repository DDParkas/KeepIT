<?php
require ("../bootstrap.php");

if(isEmpty()){

  flash('message', 'preencha tudo');
  header("location: index.php");
}

error_reporting(0);
    $login = $_POST['email'];
    $senha = $_POST['password'];
    $connect = mysqli_connect('localhost','root','','master');



            $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'");
                  $row_cnt = mysqli_num_rows($verifica);
                if ($row_cnt<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
                    die();
                }else{
					session_start();
					$linha = mysqli_fetch_array($verifica,MYSQLI_ASSOC);
					$_SESSION['id'] = $linha;
                    setcookie("login",$login);
                    header("Location:pages/home.php");
                }



include_header();

?>

Agora posso escrever o q eu quiser
<br>

<?php include_footer(); ?>

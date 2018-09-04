<?php
require ("../../bootstrap.php");
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

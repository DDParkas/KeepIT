<?php require ("../bootstrap.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Keap It</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body class="">
              <div class="container">

      <div class="row justify-content-center" >

          <div class="col-md-7">
              <div class="card card-default">
                      <?= get('message')?>
                      <?= get('login')?>
                      <?= get('alert')?>
                  <div class="card-header">Keep It</div>

                  <div class="card-body">
                      <form id="form-checkin" method="POST" action="pages/loga.php">
                          <div class="form-group">
                            <div class="form-group">

                              <label>E-mail</label>
                              <input type="email" class="form-control" name="email" placeholder="exemple@mycompany.com">
                            </div>
                            <div class="form-group">
                              <label>Senha</label>
                              <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
                            </div>
                          <button type="submit" class="btn btn-primary">Enviar</button>

                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
 </body>
</html>

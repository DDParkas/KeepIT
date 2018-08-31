<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Keap It</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
              <div class="container">
      <div class="row justify-content-center" >
          <div class="col-md-7">
              <div class="card card-default">
                  <div class="card-header">Keep It</div>

                  <div class="card-body">
                      <form id="form-checkin" method="POST" action="?valida">
                          <div class="form-group">
                            <div class="form-group">
                              <span calss='alert alert- danger'>email incorreto</span>
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
